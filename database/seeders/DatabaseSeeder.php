<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\OrderTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\RestaurantsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // UsersTableSeeder::class,
            // RestaurantsTableSeeder::class,
            CategoriesTableSeeder::class,
            DishesTableSeeder::class,
            OrderTableSeeder::class,
        ]);
    }
}
