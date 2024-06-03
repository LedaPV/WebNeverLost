<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model{

    // A qué tabla corresponde
    protected $table = 'company';

    // Campos rellenables en la tabla de la DB
    protected $fillable =[
        'company',
        'legal_address',
        'NIF',
        'commercial_activity',
        'telephone',
    ];

}