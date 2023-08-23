<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\DishesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
<<<<<<< HEAD
            UsersTableSeeder::class,
            DishesTableSeeder::class,
=======
            OrdersTableSeeder::class
>>>>>>> origin/orders
        ]);
    }
}
