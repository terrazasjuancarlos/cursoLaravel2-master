<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker= faker->create();
        $nc = $this->faker->randomnumbre(8);
       //$nombre = $this->faker->
       // $sexo = $this->faker->
        //$edad = $this->faker->
        return [
            //
        ];
    }
}
