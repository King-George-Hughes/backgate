<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>BackGate</title>
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    {{-- <link
      href=".{{ asset('assets2/vendor/fontawesome-free/css/all.min.css') }}"
      rel="stylesheet"
      type="text/css"
    /> --}}
    <link href="{{ asset('assets2/css/sb-admin-2.min.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.css') }}"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
  </head>

  <body class="myBody w-100" id="page-top">
    <section class="container-fluid p-sm-5 text-white">
      <div class="row">
        <div class="col-md-3">
          <h5 class="text-muted">OVERVIEW</h5>
          <div class="d-block pl-3">
            <a
              href="/home"
              class="text-decoration-none d-block my-3 {{ request()->is('home') ? '' : 'text-muted' }}"
              ><i class="fas fa-home"></i> HOME</a
            >
            <a href="mailto:Danielababio279@gmail.com" class="text-decoration-none text-muted d-block my-3"
              ><i class="fas fa-globe"></i> SUPPORT</a
            >
            <a
              href="/add_cash"
              class="text-decoration-none d-block my-3 {{ request()->is('add_cash') ? '' : 'text-muted' }}"
              ><i class="fas fa-money-bill-alt"></i> ADD BALANCE</a
            >
            <a
              href="/t&c"
              class="text-decoration-none d-block my-3 {{ request()->is('t&c') ? '' : 'text-muted' }}"
              ><i class="fas fa-book-open"></i> ADD TERMS & CONDITIONS</a
            >
            <a class="text-decoration-none text-muted d-block my-3" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="fas fa-long-arrow-alt-right"></i> {{ __('LOGOUT') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

          </div>
          <h5 class="text-muted mt-4">BANK LOGS</h5>
          <div class="d-block pl-3">
            <a href="#" class="text-decoration-none text-muted d-block my-3"
              ><i class="fas fa-warehouse"></i> US BANKS</a
            >
            <a href="#" class="text-decoration-none text-muted d-block my-3"
              ><i class="fas fa-warehouse"></i> UK BANKS</a
            >
          </div>
          <h5 class="text-muted mt-4">OTHERS</h5>
          <div class="d-block pl-3">
            <a
              href="/dumps&pins"
              class="text-decoration-none d-block my-3 {{ request()->is('dumps&pins') ? '' : 'text-muted' }}"
              ><i class="fas fa-warehouse"></i> DUMPS + PINS</a
            >
            <a
              href="/cashapp"
              class="text-decoration-none d-block my-3 {{ request()->is('cashapp') ? '' : 'text-muted' }}"
              ><i class="fas fa-warehouse"></i> CASHAPP</a
            >
            <a href="/paypal" class="text-decoration-none d-block my-3 {{ request()->is('paypal') ? '' : 'text-muted' }}"
              ><i class="fas fa-building"></i> PAYPAL</a
            >
            <a href="/dashboard" class="text-decoration-none d-block my-3 {{ request()->is('admin') ? '' : 'text-muted' }}"
              ><i class="fas fa-building"></i> ADMIN</a
            >
          </div>
        </div>
        <div class="col-md-9 mb-5">
          {{ $slot }}
        </div>
      </div>
    </section>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="../assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets2/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets2/js/demo/datatables-demo.js') }}"></script>
  </body>
</html>
