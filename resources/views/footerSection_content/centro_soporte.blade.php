@extends('layout.layout')

@section('title', 'Centro_soporte')

@section('content')
<section class="background_supportCenter">
    <div class="banner_section">
        <div class="banner_section__info">
            <h3>Centro de soporte</h3>
            <p><span><img src="{{asset('img/icons/peligro.png')}}" alt="peligro"></span>   Por favor, si eres usuario de NeverLost, no olvides iniciar sesión con tu cuenta. <span class="enlaceLogin"><a href="/login">Hazlo aquí</a></span></p>
        </div>
        <div class="banner_section__info">
            <form method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="nameLastname">
                    <div class="nameLastname__info">
                        <label class="fade-label">Nombre*</label>
                        <input type="text" name="name_supportCenter" required>
                    </div>
                    <div class="nameLastname__info">
                        <label class="fade-label">Apellidos</label>
                        <input type="text" name="lastname_supportCenter">
                    </div>
                </div>
                <div class="info">
                    <label class="fade-label">Empresa</label>
                    <input type="text" name="company_name_supportCenter">
                </div>
                <div class="info">
                    <label class="fade-label">Email*</label>
                    <input type="email" name="email_supportCenter" required>
                </div>
                <div class="info_consultation">
                    <label class="fade-label">Consulta - mensaje*</label>
                    <div class="textarea">
                        <textarea name="consultation_supportCenter" rows="20" cols="50" required></textarea>
                    </div>
                </div>
                <div class="botonEnviar">
                    <button type="submit" name="botonEnviar_supportCenter">Enviar consulta</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection