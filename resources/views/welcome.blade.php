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
    <div>
        <board></board>
    </div>
</main>
@vite('resources/js/app.js')
</body>
</html>
