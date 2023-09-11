@extends('admin.layouts.base')

@section('contents')
    <a class="btn btn-warning text-white me-3 fs-5" href="{{ route('admin.dashboard') }}">&larr;</a>
    <form method="POST" action="{{ route('admin.dishes.store') }}" enctype="multipart/form-data" novalidate>
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Nome</label>
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{--
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            <label class="input-group-text  @error('image') is-invalid @enderror" for="image">Upload</label>
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        --}}
        <div class="mb-3">
            <label for="title" class="form-label">Prezzo</label>
            <input
                type="text"
                class="form-control @error('price') is-invalid @enderror"
                id="price"
                name="price"
                value="{{ old('price') }}"
            >
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Ingredienti</label>
            <input
                type="text"
                class="form-control @error('description') is-invalid @enderror"
                id="description"
                name="description"
                value="{{ old('description') }}"
            >
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    {{--    <div class="mb-3">
            <label for="available">
                Disponibilità
            </label>
        <input type="checkbox" name="available" id="available">
        </div> --}}
        <select name="available" id="available">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
        <button class="btn btn-primary">Salva</button>
    </form>
@endsection
