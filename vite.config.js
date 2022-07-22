import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import sassGlobImports from 'vite-plugin-sass-glob-import';

export default defineConfig({
    plugins: [
        laravel([
            'resources/assets/scss/main.scss',
        ]),
        sassGlobImports(),
    ],
});
