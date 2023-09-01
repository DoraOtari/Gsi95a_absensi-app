<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-icons.min.css') }}">
    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
    <style>
      .gradasi {
        background: linear-gradient(90deg, #FC466B 0%, #3F5EFB 100%);
        color: white;
        border-radius:20px;
        border: 0px;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body>
    {{-- navigasi --}}
    <nav class="navbar bg-body-white  navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i class="bi-xbox"></i> {{ config('app.name') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-start align-items-center flex-grow-1 pe-3">
                @auth
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'gradasi' : '' }}" href="{{ route('dashboard') }}">
                      <i class="bi-buildings"></i> Dashboard
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('profil') ? 'gradasi' : '' }}" href="{{ route('profil') }}">
                      <i class="bi-person"></i> Profil
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ Request::is('jabatan*') ? 'gradasi' : '' }}" href="{{ route('jabatan') }}">
                      <i class="bi-chevron-double-up"></i> Jabatan
                    </a>
                  </li>
                @endauth
              </ul>
              <div class="d-flex mt-3 gap-2" role="search">
                @auth
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm rounded-circle btn-danger">
                      <i class="bi-power"></i>
                    </button>
                  </form>
                @else
                  <a href="{{ route('register') }}" class="nav-link">
                    <i class="bi-person-plus"></i> Register
                  </a>
                  <a href="{{ route('login') }}" class="nav-link"><i class="bi-lock"></i> Login</a>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="ms-3" id="gambar_profil">
        @auth
          <img class="img-thumbnail rounded-circle" style="aspect-ratio:1/1" src="{{ asset('storage/'.Auth::user()->foto_profil) }}" width="50">
          <b class="lead">{{ Auth::user()->name }}</b>
        @endauth
      </div>
      {{-- konten --}}
      <main class="vh-100 continer-fluid px-0">
        @yield('konten')
      </main>
      {{-- script --}}
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script>
    new DataTable('#tabelku');
  </script>
</body>
</html>