@extends('layout.layout')

@section('title', 'Funcionamiento')

@section('content')
<!--BANNER: ¿CÓMO FUNCIONA?-->
<section class= "funcionamiento">
    <div class= "bannerFuncionamiento">
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
                <p>Con NeverLost, crearemos un mapa a medida de la superficie de tu complejo y destacaremos los puntos de especial interés. De esta manera, una vez ubicada cada parte de tu propiedad, guiaremos a los usuarios de forma interactiva y usando la tecnología de realidad aumentada para llegar hasta el lugar donde desean ir</p>
            </div>
        </div>
        <div class= "bannerFuncionamiento__leftColumn">
            <img src="{{asset('img//')}}" alt="">
        </div>
    </div>
</section>
<!--BANNER: TUTORIAL-->
<section class= "tutorial">
    <div class= "bannerFuncionamiento">
        <div class= "bannerTutorial__rightColumn">

        </div>
        <div class= "bannerTutorial__leftColumn">
            <h1>Tutorial</h1>
            <div class= "step">
                <img src="{{asset('img/resources/numero-1.png')}}" alt="numero1_64px">
                <p>Descarga la aplicación</p>
            </div>
            <div class= "step">
                <img src="{{asset('img/resources/numero-2.png')}}" alt="numero2_64px">
                <p>Sigue los pasos necesarios que te ofrece para poder utilizarla</p>
            </div>
            <div class= "step">
                <img src="{{asset('img/resources/numero-3.png')}}" alt="numero3_64px">
                <p>Pincha sobre el menú o sobre el mapa 2D, el lugar que deseas visitar</p>
            </div>
            <div class= "step">
                <img src="{{asset('img/resources/numero-4.png')}}" alt="numero4_64px">
                <p>¡Disfruta de un recorrido con guiado interactivo! ¡Ya no hay excusa para llegar tarde ni perderse!</p>
            </div>
        </div>
    </div>
</section>
<!--BANNER: IMPLANTACIÓN-->
<section class= "implantacion">
    <div class= "bannerImplantacion">
        <h1>Implantación</h1>
        <p>Descarga la aplicación en uno de los marketplaces disponibles o a través de un enlace o código QR, que les facilitaremos a nuestros clientes para que puedan obtenerla de forma rápida y sencilla sus usuarios.</p>
        <p>Una vez la consigas, solo te queda iniciar sesión con tus credenciales para que puedas disfrutar de la experiencia</p>
        <h2>Plataformas de descarga</h2>
        <div class="bannerImplantacion__descargas">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </div>

</section>
@endsection