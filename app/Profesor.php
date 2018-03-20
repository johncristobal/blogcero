<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    protected $fillable = ['matricula', 'grado','fecha','firmaelec','id_usuario','clinica','status'];
    
    public $timestamps = false;    
}
