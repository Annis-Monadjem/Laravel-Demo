<!DOCTYPE html>
<html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" sizes="16x16" type="image/x-icon" href="{{ asset('favicon16x16.png') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Fakeface home</title>
    </head>

    <body>
        <div class="container" id="container">
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>

</html>
