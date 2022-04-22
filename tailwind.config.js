const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Avenir', ...defaultTheme.fontFamily.sans],
                walsheim: ['Walsheim'],
                walsheimBold: ['Walsheim Bold'],
                walsheimMedium: ['Walsheim Medium'],
                walsheimBlack: ['Walsheim Black']
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
