<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'title'      => 'pizzeria',
            ],
            [
                'title'      => 'sushi',
            ],
            [
                'title'      => 'trattoria',
            ],
            [
                'title'      => 'gelateria',
            ],
            [
                'title'      => 'hamburgeria',
            ],
            [
                'title'      => 'fast-food',
            ],
            [
                'title'      => 'panineria',
            ],
            [
                'title'      => 'panineria',
            ],
            [
                'title'      => 'indiano',
            ],
            [
                'title'      => 'cinese',
            ],
            [
                'title'      => 'africano',
            ],


        ];

        foreach ($categories as $data) {
            Category::create($data);
        }

    }
}
