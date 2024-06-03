<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Technical_support extends Model{

    // A qué tabla corresponde
    protected $table = 'technical_support';

    // Campos rellenables en la tabla de la DB
    protected $fillable =[
        'consultation',
        'fk_idUser',
    ];   
    
    //Creación de la relación entre las tablas usuarios y technical support
    public function relationUser(){
        return $this->belongsTo(User::class, 'fk_idUser', 'id');
    }
}