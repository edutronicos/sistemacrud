<!DOCTYPE html>
<html class="h-full" lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('refresh')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>@yield('title', 'Home')</title>
</head>
    <body class="h-full">
        <!-- Menu horizontal da página -->
        @include('layouts.menu-sup')
        <!-- Menu horizontal da página -->


        <!-- Conteúdo da página -->
            @yield('content')
        <!-- Conteúdo da página -->


        <!-- Rodapé da página -->
        @include('layouts.footer')
        <!-- Rodapé da página -->
    </body>
</html>