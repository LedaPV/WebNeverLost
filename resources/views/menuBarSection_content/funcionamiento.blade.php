@extends('layout.layout')

@section('title', 'Funcionamiento')

@section('content')

<!--BANNER: ¿CÓMO FUNCIONA?-->
<section class= "funcionamiento" id="how_does_it_work?">
    <div class= "bannerFuncionamiento">
        <div class= "bannerFuncionamiento__leftColumn">
            <div class="carouselFunc">
                <img src="{{ asset('img/resources/m.svg') }}" alt="carousel_item active">
                <img src="{{ asset('img/carousel/tuto2.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/tuto3.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/home.svg') }}" alt="carousel_item">
                
            </div>
        </div>
        <div class= "bannerFuncionamiento__rightColumn">
            <h1>¿Cómo funciona?</h1>
            <div class="bannerFuncionamiento__rightColumn_p1">
                <p>NeverLost utiliza un sistema de localización basado principalmente en la ubicación por GPS. Empleamos los recursos disponibles al alcance de cualquier usuario, optimizando su funcionamiento y maximizando su rendimiento</p>
            </div>
            <div class="bannerFuncionamiento__rightColumn_p2">
                <p>En aquellas <span class="destacar_texto">zonas interiores con características complejas</span>, donde no es posible utilizar la geolocalización GPS por inexactitud o donde las señales wifi son muy débiles, nosotros <span class="destacar_texto">usamos balizas 5G y beacons bluetooth</span> con el objetivo de captar la localización de los usuarios u otros activos de interés para el público o compañías privadas</p>
            </div>
            <div class="bannerFuncionamiento__rightColumn_p1">
                <p>Algunos interiores de edificios públicos, por suerte, ya se encuentran mapeados para que este recurso pueda ser utilizado por los servicios de emergencia en caso de que ocurra algún suceso desafortunado; pero, la mayoría de los recintos o complejos interiores privados no poseen planos o mapas disponibles para que sus usuarios localicen adecuadamente los servicios que ofrecen</p>
            </div>
            <div class="bannerFuncionamiento__rightColumn_p3">
                <p><span class="destacar_texto">Con NeverLost, crearemos un mapa a medida de la superficie de tu complejo y destacaremos los puntos de especial interés</span>. De esta manera, una vez ubicada cada parte de tu propiedad, <span class="destacar_texto">guiaremos a los usuarios de forma interactiva y usando la tecnología de realidad aumentada </span>para llegar hasta el lugar donde desean ir</p>
            </div>
        </div>
    </div>
</section>

<!--BANNER: TUTORIAL-->
<section class="tutorial" id="tutorial">
    <div class="bannerFuncionamiento">
        <div class="bannerTutorial__leftColumn">
            <h1>Tutorial</h1>
            <h3>Ejemplo NeverLost Airport</h3>
            <div class="step">
                <img src="{{ asset('img/resources/numero-1.png') }}" alt="numero1_64px">
                <p>Descarga la aplicación a través de los medios disponibles: QR, enlaces o las plataformas habituales (PlayStore y AppleStore)</p>
            </div>
            <div class="step">
                <img src="{{ asset('img/resources/numero-2.png') }}" alt="numero2_64px">
                <p>Sigue los pasos necesarios que te ofrece para poder utilizarla, recuerda que debes concederle los permisos necesarios para acceder a tu ubicación</p>
            </div>
            <div class="step">
                <img src="{{ asset('img/resources/numero-3.png') }}" alt="numero3_64px">
                <p>En el home de la aplicación, puedes decidir qué es lo que quieres hacer. En el menu inferior de la misma pantalla, tienes acceso a tu cuenta personal, los ajustes y un mapa en 2D del lugar en el que estás interesado</p>
            </div>
            <div class="step">
                <img src="{{ asset('img/resources/numero-4.png') }}" alt="numero4_64px">
                <p>En este caso, si escaneas tu billete ¡Disfruta de un recorrido con guiado interactivo! ¡Ya no hay excusa para llegar tarde ni perderse!</p>
            </div>
        </div>
        <div class="bannerTutorial__rightColumn">
            <div class="carouselTuto">
                <img src="{{ asset('img/carousel/playStore.svg') }}" alt="carousel_item active">
                <img src="{{ asset('img/carousel/app.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/tuto1.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/tuto2.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/tuto3.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/home.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/permisos.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/mapas.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/qr.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/flecha.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/ajustes.svg') }}" alt="carousel_item">
                <img src="{{ asset('img/carousel/usuario.svg') }}" alt="carousel_item">
                
                {{-- botones de deslizamiento --}}
                <button class="carousel-control prev" onclick="prevSlideTuto()">&#10094;</button>
                <button class="carousel-control next" onclick="nextSlideTuto()">&#10095;</button>
            </div>
        </div>
    </div>
</section>

<!--BANNER: IMPLANTACIÓN-->
<section class= "implantacion" id="implantation">
    <div class= "bannerImplantacion">
        <h1>Implantación</h1>
        <p>Descarga la aplicación en uno de los marketplaces disponibles o a través de un enlace o código QR, que les facilitaremos a nuestros clientes para que puedan obtenerla de forma rápida y sencilla sus usuarios.</p>
        <p class="texto_adicional">Una vez la consigas, solo te queda iniciar sesión con tus credenciales para que puedas disfrutar de la experiencia</p>
        <h2>Plataformas de descarga</h2>
        <div class="bannerImplantacion__descargas">
            <div class="bannerImplantacion__descargasDiv">
                <a href="https://apps.apple.com/us/app/Neverlost"><img src="{{asset('img/logo/logo_appleStore.svg')}}" alt="logo_descargaApple"></a>
            </div>
            <div class="bannerImplantacion__descargasDiv">
                <a href="https://play.google.com/store/apps?hl=es/Neverlost"><img href="" src="{{asset('img/logo/logo_androidPlayStore.svg')}}" alt="logo_descargaAndroid"></a>
            </div>
        </div>
    </div>

</section>

{{-- Enlaces con el Js --}}
    <script src="{{ asset('js/carouselTuto.js') }}"></script>
    <script src="{{ asset('js/carouselFunc.js') }}"></script>
@endsection