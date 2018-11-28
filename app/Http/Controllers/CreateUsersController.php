<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\User;
use App\File;
use App\Client;
use App\Http\Requests\createTaskRequest;

class CreateUsersController extends Controller
{
  public function createUser()
  {
    return view('create');
  }

  public function storeUser(CreateTaskRequest $request)
  {
    $data = $request->all();
    User::create([
      'name' => ($request->name),
      'email' => ($request->email),
      'password' => Hash::make($request->password),
      'remember_token'=>Hash::make($request->password),
    ]);
    $email = $request->email;
    Mail::send('mail_user',['data'=>$request], function($message) use($email)
    {
      $message->from('testlaravel3334@gmail.com', 'Laravel');
      $message->to($email)->subject('Registation');
    });
    return redirect('admin')->with(['message'=>'Пользователь создан!']);
  }

  public function showUser($id)
  {
    $myData = User::find($id);
    return view('user_show',['myData'=>$myData]);
  }

  public function editUser($id)
  {
    $myData = User::find($id);
    return view('user_edit',['myData'=>$myData]);
  }

  public function deleteUser($id)
  {
    User::find($id)->delete();
    return redirect()->back()->with(['message'=>'Пользователь удален!']);
  }

  public function updatePass(CreateTaskRequest $request, $id)
  {
    $myData = User::find($id);
    $myData->fill([
      'name' => ($request->name),
      'email' => ($request->email),
      'password' => Hash::make($request->password),
      'remember_token'=>Hash::make($request->password),
    ]);
    $myData->save();
    return redirect()->back()->with(['message'=>'Данные успешно изменены!']);
  }

  public function updateProfil(CreateTaskRequest $request, $id)
  {
    $myData = User::find($id);
    $email_request = $request;
    $email = User::all();
    if($email_request->email == $myData->email){
      $myData->fill([
        'name' => ($request->name),
        'password' => $request->password,
        'remember_token'=>$request->password,
        'id_roles'=>($request->id_roles),
      ]);
      $myData->save();
      return redirect()->back()->with(['message'=>'Данные успешно изменены!']);
      else{
        foreach ($email as $mail) {
          if(($mail->email && $mail->id) != ($email_request->email && $email_request->id)){
            return redirect()->back()->with(['message'=>'Данный email уже используется!']);
          }
          else{
            $myData->fill([
              'name' => ($request->name),
              'email' => ($request->email),
              'password' => $request->password,
              'remember_token'=>$request->password,
              'id_roles'=>($request->id_roles),
            ]);
            $myData->save();
            return redirect()->back()->with(['message'=>'Данные успешно изменены!']);
          }
        }
      }
    }
  }
}
