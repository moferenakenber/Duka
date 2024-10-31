import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/css/dashboard.css',
                    'resources/css/addproduct.css',
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                    'resources/css/mycss.css'
                    ],
            refresh: true,
        }),
    ],
});
