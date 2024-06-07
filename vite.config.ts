import { defineConfig } from 'vite';

export default defineConfig({
    server: {
        proxy: {
            '/api': {
                target: 'http://localhost', // Assurez-vous que cela correspond à l'adresse de votre serveur Nginx
                changeOrigin: true,
                rewrite: (path) => path.replace(/^\/api/, ''),
            },
        },
    },
});
