<!DOCTYPE html>
<html lang="cn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>shopping-mall</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="relative min-h-screen">
    <livewire:header />
    {{ $slot }}
    <livewire:footer />
    <livewire:components.modal />
    @livewireScripts
</body>

</html>
