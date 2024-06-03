document.addEventListener('DOMContentLoaded', function () {
    const imageContainer = document.querySelector('.footer__redesSociales');
    const image = document.getElementById('image');
    const originalImage = imageContainer.getAttribute('data-original-image');

    imageContainer.addEventListener('mouseenter', function () {
        const currentSrc = image.src;
        const fileName = currentSrc.substring(currentSrc.lastIndexOf('/') + 1, currentSrc.lastIndexOf('.'));
        const extension = currentSrc.substring(currentSrc.lastIndexOf('.'));
        const llaveEgi = "{{";
        const llaveEgiCierre = "}}";

        const hoverImage = `${llaveEgi}asset('img/social_media/hover/${fileName}${extension}')${llaveEgiCierre}`;

        console.log(`Ruta de la imagen al pasar el ratón: ${hoverImage}`);
        image.src = hoverImage; // Cambia la imagen al pasar el ratón
    });

    imageContainer.addEventListener('mouseleave', function () {
        image.src = originalImage; // Vuelve a la imagen original al quitar el ratón
    });
});
