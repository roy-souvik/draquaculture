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

mix.styles([
    'public/themes/frontend/css/bootstrap.css',
	'public/themes/frontend/vendors/linericon/style.css',
    'public/themes/frontend/css/font-awesome.min.css',
    'public/themes/frontend/vendors/owl-carousel/owl.carousel.min.css',
    'public/themes/frontend/vendors/lightbox/simpleLightbox.css',
    'public/themes/frontend/vendors/animate-css/animate.css',
    'public/themes/frontend/vendors/jquery-ui/jquery-ui.css',
    'public/themes/frontend/css/style.css',
    'public/themes/frontend/css/responsive.css'
], 'public/css/all.css');

mix.scripts([
	'public/themes/frontend/js/jquery-3.2.1.min.js',
	'public/themes/frontend/js/popper.js',
    'public/themes/frontend/js/bootstrap.min.js',
    'public/themes/frontend/js/stellar.js',
    'public/themes/frontend/vendors/lightbox/simpleLightbox.min.js',
    'public/themes/frontend/vendors/owl-carousel/owl.carousel.min.js',
    'public/themes/frontend/vendors/counter-up/jquery.counterup.js',
    'public/themes/frontend/js/theme.js'
], 'public/js/vendor.js');

mix.copy([
    'public/themes/frontend/fonts'
], 'public/fonts');

mix.copy([
    'public/themes/frontend/vendors/linericon/fonts'
], 'public/css/fonts');

mix.copy('public/themes/frontend/img', 'public/img');
