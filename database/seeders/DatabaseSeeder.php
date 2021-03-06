<?php

namespace Database\Seeders;

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
        \App\Models\Usuario::factory(3)->create() ;
        \App\Models\Tarea::factory(30)->create() ;        
        \App\Models\Etiqueta::factory(10)->create() ;
        
        $this->call([
            UsuarioTableSeeder::class,
            TareaTableSeeder::class,
            EtiquetaTableSeeder::class,
            TareaEtiquetaSeeder::class,
        ]) ;
    }
}
