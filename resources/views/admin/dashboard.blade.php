@extends('admin.layouts.base')

@section('contents')
@php $user = Auth::user(); @endphp

@if ($restaurant !== null)
   @include('admin.restaurants.create')

   {{-- <a href="{{route('admin.restaurants.edit')}}"></a> --}}
@endif


{{-- @include('admin.restaurants.edit') --}}

@endsection
