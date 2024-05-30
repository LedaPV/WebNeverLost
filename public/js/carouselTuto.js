let currentSlideTuto = 0;

function showSlideTuto(index) {
    const slides = document.querySelectorAll('.carouselTuto img');
    if (index >= slides.length) {
        currentSlideTuto = 0;
    } else if (index < 0) {
        currentSlideTuto = slides.length - 1;
    } else {
        currentSlideTuto = index;
    }
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === currentSlideTuto);
    });
}

function nextSlideTuto() {
    showSlideTuto(currentSlideTuto + 1);
}

function prevSlideTuto() {
    showSlideTuto(currentSlideTuto - 1);
}

// Inicializa el carrusel mostrando la primera imagen
showSlideTuto(currentSlideTuto);



