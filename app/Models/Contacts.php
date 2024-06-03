<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model{

    // A qué tabla corresponde
    protected $table = 'contacts';

    // Campos rellenables en la tabla de la DB
    protected $fillable =[
        'contact_name',
        'contact_telephone',
        'contact_email',
        'message',
    ];
}