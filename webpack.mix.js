let mix = require('laravel-mix');
mix
    .js('resources/js/app.js', 'public/js/')
    .sass('resources/sass/app.scss', 'public/css')
    .version()
    .browserSync({
        host: 'baap.test',
        port: 7777,
        proxy: 'http://baap.test',
        ui: false,
        open: false,
        notify: false
    });
