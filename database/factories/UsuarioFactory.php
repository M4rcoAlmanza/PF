<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name(),
            'correo'=> $this->faker->safeEmail(),
            'telefono'=> $this->faker->phoneNumber(),
            'nacimiento'=> $this->faker->dateTimeBetween('-80 years', '-10 years'),
        ];
    }
}
