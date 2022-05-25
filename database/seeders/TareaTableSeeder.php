<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TareaTableSeeder extends Seeder
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
       DB::table("tarea")->insert([
        "idUsu" => $faker->numberBetween($min = 1, $max = 3),
        "titulo" => $faker->sentence(),
        "texto" => $faker->text(),
        "fecha" => $faker->date(),
        "completa" => $faker->boolean,
       ]) ;
    }
}
