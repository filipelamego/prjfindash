const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js') // Compila o JavaScript
   .vue() // Habilita o suporte para Vue.js
   .css('resources/css/app.css', 'public/css')
   .setPublicPath('public')
   .version(); // Adiciona versionamento de arquivos para cache busting

// Você pode adicionar mais compilações aqui, se necessário
