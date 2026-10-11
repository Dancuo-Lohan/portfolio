const paper = '#FAF9F4';
const ink = '#292820';

/** @type {import('tailwindcss').Config} */
export default {
  content: ["../src/Views/**/*.php", "../public/**/*.php","../public/*.php","../src/Views/**/*.ts","../src/Scripts/**/*.ts","../src/**/*.php"],
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
        'paper': paper,
        'ink': ink,
        'black': ink,
        'true-black': '#1F1E19',
        'white': paper,
        'true-white': '#FFFEFA',
        // Keep existing view utilities compatible with the monochrome palette.
        'mint': paper,
        'accent-green': paper,
        'dark-green': ink
      },
      boxShadow: {
        'white': `inset 0px 0px 30px 35px ${paper}`,
        'black': `inset 0px 0px 30px 35px ${ink}`,
        'outer-white': `0px 0px 30px 35px ${paper}`,
        'outer-black': `0px 0px 30px 35px ${ink}`,
      },
      dropShadow: {
        'day': `0 0 5px ${ink}`,
        'night': `0 0 5px ${ink}`,
        'rise': `0 0 5px ${ink}`,
        'white': `0 0 3px ${paper}`,
        'black': `0 0 3px ${ink}`,
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
