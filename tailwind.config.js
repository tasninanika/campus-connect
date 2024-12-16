/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}"],
    darkMode: 'class',
    themes: ["light"],
    plugins: [require("daisyui")],
  }