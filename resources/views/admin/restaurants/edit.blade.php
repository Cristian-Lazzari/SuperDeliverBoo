@extends('admin.layouts.base')

@section('contents')

    <h1>Edit post</h1>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form method="POST" action="{{ route('admin.restaurants.update', ['restaurant' => $restaurant]) }}" novalidate>
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="activity_name" class="form-label">Nome Attività</label>
            <input
                type="text"
                class="form-control @error('activity_name') is-invalid @enderror"
                id="activity_name"
                name="activity_name"
                value="{{ old('activity_name', $post->activity_name) }}"
            >
            @error('activity_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select
                class="form-select @error('category_id') is-invalid @enderror"
                id="category"
                name="category_id"
            >
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        @if (old('category_id', $post->category->id) == $category->id) selected @endif
                    >{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
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
                name="description">{{ old('description', $post->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Aggiorna</button>
    </form>

@endsection


{{-- per le immagini --}}

{{-- <div class="mb-3">
    <label for="image" class="form-label">Image url</label>
    <input
        type="url"
        class="form-control @error('image') is-invalid @enderror"
        id="image"
        name="image"
        value="{{ old('image', $post->image) }}"
    >
    @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div> --}}