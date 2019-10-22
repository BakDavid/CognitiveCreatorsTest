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

            @if($products->count() != 0)
            <div id="promotion-text">
                <div>
                    <h1 id="brand-text">{{$products[0]->category}}</h1>
                    <p id="season-text">{{$products[0]->season}}</p>
                </div>

                <p id="category-text">{{$products[0]->brand}}</p>

                <h1 id="old-price">{{$products[0]->old_price}}</h1>
                <h1 id="new-price">{{$products[0]->new_price}}</h1>
                <button id="find-out-button"  class="btn btn-outline-success">FIND OUT MORE</button>
            </div>
            @endif



            <div id="all-products">
                <div id="top-bar">
                    <div id="type-buttons">
                        @if($specific == 'Cars_Off_Road_Vehicles_ATV')
                            <button class="btn button-selected">
                                <a href="{{ route('setSpecific','Cars_Off_Road_Vehicles_ATV') }}"><img src="{{ asset('images/Cars-button.png') }}"/></a>
                            </button>
                        @else
                            <button class="btn">
                                <a href="{{ route('setSpecific','Cars_Off_Road_Vehicles_ATV') }}"><img src="{{ asset('images/Cars-button.png') }}"/></a>
                            </button>
                        @endif

                        @if($specific == 'Trucks')
                            <button class="btn button-selected">
                                <a href="{{ route('setSpecific','Trucks') }}"><img src="{{ asset('images/Trucks-button.png') }}"/></a>
                            </button>
                        @else
                            <button class="btn">
                                <a href="{{ route('setSpecific','Trucks') }}"><img src="{{ asset('images/Trucks-button.png') }}"/></a>
                            </button>
                        @endif

                        @if($specific == 'Agriculture')
                            <button class="btn button-selected">
                                <a href="{{ route('setSpecific','Agriculture') }}"><img src="{{ asset('images/Agriculture-button.png') }}"/></a>
                            </button>
                        @else
                            <button class="btn">
                                <a href="{{ route('setSpecific','Agriculture') }}"><img src="{{ asset('images/Agriculture-button.png') }}"/></a>
                            </button>
                        @endif

                        @if($specific == 'Inner_tubes')
                            <button class="btn button-selected">
                                <a href="{{ route('setSpecific','Inner_tubes') }}"><img src="{{ asset('images/Inner-button.png') }}"/></a>
                            </button>
                        @else
                            <button class="btn">
                                <a href="{{ route('setSpecific','Inner_tubes') }}"><img src="{{ asset('images/Inner-button.png') }}"/></a>
                            </button>
                        @endif

                        @if($specific == 'Skid_chains')
                            <button class="btn button-selected">
                                <a href="{{ route('setSpecific','Skid_chains') }}"><img src="{{ asset('images/Skid-button.png') }}"/></a>
                            </button>
                        @else
                            <button class="btn">
                                <a href="{{ route('setSpecific','Skid_chains') }}"><img src="{{ asset('images/Skid-button.png') }}"/></a>
                            </button>
                        @endif

                        @if($specific == 'Rims')
                            <button class="btn button-selected">
                                <a href="{{ route('setSpecific','Rims') }}"><img src="{{ asset('images/Rims-button.png') }}"/></a>
                            </button>
                        @else
                            <button class="btn">
                                <a href="{{ route('setSpecific','Rims') }}"><img src="{{ asset('images/Rims-button.png') }}"/></a>
                            </button>
                        @endif
                    </div>
                </div>

                <div id="left-bar">
                    @if($specific ==  'Cars_Off_Road_Vehicles_ATV')
                        <p>Cars/Off Road Vehicles ATV</p>
                    @else
                        <p>{{$specific}}</p>
                    @endif
                    @if($category == "Pirelli")
                        <a class="a-selected" href="{{ route('setCategory','Pirelli') }}">Pirelli</a>
                    @else
                        <a href="{{ route('setCategory','Pirelli') }}">Pirelli</a>
                    @endif

                    @if($category == "Michelin")
                        <a class="a-selected" href="{{ route('setCategory','Michelin') }}">Michelin</a>
                    @else
                        <a href="{{ route('setCategory','Michelin') }}">Michelin</a>
                    @endif

                    @if($category == "Hankook")
                        <a class="a-selected" href="{{ route('setCategory','Hankook') }}">Hankook</a>
                    @else
                        <a href="{{ route('setCategory','Hankook') }}">Hankook</a>
                    @endif

                    @if($category == "Good Year")
                        <a class="a-selected" href="{{ route('setCategory','Good Year') }}">Good Year</a>
                    @else
                        <a href="{{ route('setCategory','Good Year') }}">Good Year</a>
                    @endif

                    @if($category == "Maxxis")
                        <a class="a-selected" href="{{ route('setCategory','Maxxis') }}">Maxxis</a>
                    @else
                        <a href="{{ route('setCategory','Maxxis') }}">Maxxis</a>
                    @endif

                    @if($category == "Hartland")
                        <a class="a-selected" href="{{ route('setCategory','Hartland') }}">Hartland</a>
                    @else
                        <a href="{{ route('setCategory','Hartland') }}">Hartland</a>
                    @endif

                    @if($category == "Dunlop")
                        <a class="a-selected" href="{{ route('setCategory','Dunlop') }}">Dunlop</a>
                    @else
                        <a href="{{ route('setCategory','Dunlop') }}">Dunlop</a>
                    @endif

                    @if($category == "Bridgestone")
                        <a class="a-selected" href="{{ route('setCategory','Bridgestone') }}">Bridgestone</a>
                    @else
                        <a href="{{ route('setCategory','Bridgestone') }}">Bridgestone</a>
                    @endif
                </div>

                <div id="right-bar">
                    <p style="text-transform:uppercase;">{{$category}}</p>
                    <hr>

                    @if($products->count() != 0)
                        @foreach($products as $p)
                        <form method="POST" action="{{ route('productAdd',$p->id)}}">
                            @csrf
                            <div class="product-detail">
                                <div class="product-upper-text">
                                    <h1>{{$p->category}}</h1>
                                    <img class="p-season" src="{{ asset('images/Summer.png') }}"></img>
                                </div>
                                <p class="p-type">{{$p->brand}}</p>
                                <div class="div-tire-temperature">
                                    <p class="p-tire-size">{{$p->size}}</p>
                                    <p class="p-tire-temperature">{{$p->tires_load_index}}</p>
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
                                    <p class="p-old-price">{{$p->old_price}}</p>
                                    <p class="p-new-price">{{$p->new_price}}</p>
                                    @if($p->quantity > 0)
                                        <p class="p-available">Available</p>
                                    @else
                                        <p class="p-not-available">Not Available</p>
                                    @endif

                                </div>

                                @if($p->quantity > 0)
                                    <div class="button-add-to-cart">
                                        <select name="quantity">
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

                                        <button class="btn my-2 my-sm-0" type="submit">
                                            <img src="{{ asset('images/cart.png')}}"/>
                                            Add to cart
                                        </button>
                                    </div>

                                @endif
                            </div>
                        </form>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <footer id="footer-company">
            <p>@ 2019 COGNITIVE CREATORS</p>
        </footer>
    </div>
</body>
@endsection
