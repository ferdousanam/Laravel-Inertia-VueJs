const mix = require('laravel-mix');
const path = require('path');

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
    .vue()
    .sass('resources/scss/app.scss', 'public/css')
    .scripts([
        'node_modules/popper.js/dist/umd/popper.js',
        'node_modules/jquery/dist/jquery.js',
        'resources/js/libs/jquery.dcjqaccordion.2.7.js',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        'node_modules/jquery.scrollto/jquery.scrollTo.js',
        'node_modules/jquery.nicescroll/dist/jquery.nicescroll.js',
        'node_modules/jquery-sparkline/jquery.sparkline.js',
        'node_modules/respond.js/dest/respond.min.js',
        'resources/js/libs/slidebars.min.js',
        'resources/js/common-scripts.js',
    ], 'public/js/vendors.js')
    .webpackConfig({
        output: {chunkFilename: 'js/[name].js?id=[chunkhash]'},
        resolve: {
            alias: {
                '@': path.resolve('resources/js')
            }
        }
    })
    .options({
        processUrls: false,
        processCssUrls: false
    })
    .version()
    .sourceMaps();
