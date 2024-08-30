<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoderado_Alummos extends Model
{
    use HasFactory;
    protected $table = 'apoderado__alummos';
    protected $primaryKey = 'idApoderado__Alumno';
    protected $fillable = ['idApoderado', 'idAlumno'];

    public function apoderado()
    {
        return $this->belongsTo('App\Models\Apoderado', 'idApoderado', 'idApoderado');
    }
    public function alumno()
    {
        return $this->belongsTo('App\Models\Alumno', 'idAlumno', 'idAlumno');
    }
    

}
