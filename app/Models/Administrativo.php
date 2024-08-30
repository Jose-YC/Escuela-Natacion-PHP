<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrativo
 *
 * @property $idAdministrativo
 * @property $descripcionCargo
 * @property $cargo
 * @property $idEmpleado
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Administrativo extends Model
{
    use HasFactory;


    protected $table = 'administrativos';
    protected $primaryKey = 'idAdministrativo';
    protected $fillable = ['descripcionCargo', 'cargo', 'idEmpleado'];
    static $rules = [
        'idAdministrativo' => 'required',
        'descripcionCargo' => 'required',
        'cargo' => 'required',
        'idEmpleado' => 'required ',
    ];

    static $messages = [
        'idAdministrativo.required' => 'El idAdministrativo es requerido',
        'descripcionCargo.required' => 'La descripcionCargo es requerido',
        'cargo.required' => 'El cargo es requerido',
        'idEmpleado.required' => 'El idEmpleado es requerido',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne(Empleado::class, 'idEmpleado', 'idEmpleado');
    }
}
