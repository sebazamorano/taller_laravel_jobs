<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveles';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function trabajos()
    {
        return $this->hasMany(Trabajo::class, 'level_id', 'id');
    }
}
