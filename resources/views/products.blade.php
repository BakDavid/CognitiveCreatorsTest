@extends('layouts.app')

@section('content')
<head>
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
</head>
<body>
    <img id="car" src="{{ asset('images/winter-car-wallpaper.jpg') }}"/>
    <div id="deal-text">
        <h1 id="main-text">Best Offers on Winter Tires</h1>
        <p id="main-paragraph">Tires for cars, trucks, vans and agricultural vehicles</p>
    </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
          <a class="navbar-brand" href="{{ route('products') }}"><img style="height:50px;margin-left:20px;" src="{{ asset('images/cognitive-creators-logo.png') }}"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <form class="form-inline my-2 my-lg-0">
                <input id="search-input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button id="search-button"  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>

          </li>
        </ul>
      </div>

      <div class="dropdown">
          <a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My account
          </a>
          <div id="navbarDropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </div>

      <div class="dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Favourites
          </a>
      </div>

      <div class="dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img id="cart" src="{{ asset('images/cart.png') }}"/>Cart
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
      </div>
    </nav>

    <div id="promotion-text">
        <div>
            <h1 id="brand-text">Pirelli</h1>
            <p id="season-text">Winter</p>
        </div>

        <p id="category-text">P Zero</p>

        <h1 id="old-price">475.00 LEI</h1>
        <h1 id="new-price">475.00 LEI</h1>
        <button id="find-out-button"  class="btn btn-outline-success">FIND OUT MORE</button>
    </div>

</body>
@endsection
