@extends('admin.layouts.base')

@section('contents')
<h1>Edit post</h1>


<form method="POST" action="{{ route('admin.dishes.update', ['dish' => $dish]) }}" enctype="multipart/form-data" novalidate>
    @csrf
    @method('put')

    <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input
            type="text"
            class="form-control @error('name') is-invalid @enderror"
            id="name"
            name="name"
            value="{{ old('name', $dish->name) }}"
        >
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <input
            type="text"
            class="form-control @error('description') is-invalid @enderror"
            id="description"
            name="description"
            value="{{ old('description', $dish->description) }}"
        >
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">price</label>
        <input
            type="text"
            class="form-control @error('price') is-invalid @enderror"
            id="price"
            name="price"
            value="{{ old('price', $dish->price) }}"
        >
        @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb3">
        <select name="available" id="">
            <option value="0">No</option>
            <option value="1">Si</option>
        </select>
    </div>



    
  </form> 



@endsection