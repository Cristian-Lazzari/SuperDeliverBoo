<section style="border: 2px solid #1e75f7; border-radius: 20px 20px 20px 20px; padding: 20px; background-color:azure">
    <header>
        <h2>
            Profile Information
        </h2>

        <p style="color: salmon">
            Modifica il nome dell'Attività e/o l'indirizzo Email
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('admin.profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        {{-- Name
        <div>
            <label for="name">Name</label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required />
            @error('name')
                {{ $message }}
            @enderror
        </div> --}}






        {{-- Email --}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Indirizzo Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email', $user->email) }}" required>
            @error('email')
                {{ $message }}
            @enderror 



            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        

        {{-- <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required />
            @error('email')
                {{ $message }}
            @enderror --}}
        {{-- </div> --}}



        {{-- Name --}}
        <div class="mb-3">
            <label for="name" class="form-label">Nome dell'Attività</label>
            <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required>
            @error('name')
                {{ $message }}
            @enderror 

        {{-- Button Save --}}
        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary" style="margin-top: 40px">Submit</button>


            @if (session('status') === 'profile-updated')
                <p>Salvato</p>
            @endif
        </div>
    </form>
</section>
