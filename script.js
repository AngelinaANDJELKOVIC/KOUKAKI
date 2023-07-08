//H2 Scroll L'histoire

let animH2 = document.querySelector(".animH2");
window.addEventListener("scroll", () => {
  const coordonneesanimH2 = animH2.getBoundingClientRect();
  if (
    coordonneesanimH2.top <= window.innerHeight - 100 &&
    coordonneesanimH2.bottom >= 0
  ) {
    animH2.classList.add("animationH2");
  }
});

//H2 2 Scroll Studio Koukaki

let animH22 = document.querySelector(".animH22");
window.addEventListener("scroll", () => {
  const coordonneesanimH22 = animH22.getBoundingClientRect();
  if (
    coordonneesanimH22.top <= window.innerHeight - 100 &&
    coordonneesanimH22.bottom >= 0
  ) {
    animH22.classList.add("animationH22");
  }
});

// H3 Scroll Les personnages
let animH3 = document.querySelector(".animH3");
window.addEventListener("scroll", () => {
  const coordonneesanimH3 = animH3.getBoundingClientRect();
  if (
    coordonneesanimH3.top <= window.innerHeight - 100 &&
    coordonneesanimH3.bottom >= 0
  ) {
    animH3.classList.add("animationH3");
  }
});

//H3 Scroll Le Lieu
let animH33 = document.querySelector(".animH33");
window.addEventListener("scroll", () => {
  const coordonneesanimH33 = animH33.getBoundingClientRect();
  if (
    coordonneesanimH33.top <= window.innerHeight - 100 &&
    coordonneesanimH33.bottom >= 0
  ) {
    animH33.classList.add("animationH33");
  }
});

//H3 Scroll nominé aux Oscars  -->

let animH333 = document.querySelector(".animH333");
window.addEventListener("scroll", () => {
  const coordonneesanimH333 = animH333.getBoundingClientRect();
  if (
    coordonneesanimH333.top <= window.innerHeight - 100 &&
    coordonneesanimH33.bottom >= 0
  ) {
    animH333.classList.add("animationH333");
  }
});

//Nuage Scroll
let boiteNuages = document.querySelector(".boitenuages");
window.addEventListener("scroll", () => {
  const coordonneesBoiteNuages = boiteNuages.getBoundingClientRect();
  if (
    coordonneesBoiteNuages.top <= window.innerHeight - 100 &&
    coordonneesBoiteNuages.bottom >= 0
  ) {
    boiteNuages.classList.add("animationNuages");
  }
});

//    Apparition section par section

let sectionFadeIn = document.querySelectorAll(".section-fade-in");
for (let i = 0; i < sectionFadeIn.length; i++) {
  window.addEventListener("scroll", () => {
    const sectionFadeInCoordonnees = sectionFadeIn[i].getBoundingClientRect();
    if (
      sectionFadeInCoordonnees.top <= window.innerHeight - 100 &&
      sectionFadeInCoordonnees.bottom >= 0
    ) {
      sectionFadeIn[i].classList.add("show");
    }
  });
}

// Effet de parallaxe entre le titre et la vidéo.

let parallax = document.querySelector(".parallax");
let imageP = document.querySelector(".parallax__image");

window.addEventListener("scroll", function () {
  let offset = window.pageYOffset;
  parallax.style.transform = "translateY(" + offset * 0.7 + "px)";
});

// Slider

var swiper = new Swiper(".mySwiper", {
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
});
