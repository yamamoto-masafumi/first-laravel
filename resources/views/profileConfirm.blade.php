<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <table>
        <tbody>
          <tr>
            <th>姓</th><td>{{$datas['last_name']}}</td>
          </tr>
          <tr>
            <th>名</th><td>{{$datas['first_name']}}</td>
          </tr>
          <tr>
            <th>性別</th><td>{{$datas['gender']}}</td>
          </tr>
          <tr>
            <th>生年月日</th><td>{{$datas['birthday']}}</td>
          </tr>
          <tr>
            <th>郵便番号</th><td>{{$datas['address_code']}}</td>
          </tr>
          <tr>
            <th>住所</th><td>{{$datas['address']}}</td>
          </tr>
          <tr>
            <th>電話番号</th><td>{{$datas['tel']}}</td>
          </tr>
          <tr>
            <th>メールアドレス</th><td>{{$datas['email']}}</td>
          </tr>
        </tbody>
      </table>
      <form action="{{action('AccountController@editProfile')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="last_name" value="{{$datas['last_name']}}">
        <input type="hidden" name="first_name" value="{{$datas['first_name']}}">
        <input type="hidden" name="gender" value="{{$datas['gender']}}">
        <input type="hidden" name="birthday" value="{{$datas['birthday']}}">
        <input type="hidden" name="address_code" value="{{$datas['address_code']}}">
        <input type="hidden" name="address" value="{{$datas['address']}}">
        <input type="hidden" name="tel" value="{{$datas['tel']}}">
        <input type="hidden" name="email" value="{{$datas['email']}}">
        <input type="submit" value="送信">
      </form>
    </body>
</html>
