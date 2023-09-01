<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::where('user_id', Auth::id())->paginate(5);

        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // validare i dati del form
        // $request->validate($this->validations, $this->validation_messages);   //// TO DOOOO

        $data = $request->all();

        // salvare l'immagine nella cartella degli uploads
        // prendere il percorso dell'immagine appena salvata
        //if (isset($imagePath)) {
        //    $imagePath = Storage::put('uploads', $data['image']);
        //    $newDish->image = $imagePath;
        //}
        // dd($imagePath);


        // salvare i dati nel db se validi insieme al percorso dell'immagine
        $newDish = new Dish();
        $newDish->name         = $data['name'];
        $newDish->price   = $data['price'];
        $newDish->description     = $data['description'];
        $newDish->avaible       = $data['avaible'];
        $newDish->restaurant_id       = 1;
        $newDish->user_id       = $newDish->restaurant_id;

        $newDish->save();

        // ridirezionare su una rotta di tipo get
        return to_route('admin.dishes.index', ['dish' => $newDish]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish, Request $request)
    {
        // Trova il piatto corrispondente all'ID richiesto e al ristorantedell'utente autenticato
        $dish = User::find(auth()->user()->id)
            ->restaurant
            ->dishes
            ->find($request->route()->dish);

        // Se l'dish non esiste o non fa parte dello user autenticato, restituisci 401      Unauthorized
        if (!$dish) {
            abort(401, 'Unauthorized');
        }

        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
