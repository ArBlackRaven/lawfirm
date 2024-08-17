//open and close the sidebar menu
const sidebarTrigger = document.querySelector(".sidebarTrigger");
const sidebar = document.querySelector(".resposiveNavMenu");
const sidebarbuttons = document.querySelectorAll(".resposiveNavMenu ul li a");
const sidebarExitor = document.querySelector(".Exitor");

sidebarTrigger.addEventListener("click", () => {
  openSideMenu();
});
sidebarExitor.addEventListener("click", () => {
  closeSideMenu();
});
function openSideMenu() {
  sidebar.classList.remove("hidden");
  !sidebar.classList.contains("hide-to-right")
    ? null
    : sidebar.classList.remove("hide-to-right");

  sidebar.classList.contains("show-from-right")
    ? null
    : sidebar.classList.add("show-from-right");
}

function closeSideMenu() {
  !sidebar.classList.contains("show-from-right")
    ? null
    : sidebar.classList.remove("show-from-right");

  sidebar.classList.contains("hide-to-right")
    ? null
    : sidebar.classList.add("hide-to-right");

  setTimeout(() => {
    sidebar.classList.add("hidden");
  }, 250);
}
sidebarbuttons.forEach((element) => {
  element.addEventListener("click", () => {
    closeSideMenu();
    console.log(element);
  });
});
//
//
//
//
//
//
// this for the form functions
const elements = document.querySelectorAll(
  ".frm_form_field input , .frm_form_field textarea"
);
elements.forEach((input) => {
  input.addEventListener("focusin", () => {
    input
      .closest(".frm_form_field")
      .querySelector("label")
      .classList.add("active");
  });
  input.addEventListener("focusout", () => {
    if (input.value === "") {
      input
        .closest(".frm_form_field")
        .querySelector("label")
        .classList.remove("active");
    }
  });
});
//
//
//
//
//
//
//
// this for the desapeared form to sign
const dform = document.querySelector(".the-disappeard-sign");
const dhtform = document.querySelector(".the-disappeard-sign .hide-trigger");

if (sessionStorage.getItem("display") == null) {
  sessionStorage.setItem("display", "disappear");
} else {
  if (sessionStorage.getItem("display") === "appear") {
    dform.classList.remove("hidden");
  }
}

// this to show the form
function showsign() {
  sessionStorage.setItem("display", "appear");
  dform.classList.remove("hidden");

  dform.classList.contains("hide-down")
    ? dform.classList.remove("hide-down")
    : null; //check not to stack the class

  !dform.classList.contains("show-up") ? dform.classList.add("show-up") : null; //check not to stack the class
}

//this to hide the form
function hidesign() {
  sessionStorage.setItem("display", "disappear");

  dform.classList.contains("show-up")
    ? dform.classList.remove("show-up")
    : null; //check not to stack the class

  !dform.classList.contains("hide-down")
    ? dform.classList.add("hide-down")
    : null; //check not to stack the class

  setTimeout(() => {
    dform.classList.add("hidden");
  }, 300); //this time to wait for the animation to finish
}

dhtform.addEventListener("click", () => {
  hidesign();
}); // if the user click on anything but the form the form will hide

//
//
//
//
//
//
//
// this to back to the top of the page
const scrollToTop = document.querySelector("html");
const scrollTrigger = document.querySelector("button.back-to-the-top");

const scrollHeight = document.documentElement.scrollHeight;
const clientHeight = document.documentElement.clientHeight;
const scrollSpace = scrollHeight - clientHeight;

const clientWidth = document.documentElement.clientWidth;

window.onscroll = () => {
  if (scrollY > 300) {
    if (!scrollTrigger.classList.contains("ready-to-go-up")) {
      scrollTrigger.classList.add("ready-to-go-up");
    }
  } else {
    if (scrollTrigger.classList.contains("ready-to-go-up")) {
      scrollTrigger.classList.remove("ready-to-go-up");
    }
  }

  if (clientHeight > clientWidth) {
    if (scrollY >= scrollSpace - 200) {
      if (!scrollTrigger.classList.contains("pagebottom")) {
        scrollTrigger.classList.add("pagebottom");
      }
    } else {
      if (scrollTrigger.classList.contains("pagebottom")) {
        scrollTrigger.classList.remove("pagebottom");
      }
    }
  }
};

function backToPageTop() {
  scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
}

//
//
//
//
//
//
//
// this to back to the top of the page

const imagesContainer = document.getElementById("images-conatiner");
const overlay = document.getElementById("fullscreenOverlay");
const fullscreenImage = document.getElementById("fullscreenImage");

imagesContainer
  .querySelectorAll("img")
  .forEach((img) => img.classList.add("image-item"));

const images = document.querySelectorAll(".image-item");
images.forEach((image) => {
  image.addEventListener("click", () => {
    fullscreenImage.src = image.src;
    overlay.style.display = "flex";
  });
});

overlay.addEventListener("click", (e) => {
  if (e.target !== fullscreenImage) {
    overlay.style.display = "none";
  }
});
