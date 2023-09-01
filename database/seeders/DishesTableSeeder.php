<?php

namespace Database\Seeders;

use App\Models\Dish;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DishesTableSeeder extends Seeder
{
    public function run(Faker $faker)
    { {


            for ($i = 0; $i < 50; $i++) {

                $dish = new Dish;

                //$dish->restaurant_id = 2;
                //$dish->user_id = $dish->restaurant_id;
                $dish->name = $faker->firstName();
                // $dish->image = 'https://picsum.photos/id/' . rand(1, 1080) . '/500/350';
                $dish->description = $faker->paragraph(rand(2, 10), true);
                $dish->price = $faker->randomFloat(2, 5, 25);
                $dish->available = $faker->boolean();

                $dish->save();
            }
        }
    }
}
