<!doctype html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Music App - {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <h1>{{ $title }}</h1>
        {{ $slot }}
    </div>
    <x-footer></x-footer>
</body>

</html>
