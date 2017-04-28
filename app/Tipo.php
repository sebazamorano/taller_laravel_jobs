<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function trabajos()
    {
        return $this->hasMany(Trabajo::class, 'tipo_id', 'id');
    }
}
