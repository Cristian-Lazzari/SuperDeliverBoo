<?php

namespace App\Http\Controllers\Api;

use App\Models\Dish;
use App\Models\Order;
use App\Models\DishOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $validations = [ // to do
        'name'          => 'required|string|min:5|max:50',
        'surname'          => 'required|string|min:5|max:50',
        'phone'          => 'required|string|min:5|max:50',
        'email'         => 'required|email|min:5|max:255',
        'message'       => 'required|string',
        'newsletter'    => 'required|boolean',
    ];

    public function store(Request $request)
    {
        $data = $request->all();

        // validare i dati del Order
        // $validator = Validator::make($data, $this->validations);

        // if ($validator->fails()) {
        //    return response()->json([
        //        'success'   => false,
        //        'errors'    => $validator->errors(),
        //    ]);
        //} 

        // salvare i dati del Order nel database
        $total = 0;
        $data = $request->all();

        $cart = $data['order'];
        //calcolare il totale dell'ordine
        foreach ($cart as $elem) {
            $dish = Dish::where('id', $elem['id'])->first();
            $total += $dish->price * $elem['quantity'];
        }

        $data['total_price'] = $total;

        $newOrder = new Order();
        $newOrder->user_id          = $data['user_id'];
        $newOrder->name          = $data['name'];
        $newOrder->surname          = $data['surname'];
        $newOrder->phone          = $data['phone'];
        $newOrder->address         = $data['address'];
        $newOrder->status          = $data['status'];
        $newOrder->total_price          = $data['total_price'];
        $newOrder->time       = $data['time'];
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
