/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
      colors:{
        bluetange:'#00063D'
      },
      fontSize:{
        sitange:['20px','30px'],
        sitangeh:['52px','52px']

      },
      fontFamily:{
        sanx:['Merriweather\\ Sans','sans-serif']
      },
      backgroundImage:{
            'pattern-1':"url('../public/images/background_pattern1.png')", 
          },
        extend: {
          backgroundImage:{
            'pattern-1':"url('../public/images/background_pattern1.png')", 
          }
        },
    },
    plugins: [
      require('flowbite/plugin')
    ],
};
