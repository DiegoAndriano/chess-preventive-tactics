<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chess preventing Tactics</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&family=Khula:wght@300;400;600;700;800&family=Montserrat:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ public_path('favicon.ico') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-990FPMR1YH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-990FPMR1YH');
    </script>

    @vite('resources/css/app.css')
</head>

<body id="app">
<main class="bg-stone-50 font-Khula w-full h-auto">
    <nav class="px-4 py-4 w-full h-auto flex justify-between">
        <x-_svg-andina class="w-auto h-10 text-stone-700"></x-_svg-andina>
        <x-_svg-cpt class="w-auto h-12 text-stone-700 "></x-_svg-cpt>
        <div class="w-14 h-8 bg-stone-300 rounded-[100px] flex justify-end items-center px-1">
            <div class="w-6 h-6 bg-stone-50 rounded-[23px] absolute">
                <x-_svg-sun class="w-6 h-6 text-stone-900"></x-_svg-sun>
            </div>
        </div>
        <div class="flex justify-between px-4 py-6"> 
           <button class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg font-semibold text-stone-700">
                 Qe 1 +
           </button>
           <button class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg font-semibold text-stone-700">
                Qe 1 +
            </button>
            <button class="w-auto h-auto border border-[1.5px] border-stone-300 px-4 py-2 rounded-lg font-semibold text-stone-700">
                Qe 1 +
            </button>
        </div>
        <div class="flex justify-between items-center px-4 py-6">
            <button class=" w-auto h-auto flex items-center gap-4 px-2 py-2 rounded-lg text-stone-500"> 
                <span><x-_svg-chevron-left class="w-6 h-6"> </x-_svg-chevron-left></span>Previous game
            </button>
            <button class=" w-auto h-auto flex items-center gap-4 px-2 py-2 rounded-lg  text-stone-500"> 
                Next game <span><x-_svg-chevron-right class="w-6 h-6"> </x-_svg-chevron-right></span>
            </button>
        </div>
        <div class="flex items-center justify-between m-4 px-4 py-2 mb-8 bg-stone-200 border border-stone-100 rounded-lg text-stone-700 ">
            <p>Give us some feedback!</p> <x-_svg-edit class="w-6 h-6"></x-_svg-edit>
        </div>
        <footer class="w-full h-auto mt-8 pt-6 pb-20 bg-stone-600 text-stone-50 text-sm leading-loose"> 
            <div class=" flex justify-between px-6 py-6 items-center">
                <p class="font-semibold"> About the project </p>
                <x-_svg-git class="w-6 h-6"> </x-_svg-git>
            </div>
            <div class="w-full h-auto px-6">
                <p> Many chess players fall for tactics that could be avoided. Isn't there a tool that helps me prevent the movement that enables the tactic? <br>
                    Now there is! Chess preventing tactics (the older and mature brother of Chess common mistakes) is an open source tool that helps train the eye and detective skills from experienced players and those who are just starting out. <br>
                    In 48 hours we created this MVP with passion, enthusiasm and (of course) hard work, all kinds of feedback from the chess community 
                    are more than welcome.
                </p>
            </div>
            <div class="w-full h-auto px-6 py-6 flex gap-6">
               <p class="font-semibold"> The tecnologies involved: </p>
               <div class="flex gap-4">
                    <x-_svg-laravel class="w-6 h-6"> </x-_svg-laravel>
                    <x-_svg-tailwind class="w-6 h-6"></x-_svg-tailwind>
                    <x-_svg-vue class="w-6 h-6"></x-_svg-vue>
               </div>
            </div>
            <div class="px-6 py-4">
                <p class="font font-semibold py-2">Special thanks to these open source libraries:</p>
                <p>https://github.com/onspli/chess</p>
                <p>https://qwerty084.github.io/vue3-chessboard/events.html</p>
            </div>
            <p class="font font-semibold px-6 py-4">The who...</p>
            <div class="w-auto h-auto px-6 flex justify-between"> 
                <div>
                    <p> Full-stack dev</p>
                    <div class="flex gap-2"> 
                        <p> Diego Andriano </p> <x-_svg-linkedin class="w-6 h-6"></x-_svg-linkedin>
                    </div>
                </div>
                <div>
                    <p> UX/UI Designer</p>
                    <div class="flex gap-2"> 
                        <p> Josefina Barrera </p> <x-_svg-linkedin class="w-6 h-6"></x-_svg-linkedin>
                    <div>
                </div>
            </div>
        </footer>

</main>
@vite('resources/js/app.js')
</body>

</html>
