// node elements
const themeDark = document.querySelector(".theme-dark");
const themeSun = document.querySelector(".theme-sun");
const sidebardMobile = document.querySelector(".aside-mobile");
const showMobileSidebar = document.querySelector("showSidebarmobile");

showMobileSidebar.addEventListener("click", () => {
    sidebardMobile.classList.toggle("active");
})

// theme dark
themeDark.addEventListener("click", () => {
    themeDark.style="display:none;"
    themeSun.style="display:block;"
    localStorage.setItem("theme", "dark")
    if(localStorage.getItem("theme") == "dark"){
        console.log("ready!")
    }
})

// theme sun
themeSun.addEventListener("click", () => {
    themeDark.style="display:block;"
    themeSun.style="display:none;"
   if(localStorage.setItem("theme", "sun")){
        console.log("sun theme ready!")
    }
})