<x-layout>
    <section class="container text-white">
        <div class="showcase-content text-center">
          <h1 class="display-6">BackGate Premium Bank logs</h1>
          <h5 class="text-muted small my-3 w-75 mx-auto">
            Darkweb store providing Bank logs from the United States and United
            Kingdom
          </h5>
          <a class="text-decoration-none" href="{{ route('login') }}"
            ><span class="text-light mx-1">Login</span></a
          >
          <a class="text-decoration-none" href="{{ route('register') }}"
            ><span class="text-muted mx-1">Register</span></a
          >
          <br />
          <form method="POST" action="{{ route('login') }}" class="form mt-4 mx-auto">
            @csrf
            <input type="email" name="email" placeholder="Email" 
            value="{{ old('email') }}" 
            class="form-control @error('email') is-invalid @enderror" required/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input
              type="password" name="password"
              placeholder="Password..."
              class="form-control mt-3 @error('password') is-invalid @enderror" required
            />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <button type="submit" class="btn btn-outline-primary mt-4">
              {{ __('Login') }}
            </button><br><br>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
          </form>
        </div>
      </section>
</x-layout>