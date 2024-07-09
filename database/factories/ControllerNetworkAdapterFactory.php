<?php

namespace Database\Factories;

use App\Models\ControllerNetworkAdapter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ControllerNetworkAdapter>
 */
class ControllerNetworkAdapterFactory extends Factory
{
    protected $model = ControllerNetworkAdapter::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'controller_id' => mt_rand(1, 20),
            'network_adapter_name' => $this->faker->word,
            'ip_address' => $this->faker->ipv4,
            'mac_address' => $this->faker->macAddress,
        ];
    }
}
