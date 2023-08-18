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
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3 gap-2" role="search">
                <a href="{{ route('register') }}" class="nav-link"><i class="bi-person-plus"></i> Register</a>
                <a href="{{ route('login') }}" class="nav-link"><i class="bi-lock"></i> Login</a>
              </form>
            </div>
          </div>
        </div>
      </nav>
      {{-- konten --}}
      <main class="vh-100 continer-fluid px-0">
        @yield('konten')
      </main>
</body>
</html>