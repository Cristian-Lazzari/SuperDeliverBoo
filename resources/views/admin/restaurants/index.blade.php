@extends('admin.layouts.base')

@section('contents')

        
        @foreach ($restaurants as $restaurant)
            {{$restaurant->activity_name}}    
        @endforeach


@endsection
    
   

