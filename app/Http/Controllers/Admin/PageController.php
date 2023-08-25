<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard() {
        return view ('admin.restaurants.create');
    }
}

// if(isset('restaurant')){
    
//     return view ('admin.restaurants.edit');
// }else{

//     return view ('admin.restaurants.create');
// }