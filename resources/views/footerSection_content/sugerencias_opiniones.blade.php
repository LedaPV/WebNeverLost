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
            <form method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="info">
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
                </div>
                <div class="info_consultation">
                    <label class="fade-label">Segurencias - opiniones*</label>
                    <div class="textarea">
                        <textarea name="consultation_suggestionsViews" rows="20" cols="50" required></textarea>
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