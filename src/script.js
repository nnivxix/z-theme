console.log("hello wp");
const toggleMenu = document.getElementById("toggle-menu");
const menuMobile = document.getElementById("menu-mobile");

toggleMenu.addEventListener("click", function () {
  console.log("toggle fired");

  menuMobile.classList.toggle("hidden");
});
