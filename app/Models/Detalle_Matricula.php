<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Matricula extends Model
{
    use HasFactory;
    protected $table = 'detalle__matriculas';
    protected $primaryKey = 'idDetalleMatricula';
    protected $fillable=[
        'idInscripcion',
        'idProfesor',
        'idHoraDisponible__Horario',
    ];
    //uno a uno con inscripcion
    public function inscripcion()
    {
        return $this->belongsTo('App\Models\Inscripcion', 'idInscripcion', 'idInscripcion');
    }
    //uno a uno con profesor
    public function profesor()
    {
        return $this->belongsTo('App\Models\Profesor', 'idProfesor', 'idProfesor');
    }
    //uno a uno con horario
    public function horario()
    {
        return $this->belongsTo('App\Models\HoraDisponible__Horario', 'idHoraDisponible__Horario', 'idHoraDisponible__Horario');
    }
    //uno a uno con horas disponibles
    public function horasDisponibles()
    {
        return $this->belongsTo('App\Models\HoraDisponible', 'idHoraDisponible__Horario', 'idHoraDisponible');
    }

}
