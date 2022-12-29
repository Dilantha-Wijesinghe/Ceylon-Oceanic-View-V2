/** @type {import('tailwindcss').Config} */
module.exports = {
  
  content: [
    "./build/**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js",
    "./*.js",
    "./build/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        lora: "'Lora', serif",
        roboto: "'Roboto', sans-serif",
      },
    },
  },
  plugins: [require("flowbite/plugin"), require("tailwind-scrollbar")],
};
