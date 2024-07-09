<?php

namespace Database\Factories;

use App\Models\VaccineLog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VaccineLog>
 */
class VaccineLogFactory extends Factory
{
    protected $model = VaccineLog::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => mt_rand(1, 20),
            'vaccine_name' => $this->faker->word,
            'administered_at' => $this->faker->date(),
            'veterinarian' => $this->faker->name,
            'notes' => $this->faker->paragraph,
        ];
    }
}
