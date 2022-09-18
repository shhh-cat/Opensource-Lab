/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'thumnails-png': "url('../thumnails.png')",
        'right-ads-1' : "url('../right-ads-1.png')",
        'right-ads-2' : "url('../right-ads-2.png')",
        'right-ads-3' : "url('../right-ads-3.png')",
        'thatthu' : "url('../thatthu.png')",
      },
      height: {
        '600px' : '600px',
      }
    },
  },
  plugins: [
    require('tailwind-scrollbar')({ nocompatible: true }),
  ],  
  variants: {
    scrollbar: ['rounded']
  }
}
