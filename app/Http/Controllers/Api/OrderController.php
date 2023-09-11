<?php

namespace App\Http\Controllers\Api;

use App\Models\Dish;
use App\Models\Order;
use App\Models\DishOrder;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    // private $validations = [ // to do
    //     'name'          => 'required|string|min:5|max:50',
    //     'surname'          => 'required|string|min:5|max:50',
    //     'phone'          => 'required|string|min:5|max:50',
    //     'email'         => 'required|email|min:5|max:255',
    //     'message'       => 'required|string',
    //     'newsletter'    => 'required|boolean',
    // ];

    public function store(Request $request)
    {


        // validare i dati del Order
        // $validator = Validator::make($data, $this->validations);

        // if ($validator->fails()) {
        //    return response()->json([
        //        'success'   => false,
        //        'errors'    => $validator->errors(),
        //    ]);
        //} 

        // salvare i dati del Order nel database
        $total_price = 0;
        $data = $request->all();

        $cart = $data['arr_dish'];
        //calcolare il totale dell'ordine
        foreach ($cart as $elem) {
            $dish = Dish::where('id', $elem['id'])->first();
            $total_price += $dish->price * $elem['quantity_item'];
        }

        $newOrder = new Order();
        $newOrder->user_id       = $data['restaurant_id'];
        $newOrder->restaurant_id = $data['restaurant_id'];
        $newOrder->name          = $data['name'];
        $newOrder->surname       = $data['surname'];
        $newOrder->phone         = $data['phone'];
        $newOrder->address       = $data['address'];
        $newOrder->time          = $data['time'];
        $newOrder->total_price   = $total_price;
        $newOrder->status        = 1;
        $newOrder->save();

        foreach ($cart as $elem) {
            $item_order = new DishOrder();
            $item_order->order_id = $newOrder->id;
            $item_order->dish_id = $elem['id'];
            $item_order->quantity_item = $elem['quantity'];
            $item_order->save();
        }

        // ritornare un valore di successo al frontend
        return response()->json([
            'success' => true,
        ]);

        // return response()->json($request->all()); // solo per debuggare
    }
}
