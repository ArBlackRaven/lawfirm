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
