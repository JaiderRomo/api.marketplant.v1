<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoIdentificacionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(ProductoSeeder::class);
    }
}
