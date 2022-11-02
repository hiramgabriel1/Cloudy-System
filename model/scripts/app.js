const sidebardMobile = document.querySelector(".aside-mobile");
const showMobileSidebar = document.querySelector("showSidebarmobile");

showMobileSidebar.addEventListener("click", () => {
    sidebardMobile.classList.toggle("active");
})