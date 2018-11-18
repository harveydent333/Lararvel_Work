@extends('admin')
@section('content')
<head>
  <title> Информация о файле №{{$file->id_file}} </title>
  <style>
  .content {
      text-align: center;
      color: black;
      font-weight: bold;
  }
  textarea {
    width: 200%;
    height: 80px;
    resize: none;
}
.m-b-md {
    margin-bottom: 30px;
    text-align: center;
}
.title {
    font-size: 26px;
    color: black;
    text-align: center;
}
  </style>
</head>
<body>
  <dev class="content">
    <div class="title m-b-md">
      <table border="0">
        <tr>
          <td>  <h3 class="content">Файл №: </h3></td>
          <td><h3>{{$file->id_file}}</h3></td>
        </tr>
        <tr>
          <td>File Name:</td>
          <td>{{$file->name}}</td>
        </tr>
        <tr>
          <td>E-Mail: </td>
          <td>{{$file->client->email}} </td>
        </tr>
      </table>
      <br>
  <table>
    <tr>
      <td>Description:</td>
      <td><textarea readonly>{{$file->description}}</textarea> </td>
    </tr>
  </table>
</dev>
</dev>
</body>
@endsection
