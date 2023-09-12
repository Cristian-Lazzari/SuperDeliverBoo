

@extends('admin.layouts.base')

@section('contents')
<div class="card">

    @foreach ($restaurant as $item)
        <div>
            {{$item->activity_name}}
        </div>
        @foreach ($item->categories as $item)
            <h2>{{$item->title}}</h2>
        @endforeach
        <div class="category">

        </div>
    @endforeach
    <a class="m-2 btn-primary btn" href="{{route('admin.dishes.index')}}">Piatti index</a>
    <a class="m-2 btn-danger btn" href="{{route('admin.dishes.create')}}">Piatti create</a>
    <a class="m-2 btn-warning btn" href="{{route('admin.orders.index')}}">Ordini Index</a>
</div>

    {{-- <div class="bg">
        <div class="container">

            <header>
                <div><h1 style="text-align:center;color:rgba(255, 187, 0, 0.938); margin-top:20px; font-size:70px"><strong>{{$restaurant->activity_name}}</strong></h1></div>

            </header>

            <div class="jumbotron" style="width: 50%">
                <img style="width: 100%" src="https://it.ooni.com/cdn/shop/articles/Margherita-9920.jpg?crop=center&height=800&v=1644590028&width=800" alt="">
            <main>
                <div><h2>INDIRIZZO: <h3>{{$restaurant->address}}</h3> </h2></div>
                <div><h2>DESCRIZIONE: <h3>{{$restaurant->description}}</h3> </h2></div>
                <div><h2>P.IVA: <h3>{{$restaurant->partita_iva}}</h3> </h2></div>
            </main></div>
            
            
                
                
            <footer style="display:flex; justify-content:center; margin:40px; gap:1rem">
                
            </footer>              


        </div>
    </div> --}}
@endsection
<style>
</style>
