<?php

namespace Database\Seeders;

use App\Models\Order;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = Order::Create([
            [
                'client_name' => 'Porco ',
                'client_surname' => 'Dio',
                'time' => '2023-08-23',
            ],
            [
                'client_name' => 'Porca ',
                'client_surname' => 'Madonna',
                'time' => '2023-08-23',
            ],

        ]);

    }
}

