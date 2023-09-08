<section style="border: 2px solid #FFCA2C; border-radius: 20px 20px 20px 20px; padding: 20px; background-color:azure">
    <header>
        <h2>
            Update Password
        </h2>

        <p style="color: salmon">
            La Password deve contenere almeno 8 caratteri.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="current_password">Password Attuale</label>
              <input id="password" class="form-control is-valids"  placeholder="Password Attuale"  name="current_password" type="password" required >
                @error('current_password')
                    {{ $message }}
                @enderror
            </div>
                
            <div class="col-md-4 mb-3">
              <label for="password">Nuova Password</label>
              <input id="currentPassword" class="form-control is-valids" placeholder="Nuova Password"  name="current_password" type="password" required>
                @error('current_password')
                    {{ $message }}
                @enderror
                <i class="bi bi-eye-slash" id="togglePassword"></i>
            </div>
            <div class="col-md-4 mb-3">
                <label for="password_confirmation">Conferma Password</label>
                <input id="password_confirmation" class="form-control is-valids"   name="password_confirmation" type="password" required>
                @error('password_confirmation')
                    {{ $message }}
                @enderror
            </div>

        </div>
          
        
        <div class="flex items-center gap-4">
            <button class="btn btn-warning" type="submit">Modifica</button>


            @if (session('status') === 'password-updated')
                <p>Salvata</p>
            @endif
        </div>
    </form>
</section>



<script>
const togglePassword = document.querySelector('#togglePassword');
const currentPassword = document.querySelector('#currentPassword'); // Modifica l'ID in "currentPassword"

togglePassword.addEventListener('click', () => {
    // Toggle the type attribute using getAttribute() method
    const type = currentPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    currentPassword.setAttribute('type', type);

    // Toggle the eye and bi-eye icon
    togglePassword.classList.toggle('bi-eye');
    togglePassword.classList.toggle('bi-eye-slash');
});

</script>
