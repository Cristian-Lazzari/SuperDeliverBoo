@extends('admin.layouts.base')

@section('contents')
{{$restaurant->id}}
{{$restaurant->activity_name}}
{{$restaurant->address}}
{{$restaurant->description}}
{{$restaurant->partita_iva}}
<a href="{{route('admin.dishes.index')}}">Piatti index</a>



{{-- @include('admin.restaurants.edit') --}}

@endsection


