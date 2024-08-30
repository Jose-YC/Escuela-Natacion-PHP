<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filable extends Model
{
    use HasFactory;
    protected $table = 'filables';
    //relacion polimorfica con el modelo filable
    protected $fillable = ['url'];
    public function filable()
    {
        return $this->morphTo();
    }
}
