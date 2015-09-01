var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'jquery': 'vendor/bower_components/jquery/',
    'bootstrap': 'vendor/bower_components/bootstrap-sass-official/assets/',
    'fontawesome': 'vendor/bower_components/fontawesome/'
}

elixir(function(mix) {
    mix.sass('app.scss', 'public/css/')
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .copy(paths.fontawesome + 'fonts/**', 'public/fonts')
        .scripts([
			paths.jquery + "dist/jquery.js",
			paths.bootstrap + "javascripts/bootstrap.js"
		], "public/js/app.js", './');
});

