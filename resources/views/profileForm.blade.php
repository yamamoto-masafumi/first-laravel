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
      <form action="{{action('AccountController@profileEditConfirm')}}" method="post" enctype="multipart/form-data">
        @csrf
        <span>姓</span><input type="text" name="last_name"><br>
        <span>名</span><input type="text" name="first_name"><br>
        <span>性別</span><input type="text" name="gender"><br>
        <span>生年月日</span><input type="text" name="birthday"><br>
        <span>郵便番号</span><input type="text" name="address_code"><br>
        <span>住所</span><input type="text" name="address"><br>
        <span>電話番号</span><input type="text" name="tel"><br>
        <span>メールアドレス</span><input type="text" name="email"><br>
        <input type="submit" value="送信">
      </form>
    </body>
</html>
