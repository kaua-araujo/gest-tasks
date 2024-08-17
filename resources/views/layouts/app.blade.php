<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gest-Task</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <div class="container">
        {{ $slot }}
    </div>
    @yield('content')

    @livewireScripts
</body>
</html>