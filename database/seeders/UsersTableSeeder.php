<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = [
            [
                'name'      => 'Daniele',
                'email'     => 'daniele@gmail.com',
                'password'  => Hash::make('danidani'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
