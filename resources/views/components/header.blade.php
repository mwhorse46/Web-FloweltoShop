{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> --}}
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="{{ route("home") }}">
    {{ config('app.name', 'Laravel') }}
  </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          {{-- TODO: loop categories --}}
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manager
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            {{-- TODO --}}
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

      @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
      @endauth
    </ul>

    <span class="navbar-text ml-2">
      {{ date("D, d M Y") }}
    </span>
  </div>
</nav>
