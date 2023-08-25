@extends('admin.layouts.base')

@section('contents')
@php $user = Auth::user(); @endphp



    <h1>Prosegui la tua registrazione</h1>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form method="POST" action="{{ route('admin.restaurants.store') }}" novalidate>
        @csrf

        <div class="mb-3">
            <input type="text" id="user_id" name="user_id" value="{{$user->id}}" style="">
            <div>
                
            </div>
        </div>

        <div class="mb-3">
            <label for="activity_name" class="form-label">activity_name</label>
            <input
                type="text"
                class="form-control @error('activity_name') is-invalid @enderror"
                id="activity_name"
                name="activity_name"
                value="{{ old('activity_name') }}"
            >
            @error('activity_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="partita_iva" class="form-label">partita_iva</label>
            <input
                type="text"
                class="form-control @error('partita_iva') is-invalid @enderror"
                id="partita_iva"
                name="partita_iva"
                value="{{ old('partita_iva') }}"
            >
            @error('partita_iva')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">address</label>
            <input
                type="text"
                class="form-control @error('address') is-invalid @enderror"
                id="address"
                name="address"
                value="{{ old('address') }}"
            >
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea
            class="form-control @error('description') is-invalid @enderror"
            id="description"
            rows="10"
            name="description">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <button class="btn btn-primary">Save</button>
    </form>
    
    @endsection
    
    {{-- 
            <div class="mb-3">
                <label for="url_image" class="form-label">Image url</label>
                <input
                    type="url"
                    class="form-control @error('url_image') is-invalid @enderror"
                    id="url_image"
                    name="url_image"
                    value="{{ old('url_image') }}"
                >
                @error('url_image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}

{{-- 
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select
                class="form-select @error('category_id') is-invalid @enderror"
                id="category"
                name="category_id"
            >
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}