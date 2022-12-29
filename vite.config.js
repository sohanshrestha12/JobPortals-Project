import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import path from 'path';
=======
 import path from "path";
>>>>>>> 83e5daa8f10653bc180fec20d404b0e783419bfd

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
<<<<<<< HEAD
     resolve: {
        alias: {
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
=======
    resolve: { 
        alias: { 
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'), 
        } 
>>>>>>> 83e5daa8f10653bc180fec20d404b0e783419bfd
    },


});
