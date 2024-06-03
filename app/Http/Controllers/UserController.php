<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    // Función para crear un usuario

    public function Create_user(Request $request){
        // Validamos que los datos que ha introducido el usuario en el formulario tienen las caracteristicas de los campos de DB
        $request->validate([
            'name' => 'required|string|max:45',
            'lastname' => 'required|string|max:45',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        $contra = $request->password;
        $confirContra = $request->confirm_password;

        if($contra == $confirContra){
            // Creación del nuevo usuario
            $user = User::create([
                'name' => $request->name,
                'lastname' =>$request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            // Guardamos los datos de la variable creada $user en la DB
            $user->save();
        }
        // Redirección del usuario dentro de la web, una vez creada su cuenta
        return redirect()->route('Home');
    }
}