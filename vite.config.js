import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            overlay: false,
          },
        watch: {
          usePolling: true,
          interval: 100
        }
      },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/admin.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
