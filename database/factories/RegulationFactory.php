<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegulationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(2,8)),
            'type' => $this->faker->sentence(mt_rand(2,8)),
            'entity' => $this->faker->sentence(mt_rand(2,8)),
            'number' => $this->faker->sentence(mt_rand(2,8)),
            'year' => date('Y'),
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'set_date' => now(),
            'promulgated_date' => now(),
            'valid_date' => now(),
            'source' => $this->faker->sentence(mt_rand(2,8)),
            'file' => $this->faker->sentence(mt_rand(2,8)),
        ];
    }
}
