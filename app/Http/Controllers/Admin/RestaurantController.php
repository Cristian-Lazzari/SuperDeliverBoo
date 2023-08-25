<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    private $validations = [
        'name'          => 'required|string|min:3|max:100',

    ];


    public function index()
    {
        //
    }


    public function create()
    {
        $users       = User::all();
        return view('admin.projects.create', compact('users') );
    }

    public function store(Request $request)
    {
        // $request->validate($this->validations);
    
        $data = $request->all();

        $newRestaurant = new Restaurant();

        
        $newRestaurant->activity_name          = $data['activity_name'];
        $newRestaurant->address         = $data['address'];
        $newRestaurant->partita_iva         = $data['partita_iva'];
        $newRestaurant->description         = $data['description'];
        $newRestaurant->user_id         = $data['user_id'];


        $newRestaurant->save();
        
        //$newRestaurant->categories()->sync($data['categories'] ?? []);
        
		return redirect()->route('admin.dashboard');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $users       = User::all();
        return view('admin.projects.create', compact('users') );
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
