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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/headers.scss', 'public/css')
    .sass('resources/sass/footers.scss', 'public/css')
    .sass('resources/sass/memberships.scss', 'public/css')
    .sass('resources/sass/contact_us.scss', 'public/css');
