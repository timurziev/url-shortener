<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>URL shortener</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="cotainer">
            <form action="{{ route('create') }}">
                @csrf
                <label for="url">Input your URL</label>
                <input type="url" required placeholder="Введите ссылку..." autocomplete="off" name="url">
                <input type="submit" name="submit" value="Create">
            </form>
        </div>
    </body>
</html>
