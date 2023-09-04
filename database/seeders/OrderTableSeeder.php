<?php

namespace Database\Seeders;

use App\Models\Order;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { {


            for ($i = 0; $i < 50; $i++) {

                $order = new Order;

                $order->user_id = 1;
                $order->name = $faker->firstName();
                $order->surname = $faker->lastName();
                $order->phone =  $faker->phoneNumber();
                $order->address = $faker->streetAddress();
                $order->status =  $faker->boolean();
                $order->total_price = $faker->randomFloat(2, 5, 25);
                $order->time = $faker->time();

                $order->save();
            }
        }
    }
}
