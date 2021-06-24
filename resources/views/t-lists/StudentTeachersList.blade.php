<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Style links -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fa.css') }}">
        <link rel="stylesheet" href="{{ asset('css/teachers-list.css') }}">
    </head>
    <body class="antialiased">
        <div id="app">
            <header class="d-flex align-items-center">
                <div class="container fa-container-lg-bound">
                    <div class="text-white">
                        <h1>Meet our teachers</h1>
                        <div class="pt-4">Start practicing Arabic directly<br>with them!</div>
                    </div>
                </div>
            </header>

            <Student-Teachers-List></Student-Teachers-List>
        </div>
        <script src="{{ mix('js/app.js') }} "></script>
    </body>
</html>
