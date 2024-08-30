<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $idAlumno
 * @property $idPersona
 * @property $created_at
 * @property $updated_at
 *
 * @property ApoderadoAlummo[] $apoderadoAlummos
 * @property Empresa[] $empresas
 * @property Grupal[] $grupals
 * @property Particular[] $particulars
 * @property Persona $persona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{

    static $rules = [
		'idPersona' => 'required',
        'tipo' => 'required',
    ];
    static $messages = [
        'idPersona.required' => 'El campo idPersona es obligatorio',
        'tipo.required' => 'El campo tipo es obligatorio',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'idAlumno';
    protected $fillable = ['idAlumno','idPersona','tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apoderadoAlummos()
    {
        return $this->hasMany('App\Models\ApoderadoAlummo', 'idAlumno', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empresas()
    {
        return $this->hasMany('App\Models\Empresa', 'idAlumno', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grupals()
    {
        return $this->hasMany('App\Models\Grupal', 'idAlumno', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function particulars()
    {
        return $this->hasMany('App\Models\Particular', 'idAlumno', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'idPersona', 'idPersona');
    }


}
