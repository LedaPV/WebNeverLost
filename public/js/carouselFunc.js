let currentSlideFunc = 0;

function showSlideFunc(index) {
    const slides = document.querySelectorAll('.carouselFunc img');
    if (index >= slides.length) {
        currentSlideFunc = 0;
    } else if (index < 0) {
        currentSlideFunc = slides.length - 1;
    } else {
        currentSlideFunc = index;
    }
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === currentSlideFunc);
    });
}

function nextSlideFunc() {
    showSlideFunc(currentSlideFunc + 1);
}

function prevSlideFunc() {
    showSlideFunc(currentSlideFunc - 1);
}

// Inicializa el carrusel mostrando la primera imagen
showSlideFunc(currentSlideFunc);

// Cambia automáticamente las imágenes cada 3 segundos
setInterval(nextSlideFunc, 2000);
