<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>App Gestao - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href='{{ asset('css/global-style.css') }}'>
    </head>

    <body>
        @include('site.layouts._partials.topo')
        @yield('Content')
    </body>
</html>                                                 