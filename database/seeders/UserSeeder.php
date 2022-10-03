<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users[] = [
            "name" => "user",
            "email" => "user@example.com",
            "pasword" => "password"
        ];

        User::insert($users);
    }
}
