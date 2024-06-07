/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.php",
    "./cargaison.php",
    "./produit.php",
    "./src/**/*.{js,ts,html,php}",
  ],
  theme: {
    extend: {
      fontFamily: {
       'Roboto': ['Roboto','sans-serif'],
      }
    },
  },
  plugins: [],
}

