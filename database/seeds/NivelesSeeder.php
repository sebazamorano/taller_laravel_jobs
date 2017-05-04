<?php

use Illuminate\Database\Seeder;

class NivelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Nivel::create([
            'nombre' => 'Practicante',
            'descripcion' => ''
        ]);
        \App\Nivel::create([
            'nombre' => 'Junior',
            'descripcion' => ''
        ]);
        \App\Nivel::create([
            'nombre' => 'Senior',
            'descripcion' => ''
        ]);
        \App\Nivel::create([
            'nombre' => 'Dios',
            'descripcion' => ''
        ]);

    }
}
