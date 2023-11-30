/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                header: "#394742",
                link: {
                    500: "#00bd7e",
                    900: "#008a5c",
                },
            },
            backgroundImage: {
                hero: "url('/resources/assets/hero.jpg')",
            },
        },
    },
    plugins: [],
};
