<?php

namespace App\Http\Controllers;

use App\Models\Suggestions;
use App\Models\User;
use Illuminate\Http\Request;

class SuggestionsController extends Controller{

    // Función para enviar la opinión/sugerencia del usuario y guardarla en la BD.
    
    public function Send_suggestions(Request $request){
        // Validamos que la información que se introduce en segurencias es válida con el registro que hay en la BD
        $request->validate([
            'suggestions_views' => 'required|string|max:1000'
        ]);

        // Creación de una variable donde se guarde la información de la sesión creada en el Log in
        $idUser = session('IdUser');

        // Creación del registro de la consulta en la BD (guardamos el mensaje)
        $suggestions_views = Suggestions::create([
            'suggestions_views' =>$request->suggestions_views,
            'fk_idUser' =>$idUser,
        ]);

        return redirect()->route('Home');
    }
}