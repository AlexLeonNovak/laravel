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
   .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    // 'resources/frontend/css/bootstrap.min.css',
    'resources/frontend/css/style.css',
    'resources/frontend/css/ionicons.min.css',
    'resources/frontend/css/font-awesome.min.css',
    // 'resources/frontend/css/bootstrap-theme.css',
    // 'resources/frontend/css/demo.css',
    'resources/frontend/css/emoji.css',
    'resources/frontend/css/jquery.mCustomScrollbar.css',
    'resources/frontend/css/jquery.scrollbar.css',
], 'public/css/frontend.css');

mix.scripts([
    'resources/frontend/js/jquery-3.1.1.min.js',
    // 'resources/frontend/js/bootstrap.min.js',
    'resources/frontend/js/script.js',
    'resources/frontend/js/jquery.appear.min.js',
    'resources/frontend/js/jquery.incremental-counter.js',
    'resources/frontend/js/jquery.scrollbar.min.js',
    'resources/frontend/js/jquery.sticky-kit.min.js',
    'resources/frontend/js/masonry.pkgd.min.js',
    'resources/frontend/js/npm.js'
], 'public/js/frontend.js');

mix.copy('resources/frontend/css/emoji', 'public/css/emoji');
mix.copy('resources/frontend/fonts', 'public/fonts');
mix.copy('resources/frontend/images', 'public/images');
