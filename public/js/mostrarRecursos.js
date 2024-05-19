document.addEventListener("DOMContentLoaded",function(){
    let recursos = document.getElementById('recursos');
let texto = document.getElementById('.headerHover');

texto.addEventListener("mouseenter", function(){
    recursos.classList.add('recursos_mostrar')
})

texto.addEventListener("mouseleave", function(){
    recursos.classList.remove('recursos_mostrar')
    });
});
