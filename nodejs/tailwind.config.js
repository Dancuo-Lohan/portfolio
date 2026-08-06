/** @type {import('tailwindcss').Config} */
export default {
  content: ["../public/public_views/**/*.php", "../public/**/*.php","../public/*.php","./src/**/*.ts","../src/**/*.php"],
  darkMode: 'selector',
  theme: {
    extend: {
      letterSpacing: {
        '1': '1px',
        '2': '2px',
        '4': '4px',
      },
      fontFamily: {
        'depixel': ['"DePixel"', 'sans-serif'],
        'poppins': ['"Poppins"', 'sans-serif'],
        'concert-one': ['"ConcertOne"', 'sans-serif'],
      },
      colors: {
        'black': '#111827',
        'true-black': '#000000',
        'mint': '#F6FAF7',
        'accent-green': '#8FE3B4',
        'white': '#F6FAF7',
        'true-white': '#FFFFFF',
        'dark-green': '#0F6B4F'
      },
      boxShadow: {
        'white': 'inset 0px 0px 30px 35px #F6FAF7',
        'black': 'inset 0px 0px 30px 35px #111827',
        'outer-white': '0px 0px 30px 35px #F6FAF7',
        'outer-black': '0px 0px 30px 35px #111827',
      },
      dropShadow: {
        'day': '0 0 5px #101d28',
        'night': '0 0 5px #171a28',
        'rise': '0 0 5px #20191e',
        'white': '0 0 3px #F6FAF7',
        'black': '0 0 3px #111827',
        'outline': [
          '-1px -1px 0 rgba(0,0,0, 0.5)',
          '1px -1px 0 rgba(0,0,0, 0.5)',
          '-1px 1px 0 rgba(0,0,0, 0.5)',
          '1px 1px 0 rgba(0,0,0, 0.5)'
        ],
        'outline-day-secondary': [
          '-1px -1px 0 rgba(104, 157, 176, 0.3)',
          '1px -1px 0 rgba(104, 157, 176, 0.3)',
          '-1px 1px 0 rgba(104, 157, 176, 0.3)',
          '1px 1px 0 rgba(104, 157, 176, 0.3)'
        ],
        'outline-night-secondary': [
          '-1px -1px 0 rgba(120, 135, 149, 0.3)',
          '1px -1px 0 rgba(120, 135, 149, 0.3)',
          '-1px 1px 0 rgba(120, 135, 149, 0.3)',
          '1px 1px 0 rgba(120, 135, 149, 0.3)'
        ],
        'outline-rise-secondary': [
          '-1px -1px 0 rgba(176, 151, 160, 0.3)',
          '1px -1px 0 rgba(176, 151, 160, 0.3)',
          '-1px 1px 0 rgba(176, 151, 160, 0.3)',
          '1px 1px 0 rgba(176, 151, 160, 0.3)'
        ]
      },
      animation: {
        'slow-bounce': 'slow-bounce 3s infinite ease',
      },
      keyframes: {
        'slow-bounce': {
          '0%, 100%': { transform: 'translateY(0%)' },
          '50%': { transform: 'translateY(20%)' },
        }
      }
    },
  },
  plugins: [],
}
