<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class DomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'domicilio' => $this->faker->address,
            'numero_exterior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->streetName,
            'cp' => $this->faker->postcode,
            'ciudad' => $this->faker->city,
        ];
    }
}
