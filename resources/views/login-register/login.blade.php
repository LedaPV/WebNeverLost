@extends('layout.layout')

@section('title', 'Log_in')

@section('content')
<section>
    <div class="login">
        <img src="{{asset('img/logo/logo_userNeverlost.svg')}}" alt="userNeverLost">
        <div class="credenciales">
            <h2>Iniciar sesión</h2>
            <p>Si ya eres usuario de NeverLost, introduce tus credenciales</p>
            

            {{-- Formulario cuya acción la realiza el controlador y la define el método. En este caso es un método POST, porque enviammos información --}}
            <form action="{{route('creacion_sesion')}}" method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="credential_data">
                    <label class="fade-label">Correo Electrónico</label>
                    <input type="email" name="email" required>
                </div>
                <div class="credential_data">
                    <label class="fade-label">Contraseña</label>
                    <input type="password" name="password" required>
                </div>
                <div class="botonCentrado">
                    <button class="boton_formulario" type="submit">Iniciar sesión</button>
                </div>
            </form>
            
            <a class="olvidar_contraseña" href="/recover_password">¿Has olvidado tu contraseña?</a>
        </div>
        <p>¿No tienes cuenta?, <span class="enlace_registro"><a href="/register">Regístrate</a></span></p>
    </div>
</section>
@endsection