<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('title', 'Sigac')</title>
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        <h1>SIGAC - Sistema de Gerenciamento de Atividades Complementares</h1>
        @yield('content')
    </div>
</body>
</html>