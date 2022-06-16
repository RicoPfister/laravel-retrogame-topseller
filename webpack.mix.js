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
mix.js('resources/js/misc.js', 'public/js')
mix.js('resources/js/rating.js', 'public/js')
mix.js('resources/js/sortresult.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/misc.scss', 'public/css')
    .sass('resources/sass/header.scss', 'public/css')
    .sass('resources/sass/rating_search.scss', 'public/css')
    .sourceMaps();
