<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExamenPostulante extends Model
{
    protected $fillable=['postulante_id', 'examen_id', 'fecha_hora', 'tiempo_rendido', 'totalincorrectas', 'nota', 'estado'];
    use HasFactory;
    public function alternativasMarcadas()
    {
        return $this->hasMany(AlternativaMarcada::class,'examen_postulante_id');
    }
    public function postulante(): BelongsTo
    {
        return $this->belongsTo(Postulante::class, 'postulante_id');
    }
}
