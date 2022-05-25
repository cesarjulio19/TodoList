<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class EtiquetaTableSeeder extends Seeder
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
       DB::table("etiqueta")->insert([
        "etiqueta" => $faker->word,
        "color" => $faker->hexcolor,
       ]) ;
    }
}
