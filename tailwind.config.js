/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.html", "./node_modules/flowbite/**/*.js"],
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
