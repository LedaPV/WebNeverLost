<!--HEADER-->
<header class="header">
    <div class="header__language">
        <img src="{{asset('img/language/espana24px.png')}}" alt="español">
        <p>es</p>
        
        <img src="{{asset('img/language/reino-unido24px.png')}}" alt="english">
        <p>en</p>
    </div>

    <div class="header__content">
        <div class= "header__content_logo">
            <img src="{{asset('img/logo/Neverlost3.svg')}}" alt="logo_Neverlost">
        </div>

        <div class="header__content_menu">
            <a>Home</a>
            <a href="/resources" id="recursos">Recursos</a>
            <a href="/running" id="funcionamiento">Funcionamiento</a>
            <a href="/try_me" id="pruebaNeverlost">Prueba Neverlost</a>
        </div>

        <div class="header__content_buttons">
            <a href="/login" class="log_in">Log in</a>
            <a href="/register" class="registro">Regístrate</a>
        </div>
    </div>
</header>
{{-- 
<!--HEADER_BANNERS_HOVER-->
<!--Recursos-->
<section>
    <div class="headerHover" id="recursosHover">
        <div class="headerHover__leftColumn">
            <h3>Recursos</h3>
            <p>Nuestra aplicación proporciona los recursos necesarios para mejorar la atención al cliente y optimizar el acceso correcto a los servicios que ofrece una empresa o compañía</p>
        </div>
        <div class="headerHover__separation">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
        </div>
        <div class="headerHover__rightColumn">
            <ul>
                <li>Mapas interiores</li>
                <li>Guía</li>
                <li>Soporte técnico y actualizaciones</li>
                <li>Aplicación a distintos entornos</li>
            </ul>
        </div>
    </div>
</section>

<!--Funcionamiento-->
<section>
    <div class="headerHover">
        <div class="headerHover__leftColumn">
            <h3>Funcionamiento</h3>
            <p>NeverLost posee las herramientas necesarias para poder guiarte, de forma interactiva, dentro de un recinto cerrado sin necesidad de beacons</p>
        </div>
        <div class="headerHover__separation">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
        </div>
        <div class="headerHover__rightColumn">
            <ul>
                <li>¿Cómo funciona?</li>
                <li>Tutorial</li>
                <li>Implantación</li>
            </ul>
        </div>
    </div>
</section> 

<!--Prueba NeverLost-->
    
<section>
    <div class=headerHover>
        <div class="headerHover__leftColumn">
            <h3>¡Prueba NeverLost!</h3>
            <p>Con nuestra demo, prueba como se utiliza la aplicación en primera persona</p>
        </div>
        <div class="headerHover__separation">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
        </div>
        <div class="headerHover__rightColumn">
            <ul>
                <li>Demo</li>
                <li>Plan personalizado</li>
            </ul>
        </div>
    </div>
</section>

<script src="{{asset('js/mostrarRecursos.js')}}"></script>

<script>
    // Obtén el elemento "Recursos"
    var recursos = document.getElementById('recursos');

    // Obtén el elemento del hover
    var recursosHover = document.getElementById('recursosHover');

    // Añade un evento de mouseover al enlace de recursos para mostrar el contenido adicional
    recursos.addEventListener('mouseover', function() {
        recursosHover.classList.add('recursos_mostrar');
    });

    // Añade un evento de mouseout al enlace de recursos para ocultar el contenido adicional
    recursos.addEventListener('mouseout', function() {
        recursosHover.classList.remove('recursos_mostrar');
    });
</script> --}}
