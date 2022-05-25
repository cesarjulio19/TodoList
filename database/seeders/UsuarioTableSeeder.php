<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        //
       DB::table("usuario")->insert([
        "email" => $faker->email,
        "password" => Hash::make("12345678"),
        "nombre" => $faker->firstName(),
        "apellidos" => $faker->lastName,
       ]) ;
    }
}
