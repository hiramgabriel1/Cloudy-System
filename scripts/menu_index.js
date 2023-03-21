const burguerMenu = document.querySelector(".menu")
const bar = document.querySelector(".left-side")

burguerMenu.addEventListener("click", ()=>{
    burguerMenu.classList.toggle("active")
    bar.classList.toggle("active")    
})