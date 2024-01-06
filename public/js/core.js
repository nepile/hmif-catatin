
//sidebar expand
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});





//navbar fixed
const navbar =  document.querySelector(".navbar");
function handleResponsiveNavbar() {
  if (window.innerWidth <= 767) {
    navbar.classList.remove("d-none");
    document.querySelector("#sidebar").classList.add("d-none")
  } else {
    navbar.classList.add("d-none");
    document.querySelector("#sidebar").classList.remove("d-none")
  }
}

handleResponsiveNavbar();


window.addEventListener("resize", handleResponsiveNavbar);