<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>@yield('titulo')</title>
    </head>
    <body>
        @component('contato.nav')@endcomponent
        @yield('conteudo')
    </body>
</html>