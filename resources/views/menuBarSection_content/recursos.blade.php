@extends('layout.layout')

@section('title', 'Recursos')

@section('content')
 <!--BANNER: MAPAS-->
  <section>
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
  <section class= "guia">
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
  <section class="soporte">
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
@endsection