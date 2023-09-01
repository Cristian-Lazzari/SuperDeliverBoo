@extends('admin.layouts.base')

@section('contents')

    

    <table>
       
        <tr>
            <th>NOME</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>AVAILABLE</th>
            
        </tr>
            
       
            <tr>
                
                <td>{{$dish->name}}</td>
                <td>{{$dish->description}}</td>
                <td>{{$dish->price}}</td>
                <td>{{$dish->available}}</td>
                
                <td><a class="btn btn-primary me-3" href="{{ route('admin.dishes.edit', $dish) }}">Edit</a></td>

            </tr>
        
    </table>
    

@endsection