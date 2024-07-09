<?php

namespace Database\Factories;

use App\Models\ControllerDevice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControllerDevice>
 */
class ControllerDeviceFactory extends Factory
{
    protected $model = ControllerDevice::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'controller_id' => mt_rand(1, 20),
            'device_name' => getRandomMiniComponent(),
            'device_type' => $this->faker->randomElement(['wired-jack', 'bluetooth', 'usb']), // Example device types
            'device_status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
