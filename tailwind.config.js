const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("daisyui")],

    daisyui: {
        styled: true,
        themes: true,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
        prefix: "",
        darkTheme: "dark",
        themes: [
            {
                mytheme: {
                    primary: "#b802f4",

                    secondary: "#c94266",

                    accent: "#bcf49c",

                    neutral: "#1E2025",

                    "base-100": "#2F303D",

                    info: "#95BCE9",

                    success: "#115F4E",

                    warning: "#D4A816",

                    error: "#E34531",
                },
            },
        ],
    },
};
