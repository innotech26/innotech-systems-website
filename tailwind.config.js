import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    dark: '#262262',   // Deep Purple/Blue
                    primary: '#0F75BC', // Medium Blue
                    cyan: '#00AEEF',   // Cyan/Light Blue
                    white: '#FFFFFF',
                }
            }
        },
    },

    plugins: [forms],
};