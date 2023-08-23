@extends('layouts.app')
@section('content')

<div class="container my-3 ">
    <a href="{{ route('login') }}" class="btn btn-primary" > Accedi </a>
    <a href="{{ route('register') }}" class="btn btn-primary" > Registrati </a>
</div>
@endsection