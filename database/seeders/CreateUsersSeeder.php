<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@localhost',
                'type' => 1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'manager',
                'email' => 'manager@localhost',
                'type' => 2,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'user',
                'email' => 'user@localhost',
                'type' => 0,
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
