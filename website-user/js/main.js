const closeMenuMobile = document.querySelector(".close-menu-mobile");
    const menuIconScreen = document.querySelector(".menu-icons-screen");
    const navMenuMobile = document.querySelector(".nav-mobile");
    menuIconScreen.addEventListener("click", function () {
      navMenuMobile.style.display = "block";
    });
    closeMenuMobile.addEventListener("click", function () {
      navMenuMobile.style.display = "none";
    });