<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::create([
            'name' => 'Repaldi Handi Saputra',
            'email' => 'repaldi@unja.ac.id',
            'email_verified_at'  => now(),
            'role' => 'superadmin',
            'phone' => '6281313263264',
            'bio' => 'Belajar dan akan terus belajar',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Akun Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at'  => now(),
            'role' => 'admin',
            'phone' => '6285640899224',
            'bio' => 'flutter dev',
            'password' => Hash::make('123456'),
        ]);
    }
}
