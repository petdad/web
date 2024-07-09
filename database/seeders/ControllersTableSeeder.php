<?php

namespace Database\Seeders;

use App\Models\Controller;
use Illuminate\Database\Seeder;

class ControllersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Controller::factory()->count(20)->create();
    }
}
