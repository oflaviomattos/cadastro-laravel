<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name')}} :: @yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Infoestrutura"> 

    </div>
    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
        <p>Infoestrutura - 2024 </p>
    </footer>    
</body>
</html>