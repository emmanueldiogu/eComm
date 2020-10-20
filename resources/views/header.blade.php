<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if (Session::has('user')) {
    $total = ProductController::cartItem();
  }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
        <form action="search" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 search-box w-auto" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Cart({{$total}})</span></a>
        </li>
        @if (Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              {{Session::get('user')['name']}}
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</span></a>
          </li>  
        @endif
        <!-- Dropdown -->
      </ul>
    </div>
  </div>
</nav>