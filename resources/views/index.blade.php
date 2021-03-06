<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tiny url</title>

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
    }

    .title {
        font-size: 84px;
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

    .form-label {
        display: block;
        color: #636b6f;
        font-weight: 600;
    }

    .input-field {
        margin: 20px 0;
        width: 300px;
        height: 25px;
        border: 1px solid #ccc;
    }

    .submit {
        border-radius: 3px;
        border: 0;
        height: 30px;
    }

    ul li, .msg{
        color: #fff;
        background: #ff3344;
        border-radius: 5px;
        font-size: 18px;
        font-weight: bold;
        padding: 3px;
    }
</style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Tiny url
            </div>
            <form action="/" method="POST">
                {{ csrf_field() }}
                <label for="url" class="form-label">Enter your url here and click shorten</label>
                <input type="text" name="url" id="url" class="input-field" autofocus required @if(session('url')) value ='{{ session('url') }}' @endif>
                <button type="submit" class="submit">Tinify</button>
            </form>

            @if(session('res'))
                <div class="msg">{{ session('res') }}</div>
            @endif

            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

{{--             <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        --}}        </div>
    </div>
</body>
</html>
