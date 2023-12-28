// function to handle logic when navbar icon pressed
// eslint-disable-next-line no-unused-vars
document.querySelector(".navbar-icon").addEventListener("click", (event) => {
  event.currentTarget.classList.toggle("change");

  const mobileNavbar = document.querySelector(".mobile-nav-list");
  mobileNavbar.classList.toggle("open-mobile-nav-list");
});

document.querySelectorAll(".dropdown-arrow").forEach((arrow) => {
  arrow.addEventListener("click", (event) => {
    arrow
      .closest(".responsive-dropdown")
      .querySelector(".responsive-dropdown-content")
      .classList.toggle("active");

    if (event.currentTarget.style.transform === "rotate(180deg)") {
      event.currentTarget.style.transform = "none";
    } else {
      event.currentTarget.style.transform = "rotate(180deg)";
    }
  });
});
