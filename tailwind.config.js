/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/**/*.{html,js}", "./node_modules/flowbite/**/*.js", "./*.js"],
  theme: {
    extend: {
      fontFamily: {
        lora: "'Lora', serif",
        roboto: "'Roboto', sans-serif",
      },
    },
  },
  plugins: [require("flowbite/plugin")],
};
