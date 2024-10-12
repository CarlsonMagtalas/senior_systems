const autoprefixer = require('autoprefixer');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    colors: {
      "primary": '#01AD01',
      "background": '#F5FBF2',
      "accent": '#39C62A',
      "text": '#1D1A06',
      "secondary": '#333333'
    },
    extend: {},
  },
  plugins: [],
}

