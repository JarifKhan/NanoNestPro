/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*.{html,js}"],
  theme: {

    extend: {
      textColor: {
        skin: {
          base: 'var(--color-text-base)',
          hrnicn: 'var(--color-hrticn-base)',
        }
      },
      fontFamily: {
        body: ['DINNextCYR-Regular'],
        body1: ['Helvetica']
      },

      container: {
        width: "80%"
      },

      colors: {
        'btnc': '#ffc107',
        'btnchov': '#e0a800'
      }
    },
  },
  plugins: [],
}

