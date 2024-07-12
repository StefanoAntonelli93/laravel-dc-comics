import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// importo path di bootstrap
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/scss/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // creo alias per facilitare il percorso per arrivare a resources
    resolve: {
        alias: {
            "~resources": "/resources/",
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});
