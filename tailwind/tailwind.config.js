/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [".././*.php", ".././**/*.php"],
  theme: {
    extend: {
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
      },
      height: {
        "120vh": "120vh",
      },
      padding: {
        "site-padding": " 0 5%",
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
      },
    },
  },
  plugins: [],
};
