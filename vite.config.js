import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";


export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/global.scss",
                "resources/sass/homepage.scss",
                "resources/js/app.js",
            ],
            refresh: true,
        }),

        tailwindcss(),
    ],

});
