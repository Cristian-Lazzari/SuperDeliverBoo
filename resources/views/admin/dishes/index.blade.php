@extends('admin.layouts.base')

@section('contents')

    

    <table>
       
        <tr>
            <th>NOME</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>AVIABLE</th>
            
        </tr>
            
       
            <tr>
                @foreach ($dishes as $item)
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->aviable}}</td>
                
                <td><a class="btn btn-primary me-3" href="{{ route('admin.dishes.edit', '$dish') }}">Edit</a></td>

    @endforeach
            </tr>
        
    </table>
    

@endsection


