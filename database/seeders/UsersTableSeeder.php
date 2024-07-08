<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate dummy data using Faker
        $users = [];
        $users[] = [
            'name' => 'I.E.U. Juboraj Naofel',
            'email' =>  'juborajnaofel@petdad.juborajnaofel.xyz',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Default password 'password'
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
        for ($i = 0; $i < 10; $i++) { // Generate 10 users, you can adjust this number
            $users[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Default password 'password'
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert data into the database
        DB::table('users')->insert($users);
    }
}
