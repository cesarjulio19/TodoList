<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "email"    => $this->faker->email,
            "password" => Hash::make("12345678"),
            "nombre"   => $this->faker->firstName(),
            "apellidos"   => $this->faker->lastName,

            
           
        ];
    }
}
