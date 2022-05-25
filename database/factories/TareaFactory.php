<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "idUsu"    => $this->faker->numberBetween($min = 1, $max = 3),
            "titulo"    => $this->faker->sentence(),
            "texto"    => $this->faker->text(),
            "fecha"    => $this->faker->date(),
            "completa"    => $this->faker->boolean,
        ];
    }
}
