<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Descuento
 *
 * @property $idDescuento
 * @property $descripciondescuento
 * @property $porcentaje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Descuento extends Model
{

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $primaryKey = 'idDescuento';
    protected $fillable = ['idDescuento','descripciondescuento','porcentaje'];

    static $rules = [

		'descripciondescuento' => 'required',
		'porcentaje' => 'required',
    ];
    static $messages = [

        'descripciondescuento.required' => 'El campo descripciondescuento es obligatorio',
        'porcentaje.required' => 'El campo porcentaje es obligatorio',
    ];

}
