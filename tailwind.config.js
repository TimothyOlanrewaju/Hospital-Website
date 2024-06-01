import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/**/*.js",
        "./resources/**/*.{blade.php,css,js}",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: [],
    },
    plugins: [
        require("flowbite/plugin"),
        require("daisyui"),
        forms,
        typography,
    ],
};
