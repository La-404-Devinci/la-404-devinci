const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                rubik: 'Rubik, sans-serif',
                poppins: 'Poppins, sans-serif'
            },
            colors: {
                // Orange
                'primary': '#F5A11A',
                'primary-alt': '#EEBE70',
                // Black ?
                'secondary': '#303030',
                'backgray': '#F3F3F3',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
