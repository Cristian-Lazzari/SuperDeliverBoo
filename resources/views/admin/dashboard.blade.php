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

    <div class="bg">
        <div class="container">
            {{-- <h1>{{$restaurant->id}}</h1> --}}

            <header>
                <div><h1 style="text-align:center; margin-top:20px; font-size:70px"><strong>{{$restaurant->activity_name}}</strong></h1></div>

            </header>

            <div class="jumbotron row" style="opacity: 0.9; background-image:url('https://www.borneylegnami.com/repo/immagini/anteprime/xl/rovere-lavorato-7_b7bcb957ea_.jpg')">
 
                <img src="https://it.ooni.com/cdn/shop/articles/Margherita-9920.jpg?crop=center&height=800&v=1644590028&width=800" alt="" class="col-6">


                <div class="col-6" style="text-align: center">
                    <div>
                        <div><h2 style="font-size: 50px; color:rgba(255, 255, 0, 0.888)"><strong>INDIRIZZO:</strong> <h3 style="font-size: 40px">{{$restaurant->address}}</h3> </h2></div>
                        <div><h2 style="font-size: 50px; color:rgba(255, 255, 0, 0.888)"><strong>DESCRIZIONE:</strong> <h3 style="font-size: 40px">{{$restaurant->description}}</h3> </h2></div>
                        <div><h2 style="font-size: 50px; color:rgba(255, 255, 0, 0.888)"><strong>P.IVA:</strong> <h3 style="font-size: 40px">{{$restaurant->partita_iva}}</h3> </h2></div>
                    </div>
                    <div style="margin-top:80px;display:flex; justify-content:center; gap:1rem">
                        <a class="btn-primary btn" href="{{route('admin.dishes.index')}}">Piatti index</a>
                        <a class="btn-danger btn" href="{{route('admin.dishes.create')}}">Piatti create</a>
                        <a class="btn-warning btn" href="{{route('admin.orders.index')}}">Ordini Index</a>
                    </div>

                </div>


            </div>
                
            <footer style="display:flex; justify-content:center; margin-top:40px; gap:1rem">

            </footer>              


        </div>
    </div>
@endsection
