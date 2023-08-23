<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $default_user_value = [
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'email_verified_at' =>  now(),
        ];

        User::create(array_merge([
            'name' => 'developer',
            'email' => 'repaldi@unja.ac.id',
            'role' => 'superadmin',
            'phone' => '081313263264',
            'bio' => 'Hallo, Saya Repaldi Handi Saputra saat ini saya sedang mengikuti FIC 7 Bersama Code With Bahri',
        ], $default_user_value));



        // User::create(array_merge([
        //     'username' => 'admin',
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        // ], $default_user_value));
    }
}
