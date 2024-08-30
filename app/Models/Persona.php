<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $primaryKey = 'idPersona';
    public $timestamps = false;
    protected $fillable = ['DNI', 'nombre', 'apellido', 'telefono', 'direccion', 'sexo', 'fechaNacimiento', 'idUser'];



    // public function user()
    // {
    //     return $this->belongsTo(User::class,'idUser');
    // }
    public function user()
    {
        return $this->belongsTo(User::class, 'idUser', 'id');
    }
    //relacion con empleado
    public function empleados()
    {
        return $this->hasOne(Empleado::class, 'idPersona');
    }
    public function administradores()
    {
        return $this->hasOne(Administrativo::class, 'idPersona');
    }
    public function profesors()
    {
        return $this->hasOne(Profesor::class, 'idPersona');
    }
    public function alumnos()
    {
        return $this->hasOne(Alumno::class, 'idPersona');
    }
    public static function faltantes()
    {
        return DB::select('SELECT * FROM personas as p WHERE NOT EXISTS(SELECT NULL FROM empleados as e WHERE e.idPersona = p.idPersona)');
    }
}
