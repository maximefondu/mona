<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/assets/scss/main.scss'])
    @vite(['resources/assets/js/main.ts'])
    <title>Mona</title>
</head>
<body>
<main>
    {!! $slot !!}
</main>
</body>
</html>
