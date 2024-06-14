import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        screens: {
            'sm': '600px',
            'md': '640px',
            'lg': '728px',
            'xl': '960px',
            '2xl': '1280px',
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '1.5rem',
                lg: '2rem',
                xl: '2rem',
                '2xl': '2rem',
            }
        },
        extend: {
            fontFamily: {
                'poppins': ['Poppins', ...defaultTheme.fontFamily.sans],
                'oswald': ['Oswald', ...defaultTheme.fontFamily.sans],
                'montserrat': ['Montserrat', ...defaultTheme.fontFamily.sans]
            },
            colors: {
                primary: {
                    100: '#CCEFFF',
                    200: '#99D0F2',
                    300: '#66B0DB',
                    400: '#338FC4',
                    500: '#006EAD',
                    600: '#003253',
                },
                secondary: '#D50005',
            }
        },
    },

    plugins: [forms],
};
