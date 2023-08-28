<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $categories = Category::all();

        return view('auth.register', compact('categories'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'name' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
            'partita_iva' => ['required', 'digits:11'],
            'category_id' => ['required', 'array', 'min:1']
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $restaurantData = [
            'name' => $request->name,
            'address' => $request->address,
            'partita_iva' => $request->partita_iva,
            'user_id' => $user->id,
        ];

        $slug = Restaurant::generateSlug($request->name);

        $restaurantData['slug'] = $slug;

        if ($request->hasFile('restaurant_image')) {

            $path = Storage::disk('public')->put('restaurant_images', $request->restaurant_image);

            $restaurantData['restaurant_image'] = $path;
        }

        $newRestaurant = Restaurant::create($restaurantData);

        if ($newRestaurant) {
            $user->restaurant_id = $newRestaurant->id;
            $user->save();
        }

        $newRestaurant->types()->sync($request->input('category_id'));

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
