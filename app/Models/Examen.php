<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    public function preguntas()
    {
        return $this->hasMany(Pregunta::class,'examen_id');
    }
    public function cargo(){
        
    }

}
