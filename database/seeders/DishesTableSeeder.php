<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('dishes') as $dish) {
            Dish::create($dish);
        }
    }
}
