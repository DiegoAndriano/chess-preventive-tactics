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

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-990FPMR1YH');
    </script>

    @vite('resources/css/app.css')
</head>

<body id="app">
<main class="flex flex-col justify-center bg-stone-50 dark:bg-stone-900 items-center">
    <div class="max-w-[1280px]">
        <div class="bg-stone-50 font-Khula w-full h-auto dark:bg-stone-900">
            <nav class="px-4 py-4 w-full h-auto flex justify-between md:px-10 md:pt-6 items-center lg:px-40 lg:pt-6">
                <x-_svg-andina class="w-auto h-10 text-stone-700 dark:text-stone-300 md:h-14 lg:h-10"></x-_svg-andina>
                <x-_svg-cpt class="w-auto h-12 text-stone-700 dark:text-stone-300 md:h-16 lg:h-16"></x-_svg-cpt>
                <dark-switch></dark-switch>
            </nav>
            <div class="pb-4 pt-6 lg:pt-4">
                <h2 class="px-4 pb-6 text-stone-700 text-lg font-semibold  dark:text-stone-100 md:px-10 md:text-xl md:pb-10 lg:px-24">
                    Select the move that loses the game:</h2>
                <board :tactic="{{ json_encode($tactic) }}"></board>
            </div>


            <feedback-component></feedback-component>
            <footer class="w-full h-auto mt-8 pt-6 pb-20 bg-stone-600 text-stone-50 text-sm leading-loose dark:bg-stone-950 lg:px-10 xl:px-24">
                <div class=" flex justify-between px-6 py-6 items-center md:px-10">
                    <p class="font-semibold lg:text-lg"> About the project </p>
                    <a href="https://github.com/DiegoAndriano/chess-preventive-tactics" target="__blank">
                        <x-_svg-git class="w-6 h-6 md:w-8 md:h-8 md:mr-2"></x-_svg-git>
                    </a>

                </div>
                <div class="w-full h-auto px-6 md:px-10 lg:text-lg">
                    <p> Many chess players fall for tactics that could be avoided. Isn't there a tool that helps me
                        prevent the
                        movement that enables the tactic? <br>
                        Now there is! Chess preventing tactics (the older and mature brother of Chess common mistakes)
                        is an
                        open source tool that helps train the eye and detective skills from experienced players and
                        those who
                        are just starting out. <br>
                        In 48 hours we created this MVP with passion, enthusiasm and (of course) hard work, all kinds of
                        feedback from the chess community
                        are more than welcome.
                    </p>
                </div>
                <div class="w-full h-auto px-6 py-6 flex gap-6 md:px-10">
                    <p class="font-semibold lg:text-lg"> The tecnologies involved: </p>
                    <div class="flex gap-4 lg:gap-6">
                        <x-_svg-laravel class="w-6 h-6 lg:w-10 lg:h-10"></x-_svg-laravel>
                        <x-_svg-tailwind class="w-6 h-6 lg:w-10 lg:h-10"></x-_svg-tailwind>
                        <x-_svg-vue class="w-6 h-6 lg:w-10 lg:h-10"></x-_svg-vue>
                    </div>
                </div>
                <div class="px-6 py-4 md:px-10 flex flex-col">
                    <p class="font font-semibold py-2 lg:text-lg">Special thanks to these open source libraries:</p>
                    <a href="https://qwerty084.github.io/vue3-chessboard/events.html" target="__blank"
                       class="lg:text-lg">
                        Chess board
                    </a>
                    <a href="https://lichess.org/" target="__blank" class="lg:text-lg">
                        Lichess
                    </a>

                </div>
                <p class="font font-semibold px-6 py-4 md:px-10 lg:text-lg">The who...</p>
                <div class="w-auto h-auto px-6 flex justify-between md:px-10 lg:text-lg">
                    <div>
                        <p> Full-stack dev</p>
                        <div class="flex gap-2">
                            <p> Diego Andriano </p>
                            <a href="https://www.linkedin.com/in/diego-andriano-a59abb139/" target="__blank">
                                <x-_svg-linkedin class="w-6 h-6"></x-_svg-linkedin>
                            </a>
                        </div>
                    </div>
                    <div>
                        <p> UX/UI Designer</p>
                        <div class="flex gap-2 items-baseline">
                            <p> Josefina Barrera </p>
                            <a href="https://www.linkedin.com/in/josefina-barrera-946988a5/" target="__blank">
                                <x-_svg-linkedin class="w-6 h-6 "></x-_svg-linkedin>
                            </a>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
</main>

@vite('resources/js/app.js')
</body>

</html>
