@extends('layout.layout')

@section('title', 'Neverlost')

@section('content')
<!--BANNER: PUBLICIDAD NEVERLOST 1-->
<section class="publicidadNeverlost1">
    <div class="banner_publicidadNeverlost">
        <p>Más que solo un mapa</p>
        <p>Como <span><img src="{{asset('img/logo/google_maps.svg')}}" class="google-maps" alt="google-maps"></span>, pero mejor</p>
    </div>
</section>
<!--BANNER: DISEÑO DE MAPAS Y CALLEJEROS-->
<section class="diseñoMapas">
    <div class="banner_diseñoMapas">
        <h1>Diseño de mapas y callejeros de interior</h1>
        <p>Transforma los planos básicos de tu negocio en una experiencia interactiva e inmersiva con la visualización de mapas en 2D y una guía interactiva en 3D a través de realidad aumentada, ofreciendo una visita totalmente personalizada a tus clientes</p>
    </div>
</section>
<!--BANNER: PUBLICIDAD NEVERLOST 2-->
<section class="publicidadNeverlost2">
    <div class="banner_publicidadNeverlost">
        <p>No te pierdas</p>
        <p>Encuentra rápidamente y de forma simple tu destino</p>
    </div>
</section>
<!--BANNER: SERVICIOS DE NEVERLOST-->
<section class="serviciosNeverlost">
    <div class="banner_serviciosNeverlost">
        <div class="banner_serviciosImagenTitulo">
            <h1>Servicios de</h1>
            <img src="{{asset('img/logo/Neverlost3.svg')}}" class="logo_Neverlost_Home" alt="Neverlost">
        </div>
        
            <div class="banner_serviciosNeverlost__info">
                <div class="banner_serviciosNeverlost__info_titulo">
                    <img src="{{asset('img/resources/linea_a.svg')}}" alt="linea_aTitulo">
                    <h2>Navegación en interiores</h2>
                    <img src="{{asset('img/resources/linea_b.svg')}}" alt="linea_bTitulo">
                </div>
                <div class="recurso_info">
                    <div class="recurso_info_titulo">
                        <h3>Ubícate</h3>
                    </div>
                    <div class="recurso_info_lista">
                        <img src="{{asset('img/icons/flechas/icono_flecha.svg')}}" alt="flecha">
                        <p>Posicionamiento y ubicación en tiempo real, tanto para ubicar a tus clientes y empleados, como para controlar la situación de maquinaria y recursos industriales</p>
                    </div>
                </div>
                <div class="recurso_info">
                    <div class="recurso_info_titulo">
                        <h3>Destaca los puntos atractivos de tu negocio o complejo  para tus clientes</h3>
                    </div>
                    <div class="recurso_info_lista">
                        <img src="{{asset('img/icons/flechas/icono_flecha.svg')}}" alt="flecha">
                        <p>Localización de puntos de interés con información multimedia, para que tus trabajadores y usuarios estén siempre informados sobre eventos, reuniones, horarios, etc.</p>
                    </div>
                </div>
                <div class="recurso_info">
                    <div class="recurso_info_titulo">
                        <h3>Recorre el espacio para encontrar tu objetivo de forma simple, intuitiva e interactivo</h3>
                    </div>
                    <div class="recurso_info_lista">
                        <img src="{{asset('img/icons/flechas/icono_flecha.svg')}}" alt="flecha">
                        <p>Guiado paso a paso, con actualizaciones y recálculos constantes para las posibles desviaciones</p>
                    </div>
                </div>

                <div class="recurso_info">
                    <div class="recurso_info_titulo">
                        <h3>Cálculo de rutas</h3>
                    </div>
                    <div class="recurso_info_lista">
                        <img src="{{asset('img/icons/flechas/icono_flecha.svg')}}" alt="flecha">
                        <div class="recurso_info_lista_parrafos">
                            <p>Muestra la ruta más corta para llegar a tu destino</p>
                            <p>Crea tus propias rutas, una para clientes y otra para empleados. Diseña rutas exclusivas para tus trabajadores; con nuestra aplicación puedes contemplar áreas restringidas para tu personal, dependiendo de su perfil y puesto, y de los niveles de seguridad que éstos mismos tengan otorgados</p>
                        </div>
                    </div>
                </div>
                <div class="recurso_info">
                    <div class="recurso_info_titulo">
                        <h3>Añade destinos y listas</h3>
                    </div>
                    <div class="recurso_info_lista">
                        <img src="{{asset('img/icons/flechas/icono_flecha.svg')}}" alt="flecha">
                        <p>Guarda tus destinos preferidos, los que repites habitualmente; creando listas para cada categoría</p>
                    </div>
                </div>
            </div>

    </div>
</section>
<!--BANNER: PUBLICIDAD NEVERLOST 3-->
<section class="publicidadNeverlost3">
    <div class="banner_publicidadNeverlost">
        <p>Todo, en tu propio dispositivo móvil</p>
    </div>
</section>
<!--BANNER: CARACTERÍSTICAS-->
<section class="caracteristicas">
    <div class="banner_carasteristicas">
        <div class="banner_caracateristicasTitulo">
            <h1>Características de las aplicaciones</h1>
            <img src="{{asset('img/logo/Neverlost3.svg')}}" class="logo_Neverlost_Home" alt="Neverlost">

        </div>
        <div class="banner_caracteristicas__info">
            <div class="caracteristicas_info">
                <img src="{{asset('img/icons/caracteristicas/escalable.svg')}}" alt="escalable">
                <div class="caracteristicas_info_textos">
                    <h3>Escalable</h3>
                    <p>Nuestras apps son fácilmente integrales en una gran cantidad de complejos, edificios y recintos. La única diferencia a la hora de elaborarla es el diseño de un nuevo mapa</p>
                </div>
            </div>
            <div class="caracteristicas_info">
                <img src="{{asset('img/icons/caracteristicas/comoda.svg')}}" alt="intuitiva">
                <div class="caracteristicas_info_textos">
                    <h3>Cómoda e intuitiva</h3>
                    <p>Con una interfaz sencilla, que a la hora de guiarte te proporciona una experiencia inmersiva gracias a sus animaciones tridimensiales</p>
                </div>
            </div>
            <div class="caracteristicas_info">
                <img src="{{asset('img/icons/caracteristicas/para_todos.svg')}}" alt="para_todos">
                <div class="caracteristicas_info_textos">
                    <h3>Aplicaciones para todos</h3>
                    <p>Estamos comprometidos con la inclusión e integración de todas las personas que conforman nuestra sociedad.</p>
                    <p>Adaptables a personas con movilidad reducida y discapacidad visual</p>
                </div>
            </div>
            <div class="caracteristicas_info">
                <img src="{{asset('img/icons/caracteristicas/multiplataforma.svg')}}" alt="multiplataforma">
                <div class="caracteristicas_info_textos">
                    <h3>Multiplataforma</h3>
                    <p>Disponible tanto para sistemas y dispositivos IOS, como Android</p>
                </div>
            </div>
            <div class="caracteristicas_info">
                <img src="{{asset('img/icons/caracteristicas/productividad.svg')}}" alt="productividad">
                <div class="caracteristicas_info_textos">
                    <h3>Productiva</h3>
                    <p>Optimiza al máximo la localición de tu dispositivo y aprovecha todos sus recursos para ubicarte en un lugar preciso e incluso  para poder seguir una ruta concreta que se le indique</p>
                </div>
            </div>
            <div class="caracteristicas_info">
                <img src="{{asset('img/icons/caracteristicas/sin_infraestructura.svg')}}" alt="sin_infraestructura">
                <div class="caracteristicas_info_textos">
                    <h3>Sin necesidad de incorporar infraestructuras en tu negocio</h3>
                    <p>En definitiva, nos apoyamos en la tecnología de geolocalización por GPS presente en los dispositivos. Únicamente en casos complejos y excepcionales, recurrimos a balizas 5G o beacons bluetooth debido a la precaria red wifi o de geolocalozación disponibles</p>
                </div>
            </div>
</section>
<!--BANNER: PUBLICIDAD NEVERLOST 4-->
<section class="publicidadNeverlost4">
    <div class="banner_publicidadNeverlost">
        <p>Sin límites</p>
        <p>Edificios accesibles para todos</p>
    </div>
</section>
<!--BANNER: PUBLICIDAD NEVERLOST-->
@endsection