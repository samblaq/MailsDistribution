let mix = require('laravel-mix');

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
   .sass('resources/assets/sass/app.scss', 'public/css');

   mix.styles([

    'resources/assets/css/AdminLTE.css',

], 'public/css/libs.css');

mix.scripts([

    'resources/assets/js/applet.js',
    'resources/assets/js/dashboard.js',
    'resources/assets/js/demo.js',
    'resources/assets/js/jquery-3.3.1.min.js'
] , 'public/js/libs.js');


mix.styles([
    
    'resources/assets/css/style.css'

], 'public/css/min.css')