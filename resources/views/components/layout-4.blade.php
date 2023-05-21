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
    @vite('resources/js/admin-4.js')
   {{--  --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" integrity="sha512-RIG2KoKRs0GLkvl0goS0cdkTgQ3mOiF/jupXuBsMvyB3ITFpTJLnBu59eE+0R39bxDQKo2dsatA5CwHeIKVFcw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   {{--  --}}

</head>

<style>
  * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.bodyClass {
  width: 100%;
  min-height: 100vh;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.myBorder {
  border-radius: 5px;
}

.myBody {
  width: 100%;
  min-height: 100vh;
  background: #000;
  /* display: flex;
align-items: center;
justify-content: center; */
}

.right-side2 {
  max-width: 1100px;
  border-radius: 10px;
  background: linear-gradient(135deg, #222528, #33373a);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
}

.right-side3 {
  background: linear-gradient(135deg, #222528, #33373a);
}

.right-side {
  max-width: 1100px;
  border-radius: 10px;
  background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.4));
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
}

.form {
  max-width: 400px;
} /*# sourceMappingURL=main.css.map */

</style>

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

        {{--  --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net/2.1.1/jquery.dataTables.min.js" integrity="sha512-CKwcR6t3iAghHw93W7LcmVlSRCoGXiYyjITGKrFyDFqWHt6LIJ3j5f1dSjvL+OJbvG0KvPgP/zBEOikHUIu+3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs4/3.2.2/dataTables.bootstrap4.min.js" integrity="sha512-zjnVNy8zmH0JujmJgrADeEjpVIrafOQm2iQSbKk5dAiUBa18xYI2035PpojcvHKLKgDHPUdA3FoxneTC/RooGw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/js/sb-admin-2.min.js" integrity="sha512-COtY6/Rv4GyQdDShOyay/0YI4ePJ7QeKwtJIOCQ3RNE32WOPI4IYxq6Iz5JWcQpnylt/20KBvqEROZTEj/Hopw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{--  --}}
    
        <script>
          // Call the dataTables jQuery plugin
          $(document).ready(function() {
            $('#dataTable').DataTable();
          });
    
        </script>
  </body>
</html>
