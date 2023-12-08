<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Juan',
            'email' => 'juanmos@paymon.io',
            'password' => Hash::make('12345678'),
            'role_id' => '1',
        ]);
        User::create([
            'name' => 'Enrique',
            'email' => 'kike.eschess@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id' => '2',
        ]);
    }
}
