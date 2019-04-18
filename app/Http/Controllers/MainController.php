<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Container\Container;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\File;
use App\Client;
use App\Http\Requests\UploadFiles;
use App\Http\Requests\CreateTaskRequest;

class MainController extends Controller
{
  public function admin()
  {
      return view('index',['Users'=> User::all()],['files'=>File::all()],['clients'=>Client::all()]);
  }
  public function updateFileData(Request $request,$id)
  {
//    $myData = File::find($id);
//    $myData->fill([
//      'description'=>$request->description,
//    ]);
//    $myData->save();
      File::find($id)->fill([
          'description'=>$request->description,
      ])->save();
      return redirect()->back()->with(['message'=>'Данные успешно изменены!']);
  }

  public function deleteFile($id)
  {
    File::find($id)->delete();
    return redirect()->back()->with(['message'=>'Файл удален!']);
  }

  public function showFileData($id)
  {
      return view('show',['file'=>File::find($id)]);
  }

  public function edit($id)
  {
      return view('edit',['MyData'=>File::find($id)]);
  }

  public function index()
  {
  //    return view('welcome');
    return redirect(env('APP_URL_ANGULAR'));
  }

  public function storeFile (UploadFiles $request)
   {
     $file = $request->file;
     $find = false;
     foreach (Client::all() as $client){
       if ($client->email === $request->email){
         $find = true;
       }
     }
     if($find === false){
       Client::create([
         'email'=>$request->email,
         'has_user'=>md5($request->email),
       ]);
     }
     else{
       $has_user = Client::where('email',$request->email)->first();
       $has_user = $has_user->has_user;
     }
     $id_usera = Client::where('email',$request->email)->first();
     $id_usera = $id_usera->id_client;
     $has_file = md5(time());
     File::create([
       'name' => $request->file_name,
       'has_file'=>$has_file,
       'size' => $request->file_size,
       'description'=>$request->description,
       'id_client'=>$id_usera,
     ]);
     $email = $request->email;
     Mail::send('mail',['data'=>[$has_user,$has_file]], function($message) use($email,$has_file,$has_user)
     {
         $message->from('testlaravel3334@gmail.com', 'Laravel');
         $message->to($email)->subject('File');
     });
     return redirect()->back()->with(['message'=>'Ваш Файл Успешно загружен.
           На указанный Вами электронный адрес отправлено письмо с ссылкой на Файл!']);
   }

   public function upload($has_user,$has_file)
   {
     return view('upload',
         ['file'=>File::where('has_file',$has_file)->first()],
         ['user'=>Client::where('has_user',$has_user)->first()]);
   }
}
