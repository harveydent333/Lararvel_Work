@extends('layout')
@section('content')
<title> Админ панель </title>
@if (session('message'))
<div class="alert alert-success">
  {{session('message')}}
</div>
@endif

<h3 align="center"> Загруженные файлы </h3>

<table class="table" border="0">
  <thead>
    <tr>
      <th >ID_Файла</th>
      <th >ID_Клиента</th>
      <th >E-Mail</th>
      <th>Имя Файла</th>
      <th>Размер Файла</th>
      <th></th>
        <th></th>
          <th></th>
    </tr>
  </thead>
  <tbody>
@foreach($files as $file)
    <tr>
      <td>{{$file->id_file}}</td>
      <td>{{$file->client->id_client}}</td>
      <td>{{$file->client->email}}</td>
      <td>{{$file->name}}</td>
      <td>{{$file->size}}</td>
      <td>
        <div class='col-xs-2'>
        <a href="{{route('show',$file->id_file)}}" class="btn btn-info">Просмотр</a>
      </div>
    </td>
        <td>
      <div class='col-xs-2'>
          <a href="{{route('edit',$file->id_file)}}" class="btn btn-warning">Изменить</a>
          </div>
        </td>
        <td>
          <div class='col-xs-2'>
            {!! Form::open(['method'=>'DELETE',
            'route'=>['delete',$file->id_file]]) !!}
            <button class="btn btn-danger">Удалить</a>
</td>
            {!! Form::close() !!}
            </div>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
<br><hr><br>
<a href="{{route('user.create')}}" class="btn btn-primary">Создать</a>
<table class="table">
  <thead>
    <tr>
      <th >ID_Пользователя</th>
      <th >Название</th>
      <th >E-mail</th>
      <th>ID_Роли</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td >{{$user->name}}</td>
      <td>{{$user->email}}</td>

      <td>
        <div class='col-xs-2'>
        <a href="{{route('user.show',$user->id)}}" class="btn btn-info">Просмотр</a>
      </div>
    </td>
    <td>
      <div class='col-xs-2'>
          <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning">Изменить</a>
          </div>
</td>
<td>
          <div class='col-xs-2'>
            {!! Form::open(['method'=>'DELETE',
                'route'=>['user.delete',$user->id]]) !!}
            <button class="btn btn-danger">Удалить</a>
</td>
            {!! Form::close() !!}
            </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
