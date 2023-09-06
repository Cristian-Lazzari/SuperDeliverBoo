@extends('admin.layouts.base')

@section('contents')
{{$restaurant->id}}



<div class="row row-cols-3 p-4">
        
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
</div>
    
@endsection



{{-- @include('admin.restaurants.edit') --}}

@endsection


