<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'  => '1',
            'name' => 'Pablo',
            'tipo_identificacion_id'=>'1',
            'identificacion'=> '123456789',
            'rol' => 'admin',
            'telefono' =>'219873349',
            'email' => 'pablo@gmail.com',
            'password' => bcrypt('123456'),
         
        ]);
        DB::table('users')->insert([
            'id'  => '2',
            'name' => 'paola',
            'tipo_identificacion_id'=>'2',
            'identificacion'=> '12345678',
            'rol' => 'admin',
            'telefono' =>'219873349',
            'email' => 'paola@gmail.com',
            'password' => bcrypt('123456'),
         
        ]);
        DB::table('users')->insert([
            'id'  => '3',
            'name' => 'Jaider',
            'tipo_identificacion_id'=>'3',
            'identificacion'=> '1234567890',
            'rol' => 'admin',
            'telefono' =>'219873349',
            'email' => 'jaider@gmail.com',
            'password' => bcrypt('123456'),
         
        ]);
        DB::table('users')->insert([
            'id'  => '4',
            'name' => 'Usuario',
            'tipo_identificacion_id'=>'2',
            'identificacion'=> '1234567890',
            'rol' => '',
            'telefono' =>'219873349',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('123456'),
         
        ]);
     
       
    }
}
