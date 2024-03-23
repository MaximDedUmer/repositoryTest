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
