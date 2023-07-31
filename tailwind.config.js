/** @type {import('tailwindcss').Config} */
module.exports = {
    important: true,
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
				Khula: ["Khula", "sans-serif"],
			 },
        },
    },
    plugins: [],
}

