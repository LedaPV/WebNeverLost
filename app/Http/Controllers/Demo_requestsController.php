<?php

namespace App\Http\Controllers;

use App\Models\Demo_requests;
use App\Models\User;
use Illuminate\Http\Request;

class Demo_requestsController extends Controller{

    // Función para enviar la descripción de los proyectos de los usuarios y guardarlas en la BD.
    
    public function Send_projectDescription(Request $request){
        // Validamos que la información que se introduce en la descripción es válida con el registro que existe en la BD
        $request->validate([
            'project_description' => 'required|string|max:2500'
        ]);

        // Creación de una variable donde se guarde la información de la sesión creada en el Log in
        $idUser = session('IdUser');

        // Creación del registro de la descripcion del proyecto en la BD (guardamos el proyecto)
        $project_description = Demo_requests::create([
            'project_description' =>$request->project_description,
            'fk_idUser' =>$idUser,
        ]);

        return redirect()->route('Home');
    }
}