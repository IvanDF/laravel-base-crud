<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
    
    <div id="app">
        <!-- Include main header -->
        @include('partials.main-header')
    
        <!-- Main content -->
        <main class="mainSection is-flex-grow-1 has-background-success-light">
            @yield('main-content')
        </main>

        <!-- Include main footer -->
        @include('partials.main-footer')
    </div>

    </body>
</html>
