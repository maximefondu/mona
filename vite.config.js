import path from "path"
import {defineConfig} from "vite"
import laravel from "laravel-vite-plugin"
import sassGlobImports from "vite-plugin-sass-glob-import"
import {createSvgIconsPlugin} from "vite-plugin-svg-icons"

export default defineConfig({
    plugins: [
        sassGlobImports(),
        laravel([
            "resources/assets/scss/main.scss",
            "resources/assets/js/main.ts"
        ]),

        createSvgIconsPlugin({
            iconDirs: [path.resolve(process.cwd(), 'resources/assets/svg')],
            symbolId: "[name]",
            svgoOptions: true,
            inject: "body-last",
            customDomId: "svg-sprite"
        }),

    ]
});
