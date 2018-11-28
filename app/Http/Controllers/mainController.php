<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Container\Container;
use Mail;
use App\User;
use App\File;
use App\Client;
use App\Test;
use App\Http\Requests\UploadFiles;
use App\Http\Requests\CreateTaskRequest;
use config\app;

class MainController extends Controller
{
  public function admin()
  {
    $file = File::all();
    $client = Client::all();
    $myData = User::all();
   return view('index',['Users'=>$myData],['files'=>$file],['clients'=>$client]);
  }
  public function update(Request $request,$id)
  {
    $myData = File::find($id);
    $myData->fill([
      'description'=>$request->description,
    ]);
    $myData->save();
    return redirect()->back()->with(['message'=>'Данные успешно изменены!']);
  }

  public function delete($id)
  {
    File::find($id)->delete();
    return redirect()->back()->with(['message'=>'Файл удален!']);
  }

  public function show($id)
  {
    $file = File::find($id);
    return view('show',['file'=>$file]);
  }

  public function edit($id)
  {
    $MyData = File::find($id);
    return view('edit',['MyData'=>$MyData]);
  }

  public function index()
  {
    return redirect(env('APP_URL_ANGULAR'));
  }

  public function storeFile (UploadFiles $request)
   {
     $file = $request->file;
     $clients = Client::all();
     $find = false;
     foreach ($clients as $client){
       if ($client->email == $request->email){
         $find = true;
       }
     }
     if($find == false){
       $has_user = md5($request->email);
       $email = $request->email;
       Client::create([
         'email'=>$email,
         'has_user'=>$has_user,
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
     $data = [$has_user,$has_file];
     Mail::send('mail',['data'=>$data], function($message) use($email,$has_file,$has_user)
     {
       $message->from('testlaravel3334@gmail.com', 'Laravel');
       $message->to($email)->subject('File');
     });
     return redirect()->back()->with(['message'=>'Ваш Файл Успешно загружен.
           На указанный Вами электронный адрес отправлено письмо с ссылкой на Файл!']);
   }

   public function upload($has_user,$has_file)
   {
     $file = File::where('has_file',$has_file)->first();
     $user = Client::where('has_user',$has_user)->first();
     return view('upload',['file'=>$file],['user'=>$user]);
   }
}
