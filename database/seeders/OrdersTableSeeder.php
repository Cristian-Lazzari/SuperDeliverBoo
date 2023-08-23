<?php

namespace Database\Seeders;

use App\Models\Order;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    
    
    
        for ($i = 0; $i < 55; $i++) {
            Order::create([
                'client_name'     => $faker->words(rand(1, 2), true),
                'client_surname'    => $faker->words(rand(1, 2), true),
                'time'  => '2023-08-23 11:11:11',
            ]);
    

        }
    }
}