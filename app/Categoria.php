<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];


    public function trabajos()
    {
        return $this->belongsToMany(Trabajo::class, 'categorias_trabajos', 'categoria_id');
    }
}
