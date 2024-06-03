<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Suggestions extends Model{

    // A qué tabla corresponde
    protected $table = 'suggestions';

    // Campos rellenables en la tabla de la DB
    protected $fillable =[
        'suggestions_views',
        'fk_idUser',
    ];   
    
    //Creación de la relación entre las tablas users y suggestions 
    public function relation_UserSuggestions(){
        return $this->belongsTo(User::class, 'fk_idUser', 'id');
    }
}