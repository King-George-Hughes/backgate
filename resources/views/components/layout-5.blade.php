<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        {{-- <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" /> --}}
        <title>BackGate</title>
        @vite('resources/js/admin-5.js')
    </head>
    <style>
        .scroll-to-top {
          width: 40px;
          height: 40px;
          display: flex;
          align-items: center;
          justify-content: center;
          object-fit: cover;
          float: right;
        }
    </style>
    <body class="bg-black w-100" id="page-top">
        <section class="container-fluid p-sm-5 text-white">
            <div class="row">
              <div class="col-md-3">
                <h5 class="text-muted">OVERVIEW</h5>
                <div class="d-block ps-3">
                  <a href="/home" class="text-decoration-none d-block my-3 {{ request()->is('home') ? '' : 'text-muted' }}"
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
                <div class="d-block ps-3">
                  <!--  -->
                  <ul class="list-unstyled ps-0">
                    <li class="">
                      <a
                        class="btn btn-toggle text-secondary border-0 collapsed ps-0"
                        data-bs-toggle="collapse"
                        data-bs-target="#us-bank"
                        aria-expanded="false"
                      >
                        <i class="fas fa-warehouse"></i> US BANKS
                      </a>
                      <div class="collapse bg-dark myBorder" id="us-bank">
                        <ul class="btn-toggle-nav fw-normal small py-2">
                          {{-- {{ $nav_usbank }} --}}
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6 class="fw-normal">JPMorgan Chase & Co.</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6 class="fw-normal">Bank of America Corp.</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6 class="fw-normal">Wells Fargo & Co.</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6 class="fw-normal">Chase Bank</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6 class="fw-normal">Chime Bank</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6 class="fw-normal">Citigroup Inc.</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6 class="fw-normal">
                                PNC Financial Services Inc.
                              </h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6 class="fw-normal">Truist Financial Corp.</h6></a
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <!--  -->
      
                  <!--  -->
                  <ul class="list-unstyled ps-0 my-0">
                    <li class="">
                      <a
                        class="btn btn-toggle text-secondary border-0 collapsed ps-0"
                        data-bs-toggle="collapse"
                        data-bs-target="#uk-bank"
                        aria-expanded="false"
                      >
                        <i class="fas fa-warehouse"></i> UK BANKS
                      </a>
                      <div class="collapse" id="uk-bank">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-0 small">
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6>Overview</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6>Weekly</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6>Monthly</h6></a
                            >
                          </li>
                          <li>
                            <a
                              href="#"
                              class="link-secondary d-inline-flex text-decoration-none"
                              ><h6>Annually</h6></a
                            >
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <!-- </ul> -->
                </div>
                <h5 class="text-muted mt-4">OTHERS</h5>
                <div class="d-block ps-3">
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
                  <a
                    href="/paypal"
                    class="text-decoration-none d-block my-3 {{ request()->is('paypal') ? '' : 'text-muted' }}"
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
      
            <!-- Scroll to Top Button-->
            <a
              class="scroll-to-top rounded float-right bg-secondary"
              href="#page-top"
            >
              <i class="fas fa-angle-up text-white"></i>
            </a>
          </section>

        {{-- <script src="{{ asset('assets/js/all.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script> --}}
    </body>
</html>
