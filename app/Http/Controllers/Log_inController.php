<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Log_inController extends Controller{

    // Función que se encarga de iniciar sesión

    public function Create_session(Request $request){
        // Validamos los datos que ha introducido el usuario en el formulario del Log in
        $credentials = $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        // Con esto, nos llega la información del usuario que coincida con ese email
        $user = User::where('email', $credentials['email'])->first();
        // Con esto, los datos del usuario los entraga en forma de array
        $data = $user->toArray();

        // Comprobamos que la contraseña sea la misma
        if($user && Hash::check($credentials['password'], $user->password)){
            // Autentificamos el usuario
            $user = Auth::user();

            // Obtenemos el id del usuario
            $idUser = $data['id'];

            // Creamos una sesión
            session()->put('IdUser', $idUser);
            // Creamos una sesión para almacenar el nombre del usario logeado
            session()->put('UserName', $data['name']);

            return redirect()->route('Home');
        } 


    }
}

