<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Ahmed Ali',
                'email' => 'ahmed@dinevo.test',
                'phone' => '01000000001',
                'role' => 'admin',
            ],
            [
                'name' => 'Mohamed Hassan',
                'email' => 'mohamed@dinevo.test',
                'phone' => '01000000002',
                'role' => 'admin',
            ],
            [
                'name' => 'Omar Khaled',
                'email' => 'omar@dinevo.test',
                'phone' => '01000000003',
                'role' => 'waiter',
            ],
            [
                'name' => 'Youssef Ahmed',
                'email' => 'youssef@dinevo.test',
                'phone' => '01000000004',
                'role' => 'waiter',
            ],
            [
                'name' => 'Mahmoud Samir',
                'email' => 'mahmoud@dinevo.test',
                'phone' => '01000000005',
                'role' => 'waiter',
            ],
            [
                'name' => 'Karim Adel',
                'email' => 'karim@dinevo.test',
                'phone' => '01000000006',
                'role' => 'cashier',
            ],
            [
                'name' => 'Amr Mostafa',
                'email' => 'amr@dinevo.test',
                'phone' => '01000000007',
                'role' => 'cashier',
            ],
            [
                'name' => 'Ali Mohamed',
                'email' => 'ali@dinevo.test',
                'phone' => '01000000008',
                'role' => 'kitchen_staff',
            ],
            [
                'name' => 'Hassan Ibrahim',
                'email' => 'hassan@dinevo.test',
                'phone' => '01000000009',
                'role' => 'kitchen_staff',
            ],
            [
                'name' => 'Tarek Nabil',
                'email' => 'tarek@dinevo.test',
                'phone' => '01000000010',
                'role' => 'kitchen_staff',
            ],
        ];

        foreach ($users as $user) {
            User::create([
                ...$user,
                'password' => Hash::make('Password123'),
            ]);
        }
    }
}