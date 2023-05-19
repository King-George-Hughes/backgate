import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/admin.js",
                "resources/js/admin-5.js",
                "resources/js/admin-4.js",
                "resources/js/app-layout.js",
            ],
            refresh: true,
        }),
    ],
});
