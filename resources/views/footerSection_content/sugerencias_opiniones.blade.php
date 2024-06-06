@extends('layout.layout')

@section('title', 'Sugerencias_opiniones')

@section('content')
<section class="background_suggestions_views">
    <div class="banner_section">
        <div class="banner_section__info">
            <h3>Sugerencias y opiniones</h3>
            <p>¿Ha probado una de nuestras aplicaciones?, déjanos tu opinión para seguir mejorando nuestro trabajo</p>
        </div>
        <div class="banner_section__info">
            <div class="alert_users">
                <p>Para ofrecernos tu opinión, lógicamente debes haber probado una de nuestras aplicaciones o como mínimo ser usuario de contacto de NeverLost</p>
                <div class="alertUsers_subtitulo">
                    <p>Por esta razón, necesitamos asegurarnos de que pertences a la familia NeverLost, iniciando sesión con tus credenciales. Para ello, <a href="/login">pincha aquí</a></p> 
                </div>
            </div>
            <form action="{{route('registro_sugerencias')}}" method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                {{-- <div class="info">
                    <label class="fade-label">Nombre*</label>
                    <input type="text" name="name_suggestions_suggestionsViews" required>
                </div>
                <div class="info">
                    <label class="fade-label">Empresa</label>
                    <input type="text" name="company_name_suggestionsViews">
                </div>
                <div class="info">
                    <label class="fade-label">Email*</label>
                    <input type="email" name="email_suggestionsViews" required>
                </div> --}}
                <div class="info_consultation">
                    <label class="fade-label">Segurencias - opiniones*</label>
                    <div class="textarea">
                        <textarea name="suggestions_views" rows="100" cols="100" required></textarea>
                    </div>
                </div>
                <div class="botonEnviar">
                    <button type="submit" name="botonEnviar_suggestionsViews">Enviar consulta</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection