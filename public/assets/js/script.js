document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");

    window.onscroll = function () {
      if (window.scrollY > 100) {
        navbar.classList.add("fixed-top");
      } else {
        navbar.classList.remove("fixed-top");
      }
    };
  });
  