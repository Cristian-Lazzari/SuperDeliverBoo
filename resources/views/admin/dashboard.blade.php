@extends('admin.layouts.base')

@section('contents')
{{$restaurant->id}}
<h1>{{$restaurant->activity_name}}</h1>
{{$restaurant->address}} <br>
{{$restaurant->description}} <br>
{{$restaurant->partita_iva}} <br>
<a class="btn-primary btn" href="{{route('admin.dishes.index')}}">Piatti index</a>
<a class="btn-danger btn" href="{{route('admin.dishes.create')}}">Piatti create</a>
<a class="btn-warning btn" href="{{route('admin.orders.index')}}">Ordini Index</a>




{{-- @include('admin.restaurants.edit') --}}

@endsection


