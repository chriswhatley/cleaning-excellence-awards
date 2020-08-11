let mix = require('laravel-mix');
let tailwind = require('tailwindcss');
let build = require('./tasks/build.js');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/');
mix.webpackConfig({
  plugins: [
    build.jigsaw,
    build.browserSync(),
    build.watch(['source/**/*.md', 'source/**/*.php', 'source/_assets/**/*', '!source/**/_tmp/*', '!source/assets/**/*']),
  ]
});

mix.options({
    processCssUrls: false,
    postCss: [
      require('postcss-import'),
      tailwind(),
    ]
  })
  .postCss('source/_assets/css/main.css', 'css/main.css')
  .js(['source/_assets/js/main.js', 'source/_assets/js/modernizr-webp.js'], 'js/main.js')
  .purgeCss({
    folders: ['source'],
  })
  .version();
