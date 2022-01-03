const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .css('resources/css/layout.css', 'public/css')
    .css('resources/css/index.css', 'public/css')
    .css('resources/css/blog.css', 'public/css')
    .css('resources/css/goal.css', 'public/css')
    .css('resources/css/login.css', 'public/css')
    .css('resources/css/task.css', 'public/css');
