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
}
function closeSideMenu() {
  sidebar.classList.add("hidden");
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

function showsign() {
  sessionStorage.setItem("display", "appear");
  dform.classList.remove("hidden");
}
function hidesign() {
  sessionStorage.setItem("display", "disappear");
  dform.classList.add("hidden");
}

dhtform.addEventListener("click", () => {
  hidesign();
});
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
