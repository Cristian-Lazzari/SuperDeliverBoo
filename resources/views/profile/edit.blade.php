@extends('admin.layouts.base')

@section('contents')

<a class="btn btn-warning text-white me-3 fs-5" href="{{ route('admin.dashboard') }}">&larr;</a>
    <div class="my-5">
        @include('profile.partials.update-profile-information-form')
    </div>
    <div class="my-5">
        @include('profile.partials.update-password-form')
    </div>
    <div class="my-5">
        @include('profile.partials.delete-user-form')
    </div>
        
@endsection

