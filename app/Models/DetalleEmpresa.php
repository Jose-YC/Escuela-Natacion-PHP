<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleEmpresa
 *
 * @property $idDetalleEmpresa
 * @property $RUC
 * @property $nombreEmpresa
 * @property $razonSocial
 * @property $area
 *
 * @property Empresa[] $empresas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetalleEmpresa extends Model
{
    use HasFactory;
    protected $table='detalle__empresas';
    protected $primaryKey = 'idDetalleEmpresa';
    protected $fillable = ['idDetalleEmpresa','RUC','nombreEmpresa','razonSocial','area'];
 
    static $rules = [
		'RUC' => 'required',
		'nombreEmpresa' => 'required',
		'razonSocial' => 'required',
		'area' => 'required',
    ];
    static $messages = [
        'RUC.required' => 'El campo RUC es obligatorio',
        'nombreEmpresa.required' => 'El campo nombreEmpresa es obligatorio',
        'razonSocial.required' => 'El campo razonSocial es obligatorio',
        'area.required' => 'El campo area es obligatorio',
    ];


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empresas()
    {
        return $this->hasMany('App\Models\Empresa', 'idDetalleEmpresa', 'idDetalleEmpresa');
    }


}
