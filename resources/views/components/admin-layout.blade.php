<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.104.2" />
    <title>Dashboard Template · Bootstrap v5.2</title>

    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.2/examples/dashboard/"
    />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet" />
  </head>
  <body>
    <header
      class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"
    >
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/dashboard"
        >BackGate Admin</a
      >
      <button
        class="navbar-toggler position-absolute d-md-none collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <input
        class="form-control form-control-dark w-100 rounded-0 border-0"
        type="search"
        placeholder="Search"
        aria-label="Search"
      />
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          {{-- <a class="nav-link px-3" href="#">Sign out</a> --}}

          <a class="nav-link px-3" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="fas fa-long-arrow-alt-right"></i> {{ __('Sign out') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav
          id="sidebarMenu"
          class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
        >
          <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                  <i class="fas fa-cog"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('manage-post') ? 'active' : '' }}" href="/manage-post">
                  <i class="fas fa-blog"></i>
                  Manage Posts
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('manage-bank_type') ? 'active' : '' }}" href="/manage-bank_type">
                  <i class="fas fa-warehouse"></i>
                  Manage Bank Types
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('manage-bank') ? 'active' : '' }}" href="/manage-bank">
                  <i class="fas fa-warehouse"></i>
                  Manage Bank
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('manage-d&p') ? 'active' : '' }}" href="/manage-d&p">
                  <i class="fas fa-piggy-bank"></i>
                  Manage Dumps & Pins
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('manage-cashapp') ? 'active' : '' }}" href="/manage-cashapp">
                  <i class="fas fa-money-bill"></i>
                  Manage Cashapp
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('manage-paypal') ? 'active' : '' }}" href="/manage-paypal">
                  <i class="fas fa-cash-register"></i>
                  Manage Paypal
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('manage-users') ? 'active' : '' }}" href="/manage-users">
                  <i class="fas fa-users"></i>
                  Manage Users
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          {{ $slot }}
        </main>
      </div>
    </div>

    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
      integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('dashboard.js') }}"></script>
  </body>
</html>
