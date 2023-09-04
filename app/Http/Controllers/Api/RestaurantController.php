<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = Restaurant::with(['categories']);

        if ($request->has('category_id')) {
            // con explode da 2,4,5 diventa [2,4,5]
            $category_id = explode(',', $request->category_id);

            // category_id =[2,4,5]

            // il primo parametro whereHas è il nome del metodo di relazione tra le tabelle restaurants e categories scritta nel model restaurant.php
            $query->whereHas('categories', function ($query) use ($category_id) {
                $query->whereIn('id', $category_id);
            });
        }

        $restaurants = $query->get();

        return response()->json([
            'success' => true,
            'restaurants' => $restaurants
        ]);
    }
}
