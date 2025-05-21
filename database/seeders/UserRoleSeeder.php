<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        $users = [
            // [
            //     'name' => 'Admin User',
            //     'email' => 'admin@email.com',
            //     'role' => 'admin',
            // ],
            [
                'name' => 'Content User',
                'email' => 'content@email.com',
                'role' => 'content',
            ],
            [
                'name' => 'HR User',
                'email' => 'hr@email.com',
                'role' => 'hr',
            ],
            [
                'name' => 'Article User',
                'email' => 'article@email.com',
                'role' => 'article',
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('password'), // default password
                'role' => $user['role'],
            ]);
        }
    }
}

