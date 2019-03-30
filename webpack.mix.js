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



 /*
|--------------------------------------------------------------------------
| JavaScripts
|--------------------------------------------------------------------------
| MainApp.js
| Bootstrap.js -->  Required in Main App
| JQuery.js
| Modernizer.js
| Popper.js -->  Required in Main App
| Plugins.js -->  Required in Main App
| 
*/
mix.js('resources/js/mainapp.js', 'public/js');
mix.js('resources/js/vendor/jquery.min.js', 'public/js');
mix.js('resources/js/vendor/modernizr.min.js', 'public/js');





   
/*
|--------------------------------------------------------------------------
| Stylesheets
|--------------------------------------------------------------------------
| Base.scss
| Bootstrap.scss
| FontAwesome.scss
| Plugins.scss
*/

mix.sass('resources/sass/base.scss', 'public/css');
mix.sass('resources/sass/bootstrap.min.scss', 'public/css');
mix.sass('resources/sass/fontawesome.min.scss', 'public/css');
mix.sass('resources/sass/plugins.scss', 'public/css');