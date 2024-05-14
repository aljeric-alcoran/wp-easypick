/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  mode: 'jit',
  theme: {
    extend: {
      colors: {
        'primary': '#F37C21',
        'secondary': '#7e5bef',
        'footer-vl' : '#5b5c5c'
      },
      fontFamily: {
        default: ['SoinSansNeue']
      }
    },
  },
  plugins: [],
}

