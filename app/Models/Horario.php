<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $primaryKey = 'idHorario';
    public $timestamps = false;
    protected $fillable = ['dia','turno'];

    public function horas_disponibles_horarios()
    {
        return $this->belongsToMany(
            Horas__disponible::class, 'hora_disponible__horarios',
             'idHorario', 'idHoraDisponible');
            //clase que se relaciona la misma del modelo 
            //nombre de la tabla intermedia,
            // id de la tabla que tiene el modelo ,
            // id de la otra tabla que se relaciona
    }
}
