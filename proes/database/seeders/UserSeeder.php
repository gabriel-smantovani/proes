<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'professor@professor.com'],
            [
                'name' => 'Professor',
                'password' => bcrypt('12345678'),
                'tipo' => 'professor'
            ]
        );
    }
}
