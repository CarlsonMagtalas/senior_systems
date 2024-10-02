const autoprefixer = require('autoprefixer');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    colors: {
      "primary": '#2F27CE',
      "background": '#FBFBFE',
      "accent": '#433BFF',
      "text": '#050315',
      "secondary": '#DEDCFF'
    },
    extend: {},
  },
  plugins: [],
}

