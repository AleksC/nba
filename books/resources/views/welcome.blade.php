<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

    </head>
    <body>
        <ul>
            @foreach($books as $book)
                <li> Book name: {{ $book->title }}</li>
            @endforeach
        </ul>
    </body>
</html>
