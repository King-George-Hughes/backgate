<x-layout>
    <section class="container text-white">
        <div class="showcase-content text-center">
          <h1 class="display-1">BACKGATE</h1>
          <h5 class="text-muted small my-3">PREMIUM BANK LOGS AND DUMPS</h5>
          @if(Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-outline-light mx-2">HOME</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-light mx-2">LOGIN</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-light mx-2">REGISTER</a>
                @endif
            @endauth
          @endif
        </div>
    </section>
</x-layout>