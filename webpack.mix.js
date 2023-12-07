/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const mix = require('laravel-mix');

mix
    .setPublicPath('public')
    .setResourceRoot('/public/')
    .js('resources/js/*.js', 'public/js/app.js')
    .styles('resources/css/*.css', 'public/css/styles.css')
    .version();
