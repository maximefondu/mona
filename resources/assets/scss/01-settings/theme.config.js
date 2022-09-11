module.exports = {
    screens: require("./1.breakpoints.json"),
    colors: require("./2.colors.json"),
    fontFamily: require("./3.fonts.json")["font-family"],
    fontSize: require("./3.fonts.json")["font-size"],

    extend: {
        borderRadius: {
            DEFAULT: "4px",
            xs: "8px",
            sm: "10px",
            md: "15px",
            xl: "20px"
        },
        transitionDuration: {
            DEFAULT: "400ms"
        },
        keyframes: require("./3.fonts.json")["keyframes"],
        animation: require("./3.fonts.json")["animation"]
    }
}
