const mix = require('laravel-mix');


mix.js('src/scripts/app.js', 'app.js')
    .sass('src/scss/app.scss', 'style.css');
