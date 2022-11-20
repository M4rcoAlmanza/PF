import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/css/materialize.min.css',
                'resources/css/materialize.css',
                'resources/js/app.js',
                'resources/js/init.js',
                'resources/js/materialize.min.js',
                'resources/js/materialize.js',

            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});
