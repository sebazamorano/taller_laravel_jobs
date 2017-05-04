<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nombre' => 'PHP',
            'descripcion' => ''
        ]);

        Categoria::create([
            'nombre' => 'Javascript',
            'descripcion' => ''
        ]);

        Categoria::create([
            'nombre' => 'Full-Stack',
            'descripcion' => ''
        ]);

        Categoria::create([
            'nombre' => 'Laravel',
            'descripcion' => ''
        ]);

        Categoria::create([
            'nombre' => 'Frontend',
            'descripcion' => ''
        ]);
    }
}
