const toggleMenu = document.getElementById("toggle-menu");
const menuMobile = document.getElementById("menu-mobile");
const bodyElement = document.getElementsByTagName("body")[0];

toggleMenu.addEventListener("click", function () {
  menuMobile.classList.toggle("slide");
  bodyElement.classList.toggle("scroll-lock");
});
