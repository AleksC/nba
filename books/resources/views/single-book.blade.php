<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

    </head>
    <body>
        <div>
            <h1> Title: {{ $book->title }} <h1>

            <h3> ID: {{ $book->id }} </h3>
        </div>
    </body>
</html>
