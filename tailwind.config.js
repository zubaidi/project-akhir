/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      '/index.php', 
      '/kota.php', 
      '/kecamatan.php', 
      '/kelurahan.php', 
      '/simulasi-umr.php', 
      '/dashboard.php', 
      '/about.php',
      './**/*.{html,js,php}',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

