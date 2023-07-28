<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chess preventing Tactics</title>

    <link rel="icon" type="image/x-icon" href="{{ public_path('favicon.ico') }}">

    @vite('resources/css/app.css')
</head>
<body id="app">
<main>
    <p class="text-slate-500 font-bold text-5xl">Hola</p>
    <entrance>
        <div class="w-10 h-10 bg-gray-500">
            <p class="text-red-500 text-3xl">Que tal</p>
        </div>
    </entrance>
</main>
@vite('resources/js/app.js')
</body>
</html>
