// function to handle logic when navbar icon pressed
// eslint-disable-next-line no-unused-vars
function toggleNavbarIconLogic(navbarIcon) {
  navbarIcon.classList.toggle("change");
  toggleMobileNav();
}

function toggleMobileNav() {
  var idText = "mobile-nav-list";
  if (document.getElementById(idText).style.height === "auto") {
    document.getElementById(idText).style.height = "0%";
  } else {
    document.getElementById(idText).style.height = "auto";
  }
}

// eslint-disable-next-line no-unused-vars
function toggleResponsiveActive() {
  const x = document.getElementById("responsive-content");
  if (x.className === "responsive-dropdown-content") {
    x.className += " active";
  } else {
    x.className = "responsive-dropdown-content";
  }

  const dropdownArrow = document.getElementById("dropdown-arrow");
  if (dropdownArrow.style.transform === "rotate(180deg)") {
    dropdownArrow.style.transform = "none";
  } else {
    dropdownArrow.style.transform = "rotate(180deg)";
  }
}
