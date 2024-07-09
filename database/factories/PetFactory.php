<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    protected $model = Pet::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'space_id' => mt_rand(1, 20),
            'breed' => getRandomAnimal(),
            'name' => $this->faker->firstName,
            'species' => getRandomAnimal(), // Example species
            'dob' => $this->faker->date(),
            'health_state' => 'healthy',
            'color' => $this->faker->safeColorName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'vaccinated' => $this->faker->boolean,
            'description' => $this->faker->paragraph,
            'image' => null, // You can generate image URLs or paths here
            'microchipped' => $this->faker->boolean,
            'microchip_number' => $this->faker->ean13, // Example of generating a fake microchip number
            'adopted' => $this->faker->boolean,
            'adoption_date' => $this->faker->boolean ? $this->faker->date() : null,
            'neutered' => $this->faker->boolean,
            'declawed' => $this->faker->boolean,
            'tag_number' => $this->faker->ean13,
            'insurance_provider' => $this->faker->company,
        ];
    }
}
