<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Specialist::factory(50)->create();

        // \App\Models\User::->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Admin::create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Doctor::create([
        //     'name' => 'Doctor Joys Sinc',
        //     'email' => 'joys@gmail.com',
        //     'password' => Hash::make('admin123')
        // ]);

        // \App\Models\Doctor::create([
        //     'name' => 'Kala Abir ',
        //     'email' => 'kala@gmail.com',
        //     'password' => Hash::make('admin123')
        // ]);

    }
}
