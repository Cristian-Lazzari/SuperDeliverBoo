@extends('admin.layouts.base')

    @section('contents')
        
        @foreach ($restaurants as $restaurant)
            @if (Auth::id() === $restaurant->user->id)
                <h1>
                    {{$restaurant->activity_name}}
                </h1>

            @endif
 
                
        @endforeach


    @endsection
    
   

