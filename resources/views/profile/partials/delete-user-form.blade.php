<section class="space-y-6" style="border: 2px solid red; border-radius: 20px 20px 20px 20px; padding: 20px; background-color:azure">
    <header>
        <h2>
            Delete Account
        </h2>

        <p style="color: salmon">
            Una volta eliminato il tuo account, tutte le sue risorse e i suoi dati verranno eliminati definitivamente. Prima di eliminare il tuo account, scarica tutti i dati o le informazioni che desideri conservare
        </p>
    </header>

    <form method="post" action="{{ route('admin.profile.destroy') }}" >
        @csrf
        @method('delete')

        <div class="col-md-4 mb-3" style="margin-left: -16px">
            <label for="password_delete">Password</label>
            <input id="password_delete" name="password" type="password" class="form-control is-valids" required>
            @error('password')
                {{ $message }}
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button class="btn btn-danger" type="submit">Elimina Definitivamente</button>
        </div>
    </form>
</section>
