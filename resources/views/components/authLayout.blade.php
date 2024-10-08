<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" sizes="16x16" type="image/x-icon" href="{{ asset('favicon16x16.png') }}">
        <link rel="shortcut icon" sizes="32x32" type="image/x-icon" href="{{ asset('favicon32x32.png') }}">
        <link rel="shortcut icon" sizes="64x64" type="image/x-icon" href="{{ asset('favicon64x64.png') }}">
        @vite(['resources/css/app.css', 'resources/css/normalize.css', 'resources/js/app.js'])
        <title>Fakeface</title>
    </head>

    <body>
        <header></header>
        {{ $slot }}
        <footer></footer>
    </body>

</html>
