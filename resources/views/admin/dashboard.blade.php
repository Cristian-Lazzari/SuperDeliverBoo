@extends('admin.layouts.base')

@section('contents')
{{$restaurant->id}}
{{$restaurant->activity_name}}
{{$restaurant->address}}
{{$restaurant->description}}
{{$restaurant->partita_iva}}
<a href="{{route('admin.dishes.index')}}">Piatti index</a>
<a href="{{route('admin.dishes.create')}}">Piatti create</a>
<a href="{{route('admin.orders.index')}}">Ordini Index</a>




{{-- @include('admin.restaurants.edit') --}}

@endsection


