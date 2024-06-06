<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CompanyController extends Controller{

    // Función para crear una nueva compañía/empresa, usuaria de la aplicación

    public function Create_company(Request $request){
        // Validamos que los datos que ha introducido el usuario en el formulario tienen las caracteristicas de los campos de DB
        $request->validate([
            'company' => 'required|string|max:100',
            'legal_address' => 'required|string|max:255',
            'NIF' => 'required|string|max:9',
            'commercial_activity' => 'required|string|max:45',
            'telephone' => 'string|max:13',
            'name' => 'required|string|max:45',
            'job_occupation' => 'required|string|max:45',
            'email' => 'required|string|max:255',
            'password' => 'required|confirmed|string|max:255',
        ]);
        

        $contra = $request->password;
        $confirContra = $request->password_confirmation;

        if($contra == $confirContra){
            // Creación de la nueva compañía o empresa; cuando se crea una empresa también se crea un usuario
            $company = Company::create([
                'company' =>$request->company,
                'legal_address' =>$request->legal_address,
                'NIF' =>$request->NIF,
                'commercial_activity' =>$request->commercial_activity,
                'telephone' =>$request->telephone,
            ]);

            $user = User::create([
                'name' =>$request->name,
                'job_ocuppation' =>$request->job_occupation,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'fk_idCompany' => $company->id,
            ]);
            // Guardamos los datos de la variable creada $user y $company en la DB
            $user->save();
            $company->save();

            // Asociación de las tablas user y company para establecer su relación
            $user->relationCompany()->associate($company);

        }
       // Redirección del usuario dentro de la web, una vez creada su cuenta
        return redirect()->route('Home');
    }

}