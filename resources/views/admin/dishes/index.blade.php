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
                @foreach ($dishes as $item)
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>
                <td>
                    @if($item->available) 
                    Disponibile 

                    @endif

                    @if(!$item->available) 
                    Non Disponibile 
                    
                    @endif
                </td>
                
                <td><a class="btn btn-primary me-3" href="{{ route('admin.dishes.edit', $item) }}">Edit</a></td>
                <td>
                    <form method="POST" action="{{ route('admin.dishes.changeState', $item) }}">
                        @csrf
                        @method('put')
                        <button>Disponibilità</button>
                        
                    </form>
                </td>
    @endforeach
            </tr>
        
    </table>
    

@endsection

