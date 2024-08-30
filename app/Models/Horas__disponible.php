<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horas__disponible extends Model
{
    use HasFactory;
    protected $primaryKey = 'idHoraDisponible';
    public $timestamps = false;
    protected $fillable = ['horasDisponible','turno'];
    public function horarios()
    {
        return $this->belongsToMany(
            Horario::class,'hora_disponible__horarios',
            'idHoraDisponible','idHorario' );
            //clase que se relaciona la misma del modelo 
            //nombre de la tabla intermedia,
            // id de la tabla que tiene el modelo ,
            // id de la otra tabla que se relaciona
    }
}
