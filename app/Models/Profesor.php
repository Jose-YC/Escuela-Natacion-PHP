<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesor
 *
 * @property $idProfesor
 * @property $idEmpleado
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesor extends Model
{


use HasFactory;

    protected $primaryKey = 'idProfesor';
    protected $fillable = ['idProfesor', 'idEmpleado', 'idPisina', 'idHoraDisponible__Horario'];

    static $rules = [
        'idProfesor' => 'required',
        'idEmpleado' => 'required',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne(Empleado::class, 'idEmpleado', 'idEmpleado');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pisina()
    {
        return $this->hasOne('App\Models\Pisina', 'idPisina', 'idPisina');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hora_disponible__horario()
    {
        return $this->hasOne(Hora_Disponible__Horarios::class, 'idHoraDisponible__Horario', 'idHoraDisponible__Horario');
    }
}
