/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{js,ts,jsx,tsx}'],
  theme: {
    extend: {
      colors: {
        primary: {
          50: '#fff1f1',
          100: '#ffe4e4',
          200: '#fecaca',
          300: '#fca5a5',
          400: '#ff7070',
          500: '#ff5a5a',
          600: '#ea4335',
          700: '#c53030',
          800: '#9b2c2c',
          900: '#7b2222',
        },
      },
      animation: {
        'fade-up': 'fadeUp 0.5s ease-out',
      },
      keyframes: {
        fadeUp: {
          '0%': { opacity: '0', transform: 'translateY(10px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
      },
    },
  },
  plugins: [],
};