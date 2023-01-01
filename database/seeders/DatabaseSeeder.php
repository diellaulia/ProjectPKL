<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
            ],
            [
                'nama' => 'Member',
                'email' => 'member@mail.com',
                'password' => Hash::make('password'),
            ]
        ];

        User::insert($users);
        // \App\Models\User::factory(10)->create();
    }
}
