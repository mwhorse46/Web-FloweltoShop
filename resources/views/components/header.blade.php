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
          @foreach($headercategories as $category)
            <a class="dropdown-item" href="{{ route('category.show', ['category' => $category->id]) }}">
              {{ $category->name }}
            </a>
          @endforeach
        </div>
      </li>

      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->username }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if (Auth::user()->is_admin)
              <a class="dropdown-item" href="{{ route('flower.create') }}">Add Flower</a>
              <a class="dropdown-item" href="{{ route('category.index') }}">Manage Categories</a>
            @else
              <a class="dropdown-item" href="{{ route('transaction.cart') }}">My Cart</a>
              <a class="dropdown-item" href="{{ route('transaction.index') }}">Transaction History</a>
            @endif
            <a class="dropdown-item" href="{{ route('user.password') }}">Change Password</a>
            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
          </div>
        </li>

      @else
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.login') }}">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.register') }}">Register</a>
        </li>
      @endauth
    </ul>

    <span class="navbar-text ml-2">
      {{ date("D, d M Y") }}
    </span>
  </div>
</nav>
