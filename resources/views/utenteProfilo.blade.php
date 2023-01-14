<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profilo Utente</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <h5>{{ $utente['username']}}</h5><br/>
            <p>
                Nome:{{ $utente['nome']}}<br/>
                Cognome:{{ $utente['cognome'] }}<br/>
                Email:{{ $utente['email'] }}<br/>

                @if($associazione!= 'null')
                    Associazione:{{ $associazione['nome'] }}<br/>
                @endif

            </p>
        </div>

    </body>
</html>
