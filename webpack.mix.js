const mix = require('laravel-mix');
const { resolve } = require('path');

mix
    .js('resources/scripts/main.js', 'build/bundle.js')
    .sass('resources/styles/main.scss', 'build/bundle.css', {}, [
        require('postcss-axis')
    ])
    .browserSync({
        proxy: 'localhost',
        files: [
            'public/**/*',
            'resources/**/*.twig',
            'resources/**/*.php'
        ]
    });

mix.alias({'uikit-util': resolve(__dirname, 'node_modules/uikit/src/js/util')});