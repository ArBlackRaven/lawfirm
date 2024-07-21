/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,js,css,html}"],
  theme: {
    extend: {
      screens: {
        phone: "300px",
      },
      spacing: {
        "50%": "50%",
      },
      translate: {
        "50%": "50%",
        "100%": "100%",
      },
      backgroundImage: {
        "law-library":
          "url(http://localhost:8080/lawfirm/wp-content/uploads/2024/07/a-large-collection-of-old-hardcover-books-in-a-bookstore-generated-by-ai-free-photo.jpg)",
      },
      width: {
        "70%": "70%",
        "30%": "30%",
        "90%": "90%",
        "80%": "80%",
        "20vw": "20vw",
        "75px": "75px",
      },
      height: {
        "120vh": "120vh",
        "80vh": "80vh",
        "70vh": "70vh",
        "50vh": "50vh",
      },
      padding: {
        "site-padding": " 0 5%",
        "5%": "5%",
        "1rem": "1rem",
        "5rem": "5rem",
      },
      fontFamily: {
        ibm: "IBM-Plex-Sans",
      },
      colors: {
        "main-black": "#171717",
        "secondary-black": "#232323",
        "main-gold": "#be8d25",
        "secondary-gold": "#977a3e",
        "main-white": "#e6e3db",
        "spicial-1": "#1e1e1e",
        "spicial-2": "#262626",
        "spicial-3": "#303030",
      },
    },
  },
  plugins: ["prettier-plugin-tailwindcss", "@prettier/plugin-php"],
};
