<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'KevinManceau',
            'email' => 'kevin.manceau@gmail.com',
            'password' => Hash::make('KevinManceau'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'role' => 'admin',
            'avatar' => null,
        ]);
        User::create([
            'id' => 1,
            'name' => 'JeanClaude',
            'email' => 'jean@claude.fr',
            'password' => Hash::make('JeanClaude'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'role' => 'user',
            'avatar' => null,
        ]);

        User::factory(3)->create();
    }
}
