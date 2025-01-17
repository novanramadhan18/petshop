/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                jost: ["Jost", "sans-serif"],
            },
            colors: {
                primary: "#EA4175",
                secondary: "#007580",
                hover_primary: "#c42d60",
            },
        },
    },
    plugins: [],
};
