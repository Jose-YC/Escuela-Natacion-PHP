<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $idEmpleado
 * @property $cargo
 * @property $sueldo
 * @property $idPersona
 * @property $created_at
 * @property $updated_at
 *
 * @property Administrativo[] $administrativos
 * @property Persona $persona
 * @property Profesor[] $profesors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{

    static $rules = [
        'cargo' => 'required',
        'sueldo' => 'required',
        'idPersona' => 'required',
    ];
    static $messages = [
        'cargo.required' => 'El campo cargo es obligatorio',
        'sueldo.required' => 'El campo sueldo es obligatorio',
        'idPersona.required' => 'El campo persona es obligatorio',

    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'idEmpleado';
    protected $fillable = ['cargo', 'sueldo', 'idPersona'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administrativos()
    {
        return $this->hasMany('App\Models\Administrativo', 'idEmpleado', 'idEmpleado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne(Persona::class, 'idPersona', 'idPersona');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesors()
    {
        return $this->hasMany('App\Models\Profesor', 'idEmpleado', 'idEmpleado');
    }
}
