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
            colors: {
                hdlPeach: '#F7583A',
                hdlPeachStrong: '#C6472E',
                hdlBananaHi: '#FFD42D',
                hdlBlack: '#00283a',
                hdlBanana: '#F8AE17',
                hdlBlackHi: '#101419'
            },
            boxShadow: {
                '1xl': '0 0 10px rgba(0, 0, 0, 0.5)',
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
