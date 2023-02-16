/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
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
