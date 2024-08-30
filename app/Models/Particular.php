<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    use HasFactory;
    protected $table = 'particulars';
    protected $primaryKey = 'idParticular';
    protected $fillable = ['idAlumno'];

    static $rules = [
        'idAlumno' => 'required'
    ];
    static $messages = [
        'idAlumno.required' => 'El campo idAlumno es obligatorio'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apoderadoAlummos()
    {
        return $this->hasMany('App\Models\ApoderadoAlummo', 'idAlumno', 'idAlumno');
    }
    public function persona()
    {
        return $this->hasOne(Persona::class, 'idPersona', 'idPersona');
    }
}
