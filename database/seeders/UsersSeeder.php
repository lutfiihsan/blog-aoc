<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'fullname' => 'Administrator',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'level' => 'administrator',
            ],
            [
                'fullname' => 'Blogger',
                'username' => 'blogger',
                'password' => Hash::make('blogger'),
                'level' => 'blogger',
            ],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
