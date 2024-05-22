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

            <div class="header_hoverMenu">
                <a href="/resources" id="recursos">Recursos</a>
                    <div class="header_hoverMenuContenido">
                        <div class="header_hoverMenuContenido__info">
                            <div class="bloque_menuIzq">
                                <h3>Recursos</h3>
                                <p>Nuestra aplicación proporciona los recursos necesarios para mejorar la atención al cliente y optimizar el acceso correcto a los servicios que ofrece una empresa o compañía</p>
                            </div>
                            <div class="headerHover__separation">
                                <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                                <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                                <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                            </div>
                            <div class="bloque_menuDer">
                                    <a>Mapas interiores</a>
                                    <a>Guía</a>
                                    <a>Soporte técnico y actualizaciones</a>
                                    <a>Aplicación a distintos entornos</a>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="header_hoverMenu">
                <a href="/running" id="funcionamiento">Funcionamiento</a>
                <div class="header_hoverMenuContenido">
                    <div class="header_hoverMenuContenido__info">
                        <div class="bloque_menuIzq">
                            <h3>Funcionamiento</h3>
                            <p>NeverLost posee las herramientas necesarias para poder guiarte, de forma interactiva, dentro de un recinto cerrado sin necesidad de beacons</p>
                        </div>
                        <div class="headerHover__separation">
                            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                        </div>
                        <div class="bloque_menuDer">
                                <a>¿Cómo funciona?</a>
                                <a>Tutorial</a>
                                <a>Implantación</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_hoverMenu">
                <a href="/try_me" id="pruebaNeverlost">Prueba Neverlost</a>
                <div class="header_hoverMenuContenido">
                    <div class="header_hoverMenuContenido__info">
                        <div class="bloque_menuIzq">
                            <h3>¡Prueba NeverLost!</h3>
                            <p>Con nuestra demo, prueba como se utiliza la aplicación en primera persona</p>
                        </div>
                        <div class="headerHover__separation">
                            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                            <img src="{{asset('img/resources/linea24.png')}}" alt="linea-separatoria">
                        </div>
                        <div class="bloque_menuDer">
                                <a>Plan personalizado</a>
                                <a>Demo</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="header__content_buttons">
            <a href="/login" class="log_in">Log in</a>
            <a href="/register" class="registro">Regístrate</a>
        </div>
    </div>
</header>
