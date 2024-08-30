<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscripcion
 *
 * @property $idInscripcion
 * @property $estado
 * @property $total
 * @property $idAlumno
 * @property $idDescuento
 * @property $idPisina
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Descuento $descuento
 * @property DetalleMatricula[] $detalleMatriculas
 * @property Pisina $pisina
 * @property Recibo[] $recibos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscripcion extends Model
{

    static $rules = [
		'estado' => 'required',
		'total' => 'required',
		'idAlumno' => 'required',
		'idDescuento' => 'required',
		'idPisina' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = 'inscripcions';
    protected $primaryKey = 'idInscripcion';
    protected $fillable = ['fecha','total','idAlumno','idDescuento','idPisina'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'idAlumno', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function descuento()
    {
        return $this->hasOne('App\Models\Descuento', 'idDescuento', 'idDescuento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleMatriculas()
    {
        return $this->hasMany('App\Models\DetalleMatricula', 'idInscripcion', 'idInscripcion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pisina()
    {
        return $this->hasOne('App\Models\Pisina', 'idPisina', 'idPisina');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recibos()
    {
        return $this->hasMany('App\Models\Recibo', 'idInscripcion', 'idInscripcion');
    }


}
