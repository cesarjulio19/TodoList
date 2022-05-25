<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TareaEtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create() ;

        for($i=1; $i <= 40; $i++)
        DB::table('tarea_etiqueta')
            ->insert([
                'idTar' => $faker->numberBetween(1, 30),
                'idEtq' => $faker->numberBetween(1, 10),
            ]);
    }
}
