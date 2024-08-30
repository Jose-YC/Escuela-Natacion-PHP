<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Hora_Disponible__Horarios extends Model
{
    use HasFactory;

    protected $table = 'hora_disponible__horarios';
    protected $primaryKey = 'idHoraDisponible__Horario';
    public $timestamps = false;
    protected $fillable = ['idHoraDisponible', 'idHorario'];
    /**
     * Get all of the comments for the Hora_Disponible__Horarios
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany(Horario::class, 'idHorario', 'idHorario');
    }
    public function horas_disponibles()
    {
        return $this->hasMany(Horas__disponible::class, 'idHoraDisponible', 'idHoraDisponible');
    }
    public function horarios_horas_disponibles()
    {
        return $this->hasManyThrough(Horas__disponible::class,Horario::class, 'idHorario','idHoraDisponible', 'idHoraDisponible', 'idHorario');
    }

}
