const mix = require("laravel-mix");
require("laravel-mix-purgecss");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .browserSync({
        proxy: process.env.MIX_APP_DOMAIN,
        open: false
    })
    .purgeCss()
    .webpackConfig({
        resolve: {
            alias: {
                icons: path.resolve(
                    __dirname,
                    "node_modules/vue-material-design-icons"
                )
            },
            extensions: [".vue"]
        }
    });
