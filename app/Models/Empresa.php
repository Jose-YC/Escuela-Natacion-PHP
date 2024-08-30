<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $primaryKey = 'idEmpresa';
    protected $fillable = ['idEmpresa','descuento','idAlumno','idDetalleEmpresa'];

    static $rules = [
        'descuento' => 'required',
        'idAlumno' => 'required',
        'idDetalleEmpresa' => 'required'
    ];
    static $messages = [
        'descuento.required' => 'El campo descuento es obligatorio',
        'idAlumno.required' => 'El campo idAlumno es obligatorio',
        'idDetalleEmpresa.required' => 'El campo idDetalleEmpresa es obligatorio'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleEmpresa()
    {
        return $this->hasOne('App\Models\DetalleEmpresa', 'idDetalleEmpresa', 'idDetalleEmpresa');
    }
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'idAlumno', 'idAlumno');
    }
    

}
