@extends('layout.layout')

@section('title', 'Recover_password')

@section('content')
<section>
    <div class="login">
        <img src="{{asset('img/logo/logo_userNeverlost.svg')}}" alt="userNeverLost">
        <div class="credenciales">
            <h2>Cambio de contraseña</h2>
            <p>Para cambiar o recuperar tu contraseña, por favor introduce los siguientes datos</p>
            

            {{-- Formulario cuya acción la realiza el controlador y la define el método. En este caso es un método POST, porque enviammos información --}}
            {{-- action="{{route('')}}" --}}
            <form method="POST">
                {{-- Todos los form, deben tener un token --}}
                @csrf 
                <div class="credential_data">
                    <label class="fade-label">Correo Electrónico*</label>
                    <input type="email" name="email_recoverPassword" required>
                </div>
                <div class="credential_data">
                    <label class="fade-label">Nueva contraseña*</label>
                    <input type="password" name="new_password_recoverPassword" required>
                </div>
                <div class="credential_data">
                    <label class="fade-label">Confirmar la nueva contraseña*</label>
                    <input type="password" name="confirm_new_password_recoverPassword" required>
                </div>
                <div class="botonCentrado">
                    <button class="boton_formulario margin-bottom" type="submit">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection