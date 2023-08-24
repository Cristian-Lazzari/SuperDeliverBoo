@extends('admin.layouts.base')

@section('contents')
    <div class="my-5 mx-5">
        @include('profile.partials.update-profile-information-form')
    </div>
    <div class="my-5 mx-5">
        @include('profile.partials.update-password-form')
    </div>
    <div class="my-5 mx-5 ">
        @include('profile.partials.delete-user-form')
    </div>
        
@endsection

