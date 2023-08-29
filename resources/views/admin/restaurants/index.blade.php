@extends('admin.layouts.base')

@section('contents')
    @php $user = Auth::user(); @endphp
        
        @foreach ($restaurants as $restaurant)
            {{$restaurant->activity_name}}    
        @endforeach


@endsection
    
   

