<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller{

    //Función para poder registrar todos los contactos establecidos a trvés de la página

    public function Registration_contact(Request $request){
        // Validamos que cumple con los estándares de la Base de Datos, aquellos datos que introduce el usuario
        $request->validate([
            'contact_name'=>'required|string|max:45',
            'contact_telephone'=>'required|string|max:13',
            'contact_email'=>'required|string|max:255',
            'message'=>'required|string|max:1000',
        ]);

        // Creación de este registro
        $contact = Contacts::create([
            'contact_name'=>$request->contact_name,
            'contact_telephone'=>$request->contact_telephone,
            'contact_email'=>$request->contact_email,
            'message'=>$request->message,
        ]);

        // Guardamos los datos en la variable creada $contact, en la base de datos
        $contact->save();

        // Redirección del usuario dentro de la web
        return redirect()->route('Home');
    }
    
}
