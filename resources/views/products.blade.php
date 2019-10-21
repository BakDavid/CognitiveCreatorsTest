@extends('layouts.app')

@section('content')
<head>
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
</head>
<body>
    <div id="page-container">
        <div id="content-wrap">
            <img id="car" src="{{ asset('images/winter-car-wallpaper.jpg') }}"/>
            <div id="deal-text">
                <h1 id="main-text">Best Offers on Winter Tires</h1>
                <p id="main-paragraph">Tires for cars, trucks, vans and agricultural vehicles</p>
            </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
                    <a class="navbar-brand" href="{{ route('products') }}"><img id="company-img" src="{{ asset('images/cognitive-creators-logo.png') }}"/></a>


                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <form class="form-inline my-2 my-lg-0">
                        <input id="search-input" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
                    <p id="season-text">WINTER</p>
                </div>

                <p id="category-text">P Zero</p>

                <h1 id="old-price">475.00 LEI</h1>
                <h1 id="new-price">475.00 LEI</h1>
                <button id="find-out-button"  class="btn btn-outline-success">FIND OUT MORE</button>
            </div>



            <div id="all-products">
                <div id="top-bar">
                    <div id="type-buttons">
                        <a href="#"><img src="{{ asset('images/Cars-button.png') }}"/></a>
                        <a href="#"><img src="{{ asset('images/Trucks-button.png') }}"/></a>
                        <a href="#"><img src="{{ asset('images/Agriculture-button.png') }}"/></a>
                        <a href="#"><img src="{{ asset('images/Inner-button.png') }}"/></a>
                        <a href="#"><img src="{{ asset('images/Skid-button.png') }}"/></a>
                        <a href="#"><img src="{{ asset('images/Rims-button.png') }}"/></a>
                    </div>
                </div>

                <div id="left-bar">
                    <p>Cars / Off Road Vehicles ATV</p>
                    <a href="#">Pirelli</a>
                    <a href="#">Michelin</a>
                    <a href="#">Hankook</a>
                    <a href="#">Good Year</a>
                    <a href="#">Maxxis</a>
                    <a href="#">Hartland</a>
                    <a href="#">Dunlop</a>
                    <a href="#">Bridgestone</a>
                </div>

                <div id="right-bar">
                    <p>PIRELLI</p>
                    <hr>
                    <div class="product-detail">
                        <div class="product-upper-text">
                            <h1>Pirelli</h1>
                            <img class="p-season" src="{{ asset('images/Summer.png') }}"></img>
                        </div>
                        <p class="p-type">P Zero</p>
                        <div class="div-tire-temperature">
                            <p class="p-tire-size">205/55/R16</p>
                            <p class="p-tire-temperature">82 T</p>
                        </div>

                        <div class="product-images">
                            <div class="product-images-responsive">
                                <img src="{{ asset('images/Fuel.png') }}"/>
                                <img src="{{ asset('images/Weather.png') }}"/>
                                <img src="{{ asset('images/Sound.png') }}"/>
                            </div>
                            <img class="tire-img" src="{{ asset('images/tire.png') }}"/>
                        </div>
                        <div class="product-lower-text">
                            <p class="p-old-price">475.00LEI</p>
                            <p class="p-new-price">475.00LEI</p>
                            <p class="p-available">Available</p>

                        </div>

                        <button class="button-add-to-cart btn btn-outline-success my-2 my-sm-0" type="submit">
                            <select>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <img src="{{ asset('images/cart.png')}}"/>
                            Add to cart
                        </button>


                    </div>
                    <div class="product-detail">
                        <div class="product-upper-text">
                            <h1>Pirelli</h1>
                            <img class="p-season" src="{{ asset('images/Summer.png') }}"></img>
                        </div>
                        <p class="p-type">P Zero</p>
                        <div class="div-tire-temperature">
                            <p class="p-tire-size">205/55/R16</p>
                            <p class="p-tire-temperature">82 T</p>
                        </div>

                        <div class="product-images">
                            <div class="product-images-responsive">
                                <img src="{{ asset('images/Fuel.png') }}"/>
                                <img src="{{ asset('images/Weather.png') }}"/>
                                <img src="{{ asset('images/Sound.png') }}"/>
                            </div>
                            <img class="tire-img" src="{{ asset('images/tire.png') }}"/>
                        </div>
                        <div class="product-lower-text">
                            <p class="p-old-price">475.00LEI</p>
                            <p class="p-new-price">475.00LEI</p>
                            <p class="p-available">Available</p>

                        </div>

                        <button class="button-add-to-cart btn btn-outline-success my-2 my-sm-0" type="submit">
                            <select>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <img src="{{ asset('images/cart.png')}}"/>
                            Add to cart
                        </button>


                    </div>
                    <div class="product-detail">

                    </div>
                    <div class="product-detail">

                    </div>
                    <div class="product-detail">

                    </div>
                    <div class="product-detail">

                    </div>
                </div>


            </div>
        </div>

        <footer id="footer-company">
            <p>@ 2019 COGNITIVE CREATORS</p>
        </footer>
    </div>
</body>
@endsection
