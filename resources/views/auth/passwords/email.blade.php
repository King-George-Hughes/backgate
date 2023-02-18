
<x-layout>
    <section class="container text-white">
        <div class="showcase-content text-center">
          <h1 class="display-6">BackGate Premium Bank logs</h1>
          <h5 class="text-muted small my-3 w-75 mx-auto">
            Reset Password
          </h5>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}" class="form mt-4 mx-auto">
            @csrf
           
            <input type="email" 
            name="email" 
            placeholder="Email" 
            value="{{ old('email') }}"
            class="form-control mt-3 @error('email') is-invalid @enderror" required
            required autocomplete="email" autofocus
            />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="btn btn-outline-primary mt-4">
                {{ __('Send Password Reset Link') }}
            </button>

          </form>
        </div>
    </section>
</x-layout>
