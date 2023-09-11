{{-- @extends('admin.layouts.base')

@section('contents')
    {{$restaurant->id}}
    <h1>{{$restaurant->activity_name}}</h1>
    {{$restaurant->address}} <br>
    {{$restaurant->description}} <br>
    {{$restaurant->partita_iva}} <br>
    <a class="btn-primary btn" href="{{route('admin.dishes.index')}}">Piatti index</a>
    <a class="btn-danger btn" href="{{route('admin.dishes.create')}}">Piatti create</a>
    <a class="btn-warning btn" href="{{route('admin.orders.index')}}">Ordini Index</a>

@endsection --}}


{{-- <div class="row row-cols-3 p-4">
        
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Disponibilita</th>
            </tr>
        </thead>
        @foreach ($dishes as $dish)
            <tbody>

                <tr>
                    <th>{{$dish->name}}</th>
                    <th>{{$dish->price}}</th>
                    <td>{{$dish->avaible}}</td>

                    <td>
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{ route('restaurant.show', ['dish' => $dish->id]) }}">Details</a>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-warning" href="{{ route('dishes.edit', ['dish' => $dish->id]) }}">Edit</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('dishes.destroy', ['dish' => $dish->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>

            </tbody>
        @endforeach
    </table>
</div> --}}
    




{{-- @include('admin.restaurants.edit') --}}

{{-- @endsection --}}


@extends('admin.layouts.base')

@section('contents')

<div class="card">

    {{$restaurant->activity_name}}
</div>
{{-- <h1>{{$restaurant->id}}</h1> --}}

    {{-- <div class="bg">
        <div class="container">

            <header>
                <div><h1 style="text-align:center; margin-top:20px">{{$restaurant->activity_name}}</h1></div>

            </header>

            <div class="jumbotron" style="width: 50%">
                <img style="width: 100%" src="https://it.ooni.com/cdn/shop/articles/Margherita-9920.jpg?crop=center&height=800&v=1644590028&width=800" alt="">
            <main>
                <div><h2>INDIRIZZO: <h3>{{$restaurant->address}}</h3> </h2></div>
                <div><h2>DESCRIZIONE: <h3>{{$restaurant->description}}</h3> </h2></div>
                <div><h2>P.IVA: <h3>{{$restaurant->partita_iva}}</h3> </h2></div>
            </main></div>
            
            
                
                
            <footer style="display:flex; justify-content:center; margin:40px; gap:1rem">
                <a class="btn-primary btn" href="{{route('admin.dishes.index')}}">Piatti index</a>
                <a class="btn-danger btn" href="{{route('admin.dishes.create')}}">Piatti create</a>
                <a class="btn-warning btn" href="{{route('admin.orders.index')}}">Ordini Index</a>
            </footer>              


        </div>
    </div> --}}
@endsection
