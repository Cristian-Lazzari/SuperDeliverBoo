<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    private $validations = [
        'name'          => 'required|string|min:3|max:100',

    ];


    public function index()
    {
        $restaurants = Restaurant::with('user')->where('user_id', Auth::id())->paginate(1);

        return view('admin.restaurants.index', compact('restaurants'));
    }


    public function create()
    {
        $users       = User::all();
        $categories  = Category::all();
        return view('auth.register', compact('users', 'categories'));
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

        $newRestaurant->categories()->sync($data['categories'] ?? []);

        return redirect()->route('admin.dashboard');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $users       = User::all();
        $restaurants = Restaurant::with('user')->where('user_id', Auth::id())->paginate(1);
        return view('admin.restaurants.create', compact('users'));
    }


    public function update(Request $request, $id)
    {
        $restaurant = Restaurant::where($id)->firstOrFail();

        if (Auth::id() !== $restaurant->user_id) abort(403);

        // validare i dati del form
        $request->validate($this->validations);

        $data = $request->all();

        $restaurant->activity_name   = $data['activity_name'];
        $restaurant->address         = $data['address'];
        $restaurant->partita_iva     = $data['partita_iva'];
        $restaurant->description     = $data['description'];
        $restaurant->user_id         = $data['user_id'];
        // aggiornare i dati nel db se validi

        $restaurant->update();



        // ridirezionare su una rotta di tipo get
        return to_route('admin.restaurants.show', ['restaurant' => $restaurant]);
    }


    public function destroy($id)
    {
        //
    }
}
