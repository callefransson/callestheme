$(document).ready(function(){

})

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".top-bar");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".top-bar").forEach(n => n. addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");

}))

