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
