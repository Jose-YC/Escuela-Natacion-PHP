<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\File;

/**
 * Class Recibo
 *
 * @property $idRecibo
 * @property $idInscripcion
 * @property $fecha
 * @property $idBanco
 * @property $created_at
 * @property $updated_at
 *
 * @property Banco $banco
 * @property Inscripcion $inscripcion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recibo extends Model
{

    static $rules = [

		'idInscripcion' => 'required',

		'idBanco' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'idRecibo';
    protected $fillable = ['idInscripcion','estado','idBanco'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function banco()
    {
        return $this->hasOne('App\Models\Banco', 'idBanco', 'idBanco');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inscripcion()
    {
        return $this->hasOne('App\Models\Inscripcion', 'idInscripcion', 'idInscripcion');
    }
    //relacion polimorfica con el modelo filable
    public function archivo()
    {
        return $this->morphOne(Filable::class,'filable');
    }

}
