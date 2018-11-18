@extends('user')
@section('content')
Пользователь: {{$user->email}} <br>
<a href="storage/upload/{{$file->name}}" download>Скачать файл</a><br><br>

@endsection
