<?php

namespace App\Http\Controllers;

use App\Models\Technical_support;
use App\Models\User;
use Illuminate\Http\Request;

class Technical_supportController extends Controller{

    // Función para enviar la consulta del usuario y guardarla en la BD.
    
    public function Send_consultation(Request $request){
        // Validamos que la información que se introduce en consulta es válida con el registro que hay en la BD
        $request->validate([
            'consultation' => 'required|string|max:800'
        ]);

        // Creación de una variable donde se guarde la información de la sesión creada en el Log in
        $idUser = session('IdUser');

        // Creación del registro de la consulta en la BD (guardamos el mensaje)
        $consultation = Technical_support::create([
            'consultation' =>$request->consultation,
            'fk_idUser' =>$idUser,
        ]);

        return redirect()->route('Home');
    }
}