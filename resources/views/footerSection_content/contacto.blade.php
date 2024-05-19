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
                <img src="{{asset('img/social_media/x_icono32.png')}}" alt="x">
                <img src="{{asset('img/social_media/linkedin_icono32.png')}}" alt="linkedin">
                <img src="{{asset('img/social_media/instagram_icono32.png')}}" alt="instagram">
                <img src="{{asset('img/social_media/youtube_icono32.png')}}" alt="youtube">
                <p>-----------------</p>
            </div>


        </div>
        <div class="banner_section__info">
            <form method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="info_name_person_company">
                    <label class="fade-label">Nombre de particular o empresa*</label>
                    <input type="text" name="name_person/company_contact" required>
                </div>
                <div class="info">
                    <label class="fade-label">Teléfono*</label>
                    <input type="text" name="company_name_contact" required>
                </div>
                <div class="info">
                    <label class="fade-label">Email*</label>
                    <input type="email" name="email_contact" required>
                </div>
                <div class="info_consultation">
                    <label class="fade-label">Mensaje*</label>
                    <div class="textarea">
                        <textarea name="message_contact" rows="20" cols="50" required></textarea>
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