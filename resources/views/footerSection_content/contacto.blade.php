@extends('layout.layout')

@section('title', 'Contacto')

@section('content')
<section class="background_contact">
    <div class="banner_section">
        <div class="banner_section__info">
            <h3>Contacto</h3>
            <p>Llámanos, estaremos encantados de atenderte</p>
            <p>Tfno. 952 35 91 69</p>
            <div class= "redes">
                <p>-----------------</p>
                <a href="https://www.linkedin.com/in/never-lost-geo-app/ "><img  class="_linkedin" id="linkedin" alt="linkedin"></a>
                <a href="https://x.com/NeverLostGeoAPP"><img src="{{asset('img/social_media/x_icono32.png')}}" class="_x" id="x" alt="x"></a>
                <a href="https://www.instagram.com/neverlostgeoapp/"><img src="{{asset('img/social_media/instagram_icono32.png')}}" class="_instagram" id="instagram" alt="instagram"></a>
                <a href="https://www.youtube.com/channel/UCog3vv0wQl5Cn6CPoF2SOUQ"><img src="{{asset('img/social_media/youtube_icono32.png')}}" class="_youtube" id="youtube" alt="youtube"></a>
                <p>-----------------</p>
            </div>


        </div>
        <div class="banner_section__info">
            <form action="{{route('registro_contacto')}}" method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="info_name_person_company">
                    <label class="fade-label">Nombre de particular o empresa*</label>
                    <input type="text" name="contact_name" required>
                </div>
                <div class="info">
                    <label class="fade-label">Teléfono*</label>
                    <input type="text" name="contact_telephone" required>
                </div>
                <div class="info">
                    <label class="fade-label">Email*</label>
                    <input type="email" name="contact_email" required>
                </div>
                <div class="info_consultation">
                    <label class="fade-label">Mensaje*</label>
                    <div class="textarea">
                        <textarea name="message" rows="100" cols="100" required></textarea>
                    </div>
                </div>
                <div class="botonEnviar">
                    <button type="submit" name="botonEnviar_contact">Enviar mensaje</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection