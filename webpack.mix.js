const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('resources/img', 'public/img') // Copia as imagens de resources/img para public/img
   .sourceMaps();
