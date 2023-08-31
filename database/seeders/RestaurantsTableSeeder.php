<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { {


            for ($i = 0; $i < 3; $i++) {

                $restaurant = new Restaurant;


                $restaurant->user_id = 3;
                $restaurant->activity_name = 'main';

                // $restaurant->image = 'https://picsum.photos/id/' . rand(1, 1080) . '/500/350';
                $restaurant->description = $faker->paragraph(rand(2, 10), true);
                $restaurant->address = $faker->word(2);
                $restaurant->partita_iva = $faker->regexify('[0-4]{11}');

                $restaurant->save();

                // associate a random number of technologies to each restaurant

            }
        }
    }
}
