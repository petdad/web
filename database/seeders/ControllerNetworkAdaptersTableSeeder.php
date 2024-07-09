<?php

namespace Database\Seeders;

use App\Models\ControllerNetworkAdapter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControllerNetworkAdaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        ControllerNetworkAdapter::factory()->count(200)->create();
    }
}
