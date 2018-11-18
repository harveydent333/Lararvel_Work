<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                color: black;
                font-weight: bold;
            }

            .title {
                font-size: 26px;
                color: black;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            textarea {
              width: 120%;
              height: 80px;
              resize: none;
          }
          input{
            width: 120%;
          }
        </style>
    </head>
    <body>
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">

        <form action="{{route('storeFile')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field()}}
  <table border="0">
    <tr>
            <td colspan="2">Форма для загрузки Вашего файла<td>
    </tr>
  </tr>
      <tr><td><br></td></tr>
  <tr>
      <tr>
          <td>E-Mail</td>
          <td><input type="text" class="" name="email" value="{{old('email')}}"><br></td>
      </tr>
          <tr><td><br></td></tr>
      <tr>
            <td>Description</td>
            <td><textarea name="description">{{old('description')}}</textarea><br></td>
      </tr>
            <tr><td><br></td></tr>
      <tr>
              <td></td>
              <td><input type="file" name="file"></td>
      </tr>
              <tr><td><br></td></tr>
      <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success">Создать</button></td>
                <td></td>
      </tr>
</table>
              </form>
                </div>


            </div>
        </div>
    </body>
</html>
