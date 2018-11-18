@extends('admin')
@section('content')
<title> Редактирование Файла</title>
  <div class="container">
    @if (session('message'))
    <div class="alert alert-success">
      {{session('message')}}
    </div>
    @endif
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
  <div class="row">
    <div class="col-md-12">

      {!! Form::open(['route' =>['update',$MyData->id_file], 'method'=>'PUT'])!!}
              <h2 align="center" class="form-signin-heading">Файл № {{$MyData->id_file}} </h2>
      <table border="0">
                <tr>
                  <td> File Name: </td>
            <td>{{$MyData->name}}</td>
        </tr>
        <tr>
          <td>  E-mail: </td>
        <td>   {{$MyData->client->email}} </td>
      </tr>
      <tr>
        <td>Description:</td>
        <td><textarea name="description">{{$MyData->description}}</textarea> </td>
      </tr>
      <tr> <td><button type="submit" class="btn btn-info"> Изменить </button><td> </tr>
      </table><br>
      <input type="hidden" class="" name="email" value="{{$MyData->client->email}}"><br>
      {!! Form::close() !!}

          </div>
        </div>

      @endsection
