<section>
    <header>
        <h2>
            Update Password
        </h2>

        <p>
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="current_password">Current Password</label>
              <input id="current_password" class="form-control is-valid"  placeholder="Current Password"  name="current_password" type="password" required>
                @error('current_password')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-4 mb-3">
              <label for="password">New Password</label>
              <input id="password" class="form-control is-valid" placeholder="New Password"  name="current_password" type="password" required>
              <div class="valid-feedback">
                Accettiamo solo bestemmie!
              </div>
                @error('current_password')
                    {{ $message }}
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" class="form-control is-validc"   name="password_confirmation" type="password" required>
                @error('password_confirmation')
                    {{ $message }}
                @enderror
            </div>

        </div>
          
        
        <div class="flex items-center gap-4">
            <button class="btn btn-primary" type="submit">Save</button>


            @if (session('status') === 'password-updated')
                <p>Saved.</p>
            @endif
        </div>
    </form>
</section>
