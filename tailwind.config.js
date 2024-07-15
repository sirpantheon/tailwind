/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    screens: {
      'tablet': '640px',

      'laptop': '1024px',

      'desktop': '1280px',
      
    },
    extend: {
      fontFamily:{
        'druk-trial':['Druk Trial', 'sans-serif'],
        'druk-text-trial':['Druk Text Trial', 'sans-serif'],
        'druk-wide-trial':['Druk Wide Trial', 'sans-serif'],
        'druk-xcond':['Druk XCond Trial', 'sans-serif'],
        'druk-bold':['Druk Wide Bold', 'sans-serif'],
      },
      colors: {
        primary: "#231f20",
        secondary:"#b2292e"
      }
    },
  },
  plugins: [],
}