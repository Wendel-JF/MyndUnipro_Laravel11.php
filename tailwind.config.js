import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
/** @type {import('tailwindcss').Config} */

export default {
    darkMode: 'class', 
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    
    theme: {
       
        extend: {
            colors: {
                
                'button': '#121063',
                'white': '#ffffff',
                'purple': '#3f3cbb',
                'midnight': '#121063',
                'metal': '#565584',
                'tahiti': '#3ab7bf',
                'silver': '#ecebff',
                'bubble-gum': '#ff77e9',
                'bermuda': '#78dcca',
              },
            fontFamily: {
                /* primary: ['Inter', ...defaultTheme.fontFamily.sans], */ // Fonte primária
                /* primary: ['Open Sans"', ...defaultTheme.fontFamily.sans], */
                primary: ['Montserrat"', ...defaultTheme.fontFamily.sans],
                /* primary: ['Poppins"', ...defaultTheme.fontFamily.sans], */
                secondary: ['Roboto', 'sans-serif'], // Fonte secundária
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms],
    
};
