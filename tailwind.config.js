/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'black-1': '#000000',
        'black-3': '#232323',
        'black-2': '#111111',
        'black-4': '#151515'
      },
      fontFamily: {
        ptserif: ['PT Serif'], 
        kanit: ['Kanit'],
      },
    },
  },
  plugins: [],
}
