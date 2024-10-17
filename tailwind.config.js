/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      '/index.php', 
      '/kota.php',
      '/kecamatan.php',
      '/kelurahan.php',
      '/dashboard.php',
      '/simulasi-umr.php',
      '/about.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

