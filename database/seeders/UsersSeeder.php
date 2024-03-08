<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'password' => bcrypt('admin'),
                'level' => 'administrator',
            ],
            [
                'fullname' => 'Blogger',
                'username' => 'blogger',
                'password' => bcrypt('blogger'),
                'level' => 'blogger',
            ],
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
