<?php

namespace Database\Seeders;

use App\Models\ControllerDevice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControllerDevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        ControllerDevice::factory()->count(200)->create();
    }
}
