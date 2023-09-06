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
                'title'      => 'giapponese',
            ],
            [
                'title'      => 'trattoria',
            ],
            [
                'title'      => 'gelateria',
            ],
            [
                'title'      => 'fast-food',
            ],
            [
                'title'      => 'indiano',
            ],
            [
                'title'      => 'cinese',
            ],

        ];

        foreach ($categories as $data) {
            Category::create($data);
        }
    }
}
