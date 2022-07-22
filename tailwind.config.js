/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/views/**/*.php"],
  theme: {
      screens: require("./resources/assets/scss/01-settings/1.breakpoints.json"),
      colors: require("./resources/assets/scss/01-settings/2.colors.json"),
      fontFamily: require("./resources/assets/scss/01-settings/3.fonts.json")["font-family"],
      fontSize: require("./resources/assets/scss/01-settings/3.fonts.json")["font-size"],
      extend: {
          keyframes: require("./resources/assets/scss/01-settings/6.animations.json")["keyframes"],
          animation: require("./resources/assets/scss/01-settings/6.animations.json")["animations"],
          transitionTimingFunction:require("./resources/assets/scss/01-settings/6.animations.json")["transitions"]
      }
  },
  plugins: [],
}
