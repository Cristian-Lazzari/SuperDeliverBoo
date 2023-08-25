<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard(){
        $user = User::all();
        $restaurant = Restaurant::all();
        return view('admin.dashboard', compact('restaurant', 'user'));
    }
}

// if(isset('restaurant')){
    
//     return view ('admin.restaurants.edit');
// }else{

//     return view ('admin.restaurants.create');
// }