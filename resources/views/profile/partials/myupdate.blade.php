<section>
   

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.myupdate') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="mb-2">
            <label for="partita_iva">Partita Iva</label>
            <input class="form-control" type="text" name="partita_iva" id="partita_iva" autocomplete="partita_iva" value="{{old('partita_iva', $user->partita_iva)}}" required autofocus>
            @error('partita_iva')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->get('partita_iva')}}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-2">
            <label for="andress">Indirizzo</label>
            <input class="form-control" type="text" name="andress" id="andress" autocomplete="andress" value="{{old('andress', $user->andress)}}" required autofocus>
            @error('andress')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->get('andress')}}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-2">
            <label for="category">Categoria</label>
            <input class="form-control" type="text" name="category" id="category" autocomplete="category" value="{{old('category', $user->category)}}" required autofocus>
            @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->get('category')}}</strong>
            </span>
            @enderror
        </div>
        <div class="mb-2">
            <label for="description">Descrizione</label>
            <textarea class="form-control"  cols="20" rows="5" type="text" name="description" id="description" autocomplete="description" value="{{old('description', $user->description)}}" required autofocus></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->get('description')}}</strong>
            </span>
            @enderror
        </div>
        

        <div class="d-flex align-items-center gap-4">
            <button class="btn btn-primary" type="submit">Salva</button>

            @if (session('status') === 'profile-updated')
            <script>
                const show = true;
                setTimeout(() => show = false, 2000)
                const el = document.getElementById('profile-status')
                if (show) {
                    el.style.display = 'block';
                }
            </script>
            <p id='profile-status' class="fs-5 text-muted">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
