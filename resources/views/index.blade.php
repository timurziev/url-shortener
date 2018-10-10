<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>URL shortener</title>
    </head>
    <body>
        <div class="cotainer">
            <form action="{{ route('create') }}" method="POST">
                @csrf
                <label for="url">Input your URL</label>
                <input id="url" type="url" required autocomplete="off" name="url">
                <input type="submit" name="submit" value="Create">
            </form>
            <p>{{ isset($url) ? "Your short URL is: $url" : '' }}</p>
        </div>
    </body>
</html>
