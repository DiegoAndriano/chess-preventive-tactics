<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chess preventing Tactics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&family=Khula:wght@300;400;600;700;800&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ public_path('favicon.ico') }}">

    @vite('resources/css/app.css')
</head>

<body id="app">
    <main class="bg-stone-50 font-Khula w-full h-auto">
        <nav class="px-4 py-4 w-full h-auto flex justify-between">
             <x-_svg-andina class="w-auto h-10 text-stone-700"> </x-_svg-andina>
            <x-_svg-cpt class="w-auto h-12 text-stone-700 "> </x-_svg-cpt>
            <div class="w-14 h-8 bg-stone-300 rounded-[100px] flex justify-end items-center px-1">
                <div class="w-6 h-6 bg-stone-50 rounded-[23px] absolute">
                   <x-_svg-sun class="w-6 h-6 text-stone-900"> </x-_svg-sun>
                </div>
            </div>
        </nav>
        <div class= "pb-4 pt-6">
           <p class="px-4 pb-6 text-stone-700 text-lg font-semibold">Select the move that enables the tactic:</p>
            <board :tactic="{{ json_encode($tactic) }}"></board>
        </div>
        <div class="flex justify-between px-4 py-6"> 
           <button class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg">
                <p class="font-semibold text-stone-700"> Qe 1 +</p>
           </button>
           <button class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg">
            <p class="font-semibold text-stone-700"> Qe 1 +</p>
           </button>
           <button class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg">
            <p class="font-semibold text-stone-700"> Qe 1 +</p>
            </button>           
        </div>
        <div class="flex justify-between items-center px-4 py-6">
            <button class=" w-auto h-auto flex items-center gap-4 px-2 py-2 rounded-lg text-stone-500"> 
                <span><x-_svg-chevron-left class="w-6 h-6"> </x-_svg-chevron-left></span>Previous
            </button>
            <button class=" w-auto h-auto flex items-center gap-4 px-2 py-2 rounded-lg  text-stone-500"> 
                Next<span><x-_svg-chevron-right class="w-6 h-6"> </x-_svg-chevron-right></span>
            </button>
        </div>
        <div class="flex items-center justify-between m-4 px-4 py-2 bg-stone-200 border border-stone-100 rounded-lg text-stone-700 ">
         <p>Give us some feedback!</p> 
         <x-_svg-edit class="w-6 h-6"></x-_svg-edit>
        </div>

    </main>
    @vite('resources/js/app.js')
</body>

</html>
