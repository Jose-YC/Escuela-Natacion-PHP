<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupal extends Model
{
    use HasFactory;
    protected $table = 'grupals';
    protected $primaryKey = 'idGrupal';

    protected $fillable = ['idGrupal','idAlumno'];
    static $rules = [
        'idAlumno' => 'required'
    ];
    static $messages = [
        'idAlumno.required' => 'El campo idAlumno es obligatorio'
    ];
    public function apoderadoAlummos()
    {
        return $this->hasMany('App\Models\ApoderadoAlummo', 'idAlumno', 'idAlumno');
    }
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'idPersona', 'idPersona');
    }
}
