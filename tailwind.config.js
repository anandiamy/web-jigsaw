module.exports = {
  theme: {
    extend: {
      fontFamily: {
        sans: [
          'Work Sans'
        ],
        heading: [
          'PT Sans'
        ]
      },
    },
    fontSize: {
      'xs': '.9rem',
      'sm': '1rem',
      'base': '1.25rem',
      'lg': '1.35rem',
      'xl': '1.45rem',
      '2xl': '1.5rem',
      '3xl': '1.75rem',
      '4xl': '2.125rem',
      '5xl': '2.625rem',
      '6xl': '4rem',
    },
  },
  variants: {
    borderRadius: ['responsive', 'focus'],
    borderWidth: ['responsive', 'active', 'focus'],
    width: ['responsive', 'focus']
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },
        '.transition': {
          transition: 'all .5s ease-out',
        },
      }
      addUtilities(newUtilities)
    }
  ]
}
