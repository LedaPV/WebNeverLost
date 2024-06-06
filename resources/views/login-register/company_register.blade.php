@extends('layout.layout')

@section('title', 'Company_register')

@section('content')
<section class="register">
    <div class="bannerRegister">
        <img src="{{asset('img/logo/logo_userNeverlost-white.svg')}}" alt="userNeverLost">
        <div class="datos">
            <h2>Registro para empresas</h2>
            <p>Para registrarte como empresa, por favor rellena los siguientes campos</p>
            
            {{-- Formulario cuya acción la realiza el controlador y la define el método. En este caso es un método POST, porque enviammos información --}}
            
            <form  action="{{route('creacion_empresa')}}" method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="data">
                    <label class="fade-label">Nombre completo de la empresa*</label>
                    <input type="text" name="company" required>
                </div>
                <div class="data">
                    <label class="fade-label">Dirección legal*</label>
                    <input type="text" name="legal_address" required>
                </div>
                <div class="data">
                    <label class="fade-label">NIF*</label>
                    <input type="text" name="NIF" required>
                </div>
                <div class="data">
                    <label class="fade-label">Actividad comercial / sector empresarial*</label>
                    <input type="text" name="commercial_activity" required>
                </div>
                <div class="data">
                    <label class="fade-label">Correo electrónico de contacto*</label>
                    <input type="email" name="email" required>
                </div>
                <div class="data">
                    <label class="fade-label">Teléfono</label>
                    <input type="text" name="telephone">
                </div>
                <div class="data">
                    <label class="fade-label">Persona de contacto</label>
                    <input type="text" name="name">
                </div>
                <div class="data">
                    <label class="fade-label">Ocupación / puesto laboral de persona de contacto</label>
                    <input type="text" name="job_occupation">
                </div>
                <div class="data">
                    <label class="fade-label">Contraseña*</label>
                    <input type="password" name="password" required>
                </div>
                <div class="data">
                    <label class="fade-label">Confirmar contraseña*</label>
                    <input type="password" name="password_confirmation" required>
                </div>
                <div class="botonCrearCuenta">
                    <button class="crearCuenta" type="submit">Crear cuenta de empresa</button>
                </div>
            </form>
        </div>
        <p>Si tu empresa ya es cliente de NeverLost, <span class="enlace_login"><a href="/login">Identifícate</a></span></p>
    </div>
</section>
@endsection