<?php

namespace App\Models; //nos permite reconocer esta clase como modelo desde otras clases externas.

use Illuminate\Database\Eloquent\Model; //Eloquent gestor de consultas de Laravel

class Web_Content extends Model{
    
    protected $table = 'web_content';

    protected $fillable =[
        'h1',
        'h2',
        'h3',
        'body1',
        'body2',
        'body3',
    ];
}