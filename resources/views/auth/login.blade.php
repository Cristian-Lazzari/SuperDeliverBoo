@extends('guests.layouts.base')

@section('contents')  
    <div style="display:flex; justify-content:center; align-items: center; width:100%; height:100%; margin-top:45px;">
        <form method="post" action="{{ route('guests.home') }}" style="width: 70%; display:flex; flex-direction:column; ">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    aria-describedby="emailHelp"
                    name="email"
                    required
                    autofocus
                    autocomplete="username"
                    value="{{ old('email') }}"
                >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    required
                    autocomplete="current-password"
                >
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember"  name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>

            <a href="{{ route('password.request') }}" style="display:block">
                Forgot your password?
            </a>

            <div style="display: flex; justify-content:center;margin-top:20px">
               <button type="submit" class="btn btn-warning me-2">Login</button> 
            </div>
            
        </form>
    </div>
@endsection
