const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy(`resources/images`, `public/images`, false)
    .copy(`resources/css`, `public/css`, false)
    .copy(`resources/js`, `public/js`, false)
    .copy(`resources/lang`, `public/lang`, false)
    .copy(`resources/fonts`, `public/fonts`, false)
    .sourceMaps();
