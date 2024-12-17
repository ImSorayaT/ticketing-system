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
          'unit-pink': '#f18d8e',
          'unit-blue': '#31989d',
          'unit-cream': '#f7f3ed',
          'unit-coral': '#ee7255',
          'soft-black': '#16191a',
          'unit-soft-black': '#16191a',
          'sidebar': 'rgba(43, 46, 47, 0.4)',
          'status-pending' : '#31989d',
      },
    },
  },
  plugins: [],
}
