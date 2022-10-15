<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre'  => 'girasol',
            'categoria_id' => '2',
            'user_id' => '1',
            'descripcion' => 'linda planta de girasol',
            'precio' => '2000',
            'cantidad' => '2',
            'imagen' => '',
        ]);
        DB::table('productos')->insert([
            'nombre'  => 'cactus',
            'categoria_id' => '2',
            'user_id' => '2',
            'descripcion' => 'linda planta de cactus',
            'precio' => '1000',
            'cantidad' => '5',
            'imagen' => '',
        ]);
        DB::table('productos')->insert([
            'nombre'  => 'ruda',
            'categoria_id' => '1',
            'user_id' => '1',
            'descripcion' => 'planta medicinal de ruda',
            'precio' => '5000',
            'cantidad' => '2',
            'imagen' => '',
        ]);

    }
}
