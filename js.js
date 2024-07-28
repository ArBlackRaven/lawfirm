//open and close the sidebar menu
const sidebarTrigger = document.querySelector(".sidebarTrigger");
const sidebar = document.querySelector(".resposiveNavMenu");
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
//
//
//
//
//
//
//this for the form functions
const elements = document.querySelectorAll(
  "form.wpcf7-form p span.wpcf7-form-control-wrap input,form.wpcf7-form p span.wpcf7-form-control-wrap textarea"
);
elements.forEach((input) => {
  input.addEventListener("focusin", () => {
    input.closest("form.wpcf7-form p").classList.add("active");
  });
  input.addEventListener("focusout", () => {
    if (input.value === "") {
      input.closest("form.wpcf7-form p").classList.remove("active");
    }
  });
});

console.log(elements);
