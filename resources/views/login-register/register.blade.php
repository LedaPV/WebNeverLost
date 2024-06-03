@extends('layout.layout')

@section('title', 'Register')

@section('content')
<section class="register">
    <div class="bannerRegister">
        <img src="{{asset('img/logo/logo_userNeverlost-white.svg')}}" alt="userNeverLost">
        <div class="datos">
            <h2>Registro</h2>
            <p>Para registrarte, por favor rellena los siguientes campos</p>
            
            <div class= "enlace_empresas">
                <p>** Si eres una empresa / compañía, pincha aqui</p>
                <div class= "boton_empresas">
                    <img src="{{asset('img/icons/oficina.png')}}" alt="empresa">
                    <a href="/company_register">Empresas</a>
                </div>
            </div>
            
            
            {{-- Formulario cuya acción la realiza el controlador y la define el método. En este caso es un método POST, porque enviammos información --}}
            <form action="{{route('creacion_usuario')}}" method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="data">
                    <label class="fade-label">Nombre*</label>
                    <input type="text" name="name" required>
                </div>
                <div class="data">
                    <label class="fade-label">Apellidos*</label>
                    <input type="text" name="lastname" required>
                </div>
                <div class="data">
                    <label class="fade-label">Correo Electrónico*</label>
                    <input type="email" name="email" required>
                </div>
                <div class="data">
                    <label class="fade-label">Contraseña*</label>
                    <input type="password" name="password" required>
                </div>
                <div class="data">
                    <label class="fade-label">Confirmar contraseña*</label>
                    <input type="password" name="confirm_password" required>
                </div>
                <div class="botonCrearCuenta">
                    <button class="crearCuenta" type="submit">Crear cuenta</button>
                </div>
            </form>
        </div>
        <p>Si ya eres usuario de NeverLost, <span class="enlace_login"><a href="/login">Identifícate</a></span></p>
    </div>
</section>
@endsection