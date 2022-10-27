const colors = require("tailwindcss/colors");

module.exports = {
  content: [
    "./resources/views/**/*.php",
    "./resources/html/**/*.html",
    "./resources/**/.*js",
  ],
  safelist: [
    "lg:w-96",
    "max-w-5xl",
    "ring-indigo-500",
    "gird-rows-2",
    {
      pattern: /p(|x|y)-(0|3|5|10)/,
    },
  ],
  theme: {
    colors: {
      ...colors,
    },
    screens: {
      sm: { max: "639px" },
      md: { max: "767px" },
      lg: { max: "1023px" },
      xl: { max: "1279px" },
    },
    fontFamily: {
      sans: ["Sans-serif"],
    },
    extend: {
      spacing: {
        72: "18rem",
        84: "21rem",
        96: "24rem",
      },
    },
    container: {
      center: true,
      screens: {
        sm: "100%",
        md: "100%",
        lg: "1280px",
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("tailwindcss-animatecss")({
      settings: {
        animatedSpeed: 1000,
        heartBeatSpeed: 1000,
        hingeSpeed: 2000,
        bounceInSpeed: 750,
        bounceOutSpeed: 750,
        animationDelaySpeed: 1000,
      },
      variants: ["responsive"],
    }),
  ],
};
