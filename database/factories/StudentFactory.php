<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function testFakeNumberGenerator()
{
    $numbers = [];

    for ($i = 0; $i < 10; $i++) {
        $numbers[] = $this->faker->randomNumber();
    }

    // Faites les assertions nécessaires ici pour vérifier les nombres générés
}
    public function definition(): array
    {

        return [
            'name' => fake()->name(),
            'address' => 'Douar ouled hlal hssain salé',
            'phone' => '0636975297'
        ];
    }
}
