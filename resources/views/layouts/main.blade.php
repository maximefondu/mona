<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/assets/scss/main.scss'])
    <title>Mona</title>
</head>
<body>
    <x-header/>
    <main>
        {!! $slot !!}
    </main>
</body>
</html>
