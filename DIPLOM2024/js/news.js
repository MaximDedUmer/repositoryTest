document.addEventListener("DOMContentLoaded", function () {
    const readMoreLinks = document.querySelectorAll(".read-more");
    const overlay = document.querySelector('.overlay');

    readMoreLinks.forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const newsContent = link.getAttribute("data-content");
            
            const popup = document.createElement("div");
            popup.classList.add("popup");
            popup.innerHTML = `
                <a class="close-popup" href="#">Закрыть</a>
                <div class="popup-content">
                    <h2>${link.parentElement.parentElement.querySelector('h2').innerText}</h2>
                    <p>${newsContent}</p>
                </div>
            `;
            
            overlay.innerHTML = ''; // Очищаем содержимое overlay, если оно было заполнено ранее
            overlay.appendChild(popup);
            overlay.style.display = 'flex';
        });
    });

    overlay.addEventListener('click', function (event) {
        if (event.target === overlay) {
            overlay.style.display = 'none';
        }
    });

    document.addEventListener("click", function (event) {
        if (event.target.classList.contains("close-popup")) {
            overlay.style.display = 'none';
        }
    });
});
