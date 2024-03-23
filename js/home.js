// JavaScript для анимации карусели
const carouselContainer = document.querySelector(".carousel-container");
const slides = document.querySelectorAll(".carousel-slide");
const slideWidth = 70; // Ширина каждого слайда (пиксели)
let slideIndex = 0;

function showSlide(n) {
    if (n < 0) {
        slideIndex = slides.length - 1;
    } else if (n >= slides.length) {
        slideIndex = 0;
    }

    const translateX = -slideIndex * slideWidth;
    carouselContainer.style.transform = `translateX(${translateX}vw)`;
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
}

showSlide(slideIndex);
setInterval(nextSlide, 4000);

const prevButton = document.querySelector(".prev-button");
const nextButton = document.querySelector(".next-button");

prevButton.addEventListener("click", () => {
    prevSlide();
});

nextButton.addEventListener("click", () => {
    nextSlide();
});

// burger menu
const burgerButton = document.querySelector(".burger-button");
const burgerMenu = document.querySelector(".burger-menu");
const body = document.body;

burgerButton.addEventListener("click", () => {
    burgerMenu.classList.toggle("active");
    body.classList.toggle("no-scroll");
});

// Закрываем бургер-меню при клике вне его области
document.addEventListener("click", (event) => {
    if (burgerMenu.classList.contains("active") && !burgerMenu.contains(event.target) && event.target !== burgerButton) {
        burgerMenu.classList.remove("active");
        body.classList.remove("no-scroll");
    }
});

// Закрываем бургер-меню при нажатии на клавишу "Esc"
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && burgerMenu.classList.contains("active")) {
        burgerMenu.classList.remove("active");
        body.classList.remove("no-scroll");
    }
});

// Изменяем обработчик события для аккордеонов
const accordionItems = document.querySelectorAll('.accordion');

for (const item of accordionItems) {
    item.addEventListener('click', function() {
        const submenu = this.querySelector('.submenuAccordeon');
        submenu.classList.toggle('active');
    });
}
