import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/bootstrap.js',
                'public/css/styles.css'
            ],
            refresh: true,
        }),
    ],
});
