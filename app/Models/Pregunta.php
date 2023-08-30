<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    
    public function alternativas()
    {
        return $this->hasMany(Alternativa::class,'pregunta_id');
    }

}
