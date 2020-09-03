const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
  await imagemin(['source/assets/images/layout/*.{jpg,png}'], {
    destination: 'source/assets/images/layout/',
    plugins: [
      imageminWebp({quality: 65})
    ]
  });

  console.log('Images optimized');
})();