@extends('admin.layouts.base')

@section('contents')


@if (Auth::id() === $restaurants->user->id)
   @include('admin.restaurants.create')

   {{-- <a href="{{route('admin.restaurants.edit')}}"></a> --}}
@endif


{{-- @include('admin.restaurants.edit') --}}

@endsection

