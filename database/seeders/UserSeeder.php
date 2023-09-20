<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ([
            [
                $user = new User,
                $user->name = "Bagops",
                $user->email = "bagops03restasukabumi@gmail.com",
                $user->password = bcrypt('Operational03'),
                $user->level = 1,
                $user->save(),
            ],
            [
                $user = new User,
                $user->name = "Polsek",
                $user->email = "polsek@gmail.com",
                $user->password = bcrypt('12345'),
                $user->level = 2,
                $user->save(),
            ]
                
        ]);
    }
}
