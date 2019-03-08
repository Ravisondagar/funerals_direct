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

 mix.styles([
 'public/project/css/bootstrap.css',
 'public/project/css/bootstrap-select.css',
 'public/project/css/font-awesome.css',
 'public/project/css/jquery.fancybox.css',
 'public/project/css/flatpickr.css',
 'public/project/css/style.css',
 'public/project/css/media.css',
 ], 'public/css/main.css');

 mix.scripts([
 'public/project/js/jquery-3.1.1.js',
 'public/project/js/jquery-ui.js',
 'public/project/js/jquery.ui.touch-punch.js',
 'public/project/js/bootstrap.js',
 'public/project/js/bootstrap-select.js',
 'public/project/js/jquery.fancybox.js',
 'public/project/js/flatpickr.js',
 'public/project/js/jquery.raty.js',
 'public/project/js/setting.js',
 ], 'public/js/main.js');
