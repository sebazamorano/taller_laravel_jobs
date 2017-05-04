<?php

use Illuminate\Database\Seeder;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tipo::create([
            'nombre' => 'Part-Time',
            'descripcion' => ''
        ]);
        \App\Tipo::create([
            'nombre' => 'Full-time',
            'descripcion' => ''
        ]);
        \App\Tipo::create([
            'nombre' => 'FreeLance',
            'descripcion' => ''
        ]);
    }
}
