<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pisina extends Model
{
    use HasFactory;
    protected $primaryKey = 'idPisina';
    public $timestamps = false;
    protected $fillable = ['lugar','especificacion','profundidad','ancho','alto'];
}
