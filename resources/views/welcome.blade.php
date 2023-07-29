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
    <div class="bg-gray-100 pb-32 pt-10">
        <board :tactic="{{ json_encode($tactic) }}"></board>
    </div>
</main>
@vite('resources/js/app.js')
</body>
</html>
