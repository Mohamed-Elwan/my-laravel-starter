const {mix} = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .minify('resources/assets/adminlte/js/adminlte.js')
    .minify('resources/assets/adminlte/css/AdminLTE.css')
    .minify('resources/assets/adminlte/css/skins/skin-blue.css')
    .copy('resources/assets/adminlte/js/adminlte.min.js', 'public/adminlte/adminlte.min.js')
    .copy('resources/assets/adminlte/css/AdminLTE.min.css', 'public/adminlte/AdminLTE.min.css')
    .copy('resources/assets/adminlte/css/skins/skin-blue.min.css', 'public/adminlte/skin-blue.min.css');

// mix.copyDirectory('resources/assets/adminlte/img', 'public/adminlte/img');