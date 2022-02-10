let menuBtn = document.querySelector("#menu-btn");
let menuBox = document.getElementById("menu-box");
let dropMenu = document.querySelectorAll(".drop");

menuBtn.addEventListener("click", toggleMenu);
dropMenu.forEach((el) => {
  el.addEventListener("click", toggleSubMenu);
});
function toggleMenu() {
  if (menuBox.classList.contains("toggle")) {
    menuBox.style.maxHeight = 0 + "px";
    dropMenu.forEach((el) => {
      el.querySelector("ul").style.maxHeight = 0 + "px";
    });
  } else {
    menuBox.style.maxHeight = menuBox.scrollHeight + "px";
  }
  menuBox.classList.toggle("toggle");
}

function toggleSubMenu() {
  let subMenu = this.querySelector("ul");
  if (subMenu.classList.contains("toggle")) {
    subMenu.style.maxHeight = 0 + "px";
  } else {
    subMenu.style.maxHeight = subMenu.scrollHeight + "px";
  }
  subMenu.classList.toggle("toggle");
}
