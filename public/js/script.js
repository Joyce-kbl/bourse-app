const navbar = document.getElementById('navbar')
const nav_links = document.querySelectorAll(".nav-link");
const burger = document.querySelector(".burger");
const scrollUpButton = document.getElementById("scrollUp")
const navbar_content = document.querySelector(".navbar")

window.addEventListener('scroll', () => {
  if (window.scrollY > window.innerHeight * 0.1) {
    navbar.classList.add('scrolled')
  } else {
    navbar.classList.remove('scrolled')
  }

  if(window.scrollY > window.innerHeight *.5){
    scrollUpButton.classList.add("show")
  } else {
    scrollUpButton.classList.remove("show")
  }
})

scrollUpButton.addEventListener('click', () => {
  navbar.classList.add('hidden')
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
})

/* Menu */

nav_links.forEach((nav_link) => {
  nav_link.addEventListener("click", (e) => {
    nav_links.forEach((link) => link.classList.remove("active"));
    e.target.classList.add("active");
  });
});

/* burger */
burger.addEventListener("click", () => {
  if (burger.classList.contains("fa-bars")) {
    burger.classList.replace("fa-bars", "fa-times");
    navbar_content.classList.toggle("open")
  } else {
    burger.classList.replace("fa-times", "fa-bars");
    navbar_content.classList.toggle("open")
  }
});

