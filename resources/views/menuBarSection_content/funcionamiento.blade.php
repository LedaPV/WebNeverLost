@extends('layout.layout')

@section('title', 'Funcionamiento')

@section('content')
<!--BANNER: ¿CÓMO FUNCIONA?-->
<section class= "funcionamiento">
    <div class= "bannerFuncionamiento">
        <div class= "bannerFuncionamiento__rightColumn">
            <h1>¿Cómo funciona?</h1>
            <div class="bannerFuncionamiento__rightColumn_p1">
                <p>NeverLost utiliza un sistema de localización basado principalmente en la ubicación por GPS. Empleamos los recursos disponibles al alcance de cualquier usuario, optimizando su funcionamiento y maximizando su rendimiento. </p>
            </div>
            <div class="bannerFuncionamiento__rightColumn_p2">
                <p>En aquellas zonas interiores con características complejas, donde no es posible utilizar la geolocalización GPS por inexactitud o donde las señales wifi son muy débiles, nosotros usamos beacons 5G y bluetooth con el objetivo de captar la localización de los usuarios u otros activos de interés para el público o compañías privadas.</p>
            </div>
            <div class="bannerFuncionamiento__rightColumn_p3">
                <p>Algunos interiores de edificios públicos, por suerte, ya se encuentran mapeados para que este recurso pueda ser utilizado por los servicios de emergencia en caso de que ocurra algún suceso desafortunado; pero, la mayoría de los recintos o complejos interiores privados no poseen planos o mapas disponibles para que sus usuarios localicen adecuadamente los servicios que ofrecen.</p>
            </div>
            <div class="bannerFuncionamiento__rightColumn_p4">
                <p>Con NeverLost, crearemos un mapa a medida de la superficie de tu complejo y destacaremos los puntos de especial interés. De esta manera, una vez ubicada cada parte de tu propiedad, guiaremos a los usuarios de forma interactiva y usando la tecnología de realidad aumentada para llegar hasta el lugar donde desean ir.</p>
            </div>
        </div>
        <div class= "bannerFuncionamiento__leftColumn">
            <img src="{{asset('img//')}}" alt="">
        </div>
    </div>
</section>
<!--BANNER: TUTORIAL-->
<!--BANNER: IMPLANTACIÓN-->
@endsection