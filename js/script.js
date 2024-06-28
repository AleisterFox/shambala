const menu = document.querySelectorAll(".menu");
const burguerButton = document.querySelector(".menu__button");

burguerButton.addEventListener("click", () => {
  if (this.innerWidth < 851) {
    menu.forEach((list) => {
      if (list.style.display != "flex") {
        list.style.display = "flex";
        list.style.animation = "showMenu 0.5s linear";
        burguerButton.classList.remove("fa-bars");
        burguerButton.classList.add("fa-x");
      } else {
        list.style.animation = "hideMenu 0.5s linear";
        setTimeout(() => {
          list.style.display = "none";
        }, 490);
        burguerButton.classList.remove("fa-x");
        burguerButton.classList.add("fa-bars");
      }
    });
  }
});

const headerBar = document.querySelector("header");
const mainHero = document.querySelector("section:first-child");
const menuOptions = document.querySelectorAll(".menu li>a");
const logo = document.querySelector('header picture img.escritorio');


if (window.scrollY === 0 && headerBar.offsetTop === mainHero.offsetTop) {
  headerBar.style.backgroundColor = "transparent";
  menuOptions.forEach((menuOption) => {
    menuOption.style.color = "white";
  });
  logo.src = 'img/logo-white.png';
}

window.addEventListener("scroll", function () {
  if (window.scrollY === 0 && headerBar.offsetTop === mainHero.offsetTop) {
    headerBar.style.backgroundColor = "transparent";
    menuOptions.forEach((menuOption) => {
      menuOption.style.color = "white";
    });
    logo.src = 'img/logo-white.png';
  } else {
    headerBar.style.backgroundColor = "rgba(255, 255, 255, 1)";
    menuOptions.forEach((menuOption) => {
      menuOption.style.color = "var(--main-color)";
    });
    logo.src = 'img/logo.png';
  }
});

// const downloadCvs = document.querySelectorAll(".download");

// downloadCvs.forEach((downloadCv) => {
//   downloadCv.addEventListener("click", () => {
//     const fileUrl = "./cv.pdf";
//     const fileName = "cv.pdf";

//     fetch(fileUrl)
//       .then((response) => response.blob())
//       .then((blob) => {
//         // Create a temporary anchor element
//         const a = document.createElement("a");
//         a.href = URL.createObjectURL(blob);
//         a.download = fileName;

//         // Programmatically trigger the download
//         a.click();

//         // Clean up
//         URL.revokeObjectURL(a.href);
//         a.remove();
//       });
//   });
// });
