<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" sizes="16x16" type="image/x-icon" href="{{ asset('favicon16x16.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Fakeface</title>
    </head>

    <body>
        <div class="container">
            <header></header>
            <main>
                {{ $slot }}
            </main>
            <footer></footer>
        </div>
    </body>

</html>
