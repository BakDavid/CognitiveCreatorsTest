@extends('layouts.app')

@section('content')
<head>
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
</head>
<body>
    <div id="page-container">
        <div id="content-wrap">
            <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
                <a class="navbar-brand" href="{{ route('products') }}"><img id="company-img" src="{{ asset('images/cognitive-creators-logo.png') }}"/></a>


            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="GET">
                      @if($search != null || $search != '')
                        <input id="search_input" name="search_input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="{{$search}}">
                      @else
                        <input id="search_input" name="search_input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      @endif

                      <button id="search-button"  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
              </li>
            </ul>

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

                  <table class="table table-striped table-bordered dropdown-item">
                      <thead class="thead-dark">
                          <tr>
                              <th>Product name</th>
                              <th>Quantity</th>
                          </tr>
                      </thead>
                      @foreach($mycart as $m)
                          <tr>
                              <td>{{$m->category . ' ' . $m->brand}}</td>
                              <td align="center">{{$m->quantity}}</td>
                          </tr>
                      @endforeach
                  </table>
                  <div class="dropdown-divider"></div>
                  <a id="checkout-button" class="dropdown-item" href="{{ route('cart')}}">Checkout</a>
              </div>
          </div>
        </nav>

        <div class="cart-mycontainer">

        </div>

    </div>

        <footer id="footer-company">
            <p>@ 2019 COGNITIVE CREATORS</p>
        </footer>
    </div>
</body>
@endsection
