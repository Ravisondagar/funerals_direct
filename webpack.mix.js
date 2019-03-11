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
 'public/bower_components/bootstrap/dist/css/bootstrap.min.css',
 'public/bower_components/font-awesome/css/font-awesome.min.css',
 'public/bower_components/Ionicons/css/ionicons.min.css',
 'public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
 'public/dist/css/AdminLTE.min.css',
 'public/dist/css/skins/_all-skins.min.css',
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
 'public/bower_components/datatables.net/js/jquery.dataTables.min.js',
 'public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
 'public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
 'public/bower_components/fastclick/lib/fastclick.js',
 'public/dist/js/adminlte.min.js',
 'public/dist/js/demo.js',
 ], 'public/js/main.js');
