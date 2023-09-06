<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Dish;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{

    private $validations = [
        'activity_name' => 'required|string|max:255',
        'description' => 'required|min:3|max:1000',
        'address' => 'required|string|max:1000',
        'partita_iva' => 'required|integer|max:255',
    ];


    public function index()
    { 
        $dishes = Dish::all();

        return view('admin.dashboard', compact('dishes'));
    }


    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Dish $dish)
    {
        return view('restaurant.show', compact('dish'));        
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
  
    }


    public function destroy($id)
    {
        //
    }
}
