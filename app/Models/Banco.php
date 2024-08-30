<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Banco
 *
 * @property $idBanco
 * @property $nombrebanco
 * @property $NroCuenta
 * @property $NroOperacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Banco extends Model
{

    static $rules = [
		
		'nombrebanco' => 'required',
		'NroCuenta' => 'required',
		'NroOperacion' => 'required',
    ];

    protected $perPage = 20;
    protected $primaryKey = 'idBanco';


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombrebanco','NroCuenta','NroOperacion'];



}
