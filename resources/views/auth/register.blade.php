@extends('guests.layouts.base')

@section('contents')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card  mb-5">
                    <div class="card-header"><strong>Registrati!</strong></div>

                    <div class="card-body">
                        <form id="formCreate" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="mb-4 row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">* Indirizzo Mail
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" required
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">* Password
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" required minlength="8"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4 row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">* Conferma password
                                </label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">
                                    <div id="errorDiv2" style="display: none; color: red;">Le password non corrispondono.</div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">* Nome attività</label>
                                <div class="col-md-6">
                                    <input type="text" maxlength="100" required class="form-control @error('activity_name') is-invalid @enderror"
                                        name="activity_name">
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">* Descrizione</label>
                                <div class="col-md-6">
                                    <input type="text" maxlength="100" required class="form-control @error('description') is-invalid @enderror"
                                        name="description">
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="formFile" class="col-md-4 col-form-label text-md-right">* Carica Immagine</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="file" id="formFile" name="restaurant_image">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">* Indirizzo</label>
                                <div class="col-md-6">
                                    <input type="text" required
                                        class="form-control @error('address') is-invalid @enderror" name="address">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label class="col-md-4 col-form-label text-md-right">* Partita Iva</label>
                                <div class="col-md-6">
                                    <input type="text" id="Vat" pattern="[0-9]{11}" required class="form-control @error('partita_iva') is-invalid @enderror"
                                        name="partita_iva">
                                    @error('partita_iva')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div id="errorDiv3" style="display: none; color: red;">La partita iva deve essere composta da minimo 11 caratteri.</div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-4">
                                <label class="form-label d-flex justify-content-end  col-md-4 col-form-label text-md-right">* Categoria</label>
                                <div class="mb-4 d-flex w-50 col-md-6">
                                    <div>
                                        @foreach ($categories as $category)
                                            <div> 
                                                <input id="category_id{{$category->id}}" class="@error($category->title) is-invalid @enderror category-checkbox"
                                                    name="category_id[]" type="checkbox"  value="{{ $category->id }}">
                                                <label for="category">
                                                
                                                    {{ $category->title }}
                                                </label>
                                            </div>
                                        @endforeach
                                        @error('category_id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row mb-0 text-center">
                                    <div class="col-md-6 w-100">
                                        <button id="submit-btn" type="submit" class="btn btn-primary">
                                            {{ __('Registrati') }}
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div id="errorDiv" style="display: none; color: red;">Seleziona almeno una categoria</div>
                        <p class="my-4"><b>* Campo obbligatorio</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('submit-btn').addEventListener('click', function(e) {
            let checkboxes = document.getElementsByClassName('category-checkbox');
            let isChecked = false;
            let password = document.getElementById('password').value
            let passwordConfirm = document.getElementById('password-confirm').value
            let Vat = document.getElementById('Vat').value

            for (let i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    isChecked = true;
                    break;
                }
            }

            if (!isChecked) {
                e.preventDefault(); // Blocca l'invio del form
                const errorDiv = document.getElementById('errorDiv');
                errorDiv.style.display = 'block'; // Mostra il messaggio di errore
            }
            if (password !== passwordConfirm ){
                e.preventDefault(); // Blocca l'invio del form
                const errorDiv2 = document.getElementById('errorDiv2');
                errorDiv2.style.display = 'block'; // Mostra il messaggio di errore
            }
            if (Vat.length !== 11 || isNaN(Vat)) {
                e.preventDefault(); // Blocca l'invio del form
                const errorDiv3 = document.getElementById('errorDiv3');
                errorDiv3.style.display = 'block'; // Mostra il messaggio di errore
}
        });

    </script>
@endsection

<style>
    
</style>