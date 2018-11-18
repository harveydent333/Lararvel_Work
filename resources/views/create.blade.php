@extends('admin')
@section('content')
<title> Создание пользователя </title>
    <h3 align="center">Creat user </h3>
    @if(count($errors)>0)
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{$error}} </li>
                    @endforeach
                  </ul>
          </div>
        </div>
      </div>
    </div>
      @endif

      @if (session('message'))
      <div class="alert alert-success">
        {{session('message')}}
      </div>
      @endif

      {!! Form::open(['route' =>['user.store']])!!}
      <div class="form-group">
        Name:
        <input type="text" class="form-control" name="name" value="{{old('name')}}">
        E-Mail:
        <input type="text" class="form-control" name="email" value="{{old('email')}}">
        Password:
        <input type="password" class="form-control" name="password" value="">
        Confirm Password:
        <input type="password" class="form-control" name="password_confirmation" value="">
        <br>
        <button class="btn btn-success">Создать</button>
     </div>
       {!! Form::close() !!}
@endsection
