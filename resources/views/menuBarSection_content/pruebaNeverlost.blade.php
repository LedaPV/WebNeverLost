@extends('layout.layout')

@section('title', 'Prueba_NeverLost')

@section('content')
 <!--BANNER: PLAN PERSONALIZADO-->
 <section class= "planPersonalizado">
    <div class="planPersonalizado__info">
        <h1>Plan personalizado</h1>
        <div class="planPersonalizado__info_textos">
            <p>Todos nuestros proyectos son únicos y personalizados para nuestros usuarios. Proporcionamos el diseño y la materialización de mapas virtuales hechos “a medida” del espacio de un negocio, complejo o recinto. En estos mapas se resaltarán con marcadores especializados los puntos de interés que los clientes de nuestros usuarios y su empresa consideren necesarios.</p>
            <p>Una vez realizados los planos, implementaremos el software necesario para que nuestros usuarios puedan prestar un servicio óptimo de orientación y geolocalización a sus clientes; proporcionándoles un sistema de rutas y guiado, sencillo, intuitivo y rápido, con el que se puedan dirigir hacia el punto deseado minimizando los riesgos de pérdida o falta de visualización de sus servicios y maximizando el cumplimiento de sus horarios.</p>
            <p>Todo esto se desarrollará a través de un enlace, del escaneo de un código QR o la descarga de las aplicaciones en las distintas plataformas disponibles para móviles (Apple Store y Play Store).</p>
        </div>
        <div class="planPersonalizado__info_img">
            <img src="{{asset('img/icons/plan_personalizado/mapa.svg')}}" alt="plan_personalizadoMapa">
            <img src="{{asset('img/icons/plan_personalizado/escaneoQR.svg')}}" alt="plan_personalizadoEscaneo">
            <img src="{{asset('img/icons/plan_personalizado/guiado_interactivo.svg')}}" alt="plan_personalizadoGuia">
        </div>
    </div>
 </section>

 <!--BANNER: DEMO-->
 <section class="demo">
    <div class="demo__info">
        <h1>Pídenos una demo</h1>
        <div class="demo__info_form">
            <form method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="info_name_person_company">
                    <label class="fade-label">Nombre de particular o empresa*</label>
                    <input type="text" name="name_person/company_demo" required>
                </div>
                <div class="info">
                    <label class="fade-label">Teléfono*</label>
                    <input type="text" name="company_name_telDemo" required>
                </div>
                <div class="info">
                    <label class="fade-label">Email*</label>
                    <input type="email" name="email_demo" required>
                </div>
                <div class="info_consultation">
                    <label class="fade-label">Descripción e información sobre el proyecto: *</label>
                    <div class="textarea">
                        <textarea name="message_demo" rows="20" cols="50" required></textarea>
                    </div>
                </div>
                <div class= "send_documents">
                    <label for="documento">Adjuntar documento:</label>
                    <input type="file" id="documento" name="documento" accept=".pdf,.doc,.docx,.txt">
                </div>
                <div class="botonEnviar">
                    <button type="submit" name="botonEnviar_demo">Enviar proyecto</button>
                </div>
            </form>
        </div>
    </div>


 </section>
@endsection