<?php

namespace Database\Seeders;

use App\Models\VaccineLog;
use Illuminate\Database\Seeder;

class VaccineLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        VaccineLog::factory()->count(20)->create();
    }
}
