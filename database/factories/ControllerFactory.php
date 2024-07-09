<?php

namespace Database\Factories;

use App\Models\Controller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Controller>
 */
class ControllerFactory extends Factory
{
    protected $model = Controller::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'space_id' => mt_rand(1, 20),
            'name' => ['PETDADController', 'MAC', 'Rasberry', 'Linux'][random_int(0,3)].'_'.md5($this->faker->macAddress),
            'description' => $this->faker->paragraph,
            'is_active' => $this->faker->boolean,
        ];
    }
}
