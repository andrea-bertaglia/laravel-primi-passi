<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL PRIMI PASSI</title>
</head>
<body>
    <h1>Hello World!</h1>

    <ul>
        @foreach ($links as $link)
            <h3 style="display: inline-block; margin-left: 2em;"><a href="/">{{strtoupper($link)}}</a></h3>
        @endforeach
    </ul>

    <hr>

    <a href="/">HOME</a>
    <a href="test">TEST</a>

    <hr>

    <h2>{{ $message }} {{$page}}</h2>
</body>
</html>
