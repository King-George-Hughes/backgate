<x-layout>
    <section class="container text-white">
        <div class="showcase-content text-center">
          <h1 class="display-6">BackGate Premium Bank logs</h1>
          <h5 class="text-muted small my-3 w-75 mx-auto">
            Darkweb store providing Bank logs from the United States and United
            Kingdom
          </h5>
          <a class="text-decoration-none" href="{{ route('login') }}"
            ><span class="text-muted mx-1">Login</span></a
          >
          <a class="text-decoration-none" href="{{ route('register') }}"
            ><span class="text-light mx-1">Register</span></a
          >
          <br />
          <form method="POST" action="{{ route('register') }}" class="form mt-4 mx-auto">
            @csrf
            <input type="text" 
            placeholder="Username" 
            class="form-control @error('name') is-invalid @enderror" name="name" 
            value="{{ old('name') }}" required autocomplete="name" autofocus />
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="email" 
            name="email" 
            placeholder="Email" 
            value="{{ old('email') }}"
            class="form-control mt-3 @error('email') is-invalid @enderror" required
            required autocomplete="email"
            />
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input
              type="password" name="password"
              placeholder="Password..."
              class="form-control mt-3 @error('password') is-invalid @enderror" required
              autocomplete="new-password"
            />
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 

            <input type="password" 
            placeholder="Confrim Password..." 
            class="form-control mt-3" 
            name="password_confirmation" 
            required autocomplete="new-password">

            <button type="submit" class="btn btn-outline-primary mt-4">
              {{ __('Register') }}
            </button><br><br>

          </form>
        </div>
    </section>
</x-layout>