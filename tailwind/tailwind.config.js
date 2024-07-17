/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [".././*.php", ".././**/*.php"],
  theme: {
    extend: {
      padding: {
        "site-padding": " 0 5%",
      },
      fontFamily: {
        ibm: "IBM-Plex-Sans",
      },
    },
    colors: {
      "main-black": "#212529",
      "secondary-black": "#2b2b2b",
      "main-gold": "#be8d25",
      "secondary-gold": "#977a3e",
      "main-white": "#e6e3db",
    },
  },
  plugins: [],
};
