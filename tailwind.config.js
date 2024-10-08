/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      'index.php', 'kota.php',
      './src/**/*.{html,js,php}',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

