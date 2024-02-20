/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
				'sans': ['Nunito', ...defaultTheme.fontFamily.sans],
			},
    },
  },
  plugins: [
    require("daisyui"),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/container-queries'),
  ],

  daisyui: {
    themes: ["light", "dark", "cupcake"],
  },
}

