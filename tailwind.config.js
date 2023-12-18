/** @type {import('tailwindcss').Config} */
export default {
  content: [  
          "./resources/**/*.blade.php",
          "./resources/**/*.js",
          "./resources/**/**.vue",
        ],
        theme: {
          extend: {
              colors: {
                  laravel: "#ef3b2d",
                  abductedblack: "#212529",
                  abductedpink: "#C63D65",
                  abducteddarkpink: "#803047",
                  abducteddarkerpink: "#45232D",
              },
              screens: {
                  'xsm': '375px',
              },
              fontFamily: {
                  sans: ['AileronLight']
              },
              backgroundImage: {
                  'spacebg': "url('/public/local_images/space_bg.jpg')",
              }
          },    
      },
  plugins: [],
}

