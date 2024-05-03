<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fechaNacimiento = Carbon::now()->subYears(rand(18, 60));

        return [
            //
            'name' => $this->faker->name(),
            'fecha_nacimento' => $fechaNacimiento->format('Y-m-d'),
        ];
    }
}
