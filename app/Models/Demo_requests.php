<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Demo_requests extends Model{

    // A qué tabla corresponde
    protected $table = 'demo_requests';

    // Campos rellenables en la tabla de la DB
    protected $fillable =[
        'project_description',
        'fk_idUser',
    ];   
    
    //Creación de la relación entre las tablas usuarios y demo request
    public function relation_UserDemo(){
        return $this->belongsTo(User::class, 'fk_idUser', 'id');
    }
}