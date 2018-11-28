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
    .js('vendor/support/laravel-admin/resources/assets/js/common.js', 'public/js')
    .js('vendor/support/laravel-admin/resources/assets/js/admin.js', 'public/js')
    .js('resources/assets/js/admin_custom.js', 'public/js')
    .extract(['lodash', 'jquery', 'bootstrap'])
    .sass('vendor/support/laravel-admin/resources/assets/sass/common.scss', 'public/css')
    .sass('vendor/support/laravel-admin/resources/assets/sass/admin.scss', 'public/css')
    .sass('resources/assets/sass/admin_custom.scss', 'public/css')
    .sass('resources/assets/sass/bootstrap/bootstrap.scss', 'public/css/libs/bootstrap.css')
    .sass('resources/assets/sass/custom-styles/style.scss', 'public/css/front.css');

