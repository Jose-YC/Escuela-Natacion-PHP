<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Apoderado
 *
 * @property $idApoderado
 * @property $nombre
 * @property $apellido
 * @property $dniApoderado
 * @property $tipo
 * @property $especifique
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property ApoderadoAlummo[] $apoderadoAlummos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Apoderado extends Model
{


    protected $perPage = 20;
    protected $primaryKey = 'idApoderado';
    static $rules = [
		'nombre' => 'required',
		'apellido' => 'required',
		'dniApoderado' => 'required',
		'tipo' => 'required',
		'telefono' => 'required',
    ];
    protected $table = 'apoderados';
    protected $fillable = ['nombre','apellido','dniApoderado','tipo','especifique','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apoderadoAlummos()
    {
        return $this->hasMany('App\Models\ApoderadoAlummo', 'idApoderado', 'idApoderado');
    }


}
