/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
               "custom-gradient": "linear-gradient(to right, white 25%, white 37%, #D3003E 37%, #D3003E 75%)",
               "custom-gradient-dark": "linear-gradient(to right, #1f2937 25%, #1f2937 37%, #D3003E 37%, #D3003E 75%)",

            },
        },
    },
    plugins: [],
    darkMode: 'class',
};
