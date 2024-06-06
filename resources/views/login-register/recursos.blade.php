@extends('layout.layout')

@section('title', 'Recursos')

@section('content')
 <!--BANNER: MAPAS-->
  <section id="mapas_interiores" id="interiors_maps">
    <div class= "bannerMapas">
        <div class= "bannerMapas__leftColumn">
            <h1>Mapas interiores</h1>
            <div>
                <p>Diseñamos de forma precisa planos, callejeros y mapas para espacios interiores y mixtos</p>
            </div>
            <div class="bannerMapas__Colored">
                <p>Según las estadísticas, en la actualidad pasamos más del 80% de nuestro tiempo en espacios interiores como, por ejemplo: la oficina, la casa, centros comerciales, restaurantes y cafeterías, etc</p>
            </div>
            <div>
                <p><span><img src="{{asset('img/logo/google_maps.svg')}}" class="google-maps" alt="google-maps"></span>, es capaz de geolocalizar a sus usuarios y crear con una extraordinaria exactitud mapas y visualizaciones de zonas públicas y exteriores. Sin embargo, a la hora de mapear espacios interiores y privados, la calidad de su geolocalización por GPS muestra algunas carencias; y nosotros ofrecemos una solución para resolver este reto</p>
            </div>
        </div>
        <div class="bannerMapas__rightColumn">
            <img src="{{asset('img/photos/mapas.svg')}}" alt="mapas">
        </div>
    </div>
  </section>

  <!--BANNER: GUÍA-->
  <section class= "guia" id="guide">
    <div class= "bannerGuia">
        <div class= "bannerGuia__leftColumn">
            <img src="{{asset('img/photos/guia.svg')}}" alt="guia">
        </div>
        <div class="bannerGuia__rightColumn">
            <h1>Guía</h1>
            <div>
                <p>Nuestro trabajo consiste en crear un sistema sencillo, cómodo e intuitivo de geolocalizarte y que puedas llegar a tu destino, utilizando <span class= "resaltar_texto">guías interactivas con realidad aumentada</span> que además brindan información adicional sobre el recorrido a seguir y los elementos que componen ese espacio.</p>
            </div>
        </div>
    </div>
  </section>

  <!--BANNER: SOPORTE TÉCNICO Y ACTUALIZACIONES-->
  <section class="soporte" id="technical_support">
    <div class= "bannerSoporte">
        <h1>Soporte técnico y actualizaciones</h1>
        <div class= "bannerSoporte_img">
            <img src="{{asset('img/photos/soporte.svg')}}" alt="soporteYactualizaciones">
        </div>
        <div class= "bannerSoporte_text">
            <p>Nos comprometemos a ofrecer un soporte óptimo de nuestra aplicación, realizando los ajustes necesarios para resolver problemas relacionados con la gestión de los datos y la actualización de los mapas y la propia guía, sujetos a los cambios que puedan producirse en la disposición de los elementos del recinto o entorno interior que nos ocupa</p>
            <span class="bannerSoporte_textJustify"><p>Si te interesa nuestro proyecto y contratas nuestros servicios, tendrás seis meses de soporte y actualizaciones gratuitos</p></span>
        </div>  

        <div class="enlace_centroSoporte">
            <p>Si ya eres usuario, comúnicate con nosotros en nuestro <span class="enlace_centroSoporte_text"><a href="/technical_support_center">Centro de soporte técnico</a></span></p>
        </div> 
    </div>
  </section>

  <!--BANNER: APLICACIONES DE NEVERLOST EN DIFERENTES ENTORNOS Y SECTORES-->
  <section class="sectores" id="applications">
    <div class="bannerSectores">
        <h1>Aplicaciones de NeverLost en diferentes entornos y sectores</h1>
        <div class="bannerSectores__grid">
            <div class="item">
                <div class="item__img">
                    <img src="{{asset('img/icons/sectores/transportes.svg')}}" alt="sector_transporte">
                </div> <!-- Cerrar el div correctamente -->
                <div class="item__p">
                    <h3>Sector de transportes</h3>
                    <p>Aeropuertos, puertos marítimos, metro, estaciones de tren y autobuses, etc.</p>
                </div>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="{{asset('img/icons/sectores/sanitario.svg')}}" alt="sector_sanitario">
                </div>
                <div class="item__p">
                    <h3>Sector sanitario</h3>
                    <p>Complejos hospitalarios y centros médicos</p>
                </div>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="{{asset('img/icons/sectores/industrial.svg')}}" alt="sector_industrial">
                </div>
                <div class="item__p">
                    <h3>Sector industrial</h3>
                    <p>Fábricas, centros de explotación de recursos y centros de producción</p>
                </div>
             </div>
            <div class="item">
                <div class="item__img">
                    <img src="{{asset('img/icons/sectores/administracion.svg')}}" alt="sector_administrativo">
                </div>
                <div class="item__p">
                    <h3>Sector administrativo</h3>
                    <p>Oficinas, coworkings, hubs empresariales y servicios de administración pública</p>
                </div>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="{{asset('img/icons/sectores/comercial.svg')}}" alt="sector_comercial">
                </div>
                <div class="item__p">
                    <h3>Sector comercial</h3>
                    <p>Centros y complejos comerciales, super e hipermercados, mercados de abastos, tiendas y establecimientos privados</p>
                </div>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="{{asset('img/icons/sectores/cultural.svg')}}" alt="sector_cultural">
                </div>
                <div class="item__p">
                    <h3>Sector cultural</h3>
                    <p>BICs, museos, monumentos, yacimientos arqueológicos, exposiciones y colecciones artisticas, etc.</p>
                </div>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="{{asset('img/icons/sectores/recreativo.svg')}}" alt="sector_recreativo">
                </div>
                <div class="item__p">
                    <h3>Sector recreativo (ocio)</h3>
                    <p>Teatros, parques de atracciones, ferias, festivales de música, campeonatos deportivos, concentraciones sociales, etc. </p>
                </div>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="{{asset('img/icons/sectores/turistico.svg')}}" alt="sector_turistico">
                </div>
                <div class="item__p">
                    <h3>Sector turístico</h3>
                    <p>Hoteles, paradores, complejos rurales, balnearios, campings, etc.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection