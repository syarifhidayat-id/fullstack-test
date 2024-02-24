<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'firstname' => 'Administrator',
            'lastname' => 'Hutama',
            'username' => 'admin',
            'password' => Hash::make('Admin12345&'),
            'city' => 'Jakata Selatan',
            'state' => 'Jakarta',
            'zip' => '120043',
            'address' => 'Jalan Mangkubuono No.45',
        ]);
    }
}
