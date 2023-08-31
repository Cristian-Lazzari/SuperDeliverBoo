<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {

        // $user = User::find(auth()->user()->id);
        //$restaurant = Restaurant::with('user')->where('user_id', Auth::id())->paginate(1);
        //return view('admin.dashboard', compact('restaurant', 'user'));

        $user = User::find(auth()->user()->id)->firstOrFail();

        $restaurant = $user->restaurant;

        return view('admin.dashboard', compact('user', 'restaurant'));
    }
}

// if(isset('restaurant')){
    
//     return view ('admin.restaurants.edit');
// }else{

//     return view ('admin.restaurants.create');
// }