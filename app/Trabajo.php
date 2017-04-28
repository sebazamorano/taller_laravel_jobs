<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $table = "trabajos";

    protected $fillable = [
        'titulo',
        'descripcion',
        'beneficios',
        'ambiente_trabajo',
        'sueldo',
        'email',
        'ciudad',
        'pais',
        'user_id',
        'level_id',
        'tipo_id',
    ];


    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'level_id', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'tipo_id', 'id');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categorias_trabajos', 'trabajo_id');
    }

    public function user ()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
