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
                      @if($mycart != null)
                          @foreach($mycart as $m)
                              <tr>
                                  <td>{{$m->category . ' ' . $m->brand}}</td>
                                  <td align="center">{{$m->quantity}}</td>
                              </tr>
                          @endforeach
                      @endif
                  </table>
                  <div class="dropdown-divider"></div>
                  <a id="checkout-button" class="dropdown-item" href="{{ route('cart')}}">Checkout</a>
              </div>
          </div>
        </nav>

        <div class="cart-mycontainer">
            <div class="upper-cart-detail">
                <p id="summary">Shopping cart summary:</p>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Unit price exclusive of VAT</th>
                            <th>VAT amount</th>
                            <th>Total without VAT</th>
                            <th>Total with VAT</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($mycart != null)
                            @foreach($mycart as $m)
                            <tr>
                                <td>
                                    <div class="left-block">
                                        <p class='p-category'>{{$m->category}}</p>
                                        <p class="p-brand">{{$m->brand}}</p>
                                    </div>

                                    <div class="middle-block">
                                        <p class="p-tire">{{$m->size . ' ' . $m->tires_load_index}}</p>
                                        <img src="{{ asset('images/Fuel.png') }}"/>
                                        <img src="{{ asset('images/Weather.png') }}"/>
                                        <img src="{{ asset('images/Sound.png') }}"/>
                                        <img class="p-season" src="{{ asset('images/Summer.png') }}"></img>
                                    </div>

                                    <img class="img-tire" src="{{asset('images/tire.png')}}"/>
                                </td>
                                <td>{{$m->quantity}}</td>
                                <td>{{$m->new_price}}</td>
                                <td>{{$m->vat_price}}</td>
                                <td>{{$m->new_price * $m->quantity}}</td>
                                <td>{{$m->new_price * $m->quantity + $m->vat_price}}</td>
                                <td>
                                    <button class="btn button-delete">
                                        <a href="{{ route('productRemove',$m->id) }}">X</a>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        <tr id="bordered-row">
                            <td id="total-products">Total products</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{$total_without_VAT . ' RON'}}</td>
                            <td>{{$total_with_VAT . ' RON'}}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <form method="post" action="{{ route('order')}}">
                @csrf
                <div class="lower-cart-detail">
                    <div class="upper-process">
                        <p>Finalize your order in just three steps</p>
                        <svg>
                            <line x1="0%" y1="20" x2="100%" y2="20"/>
                        </svg>
                    </div>
                    <div class="lower-process">
                        <div class="left-side">
                            <div class="left-side-align">
                                <input type="radio" name="person_type" value="Individual Person" required>Individual Person
                                <input type="radio" name="person_type" value="Legal" required>Legal

                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" class="form-control mr-sm-2" required/>
                                <label for="first_name">First name</label>
                                <input id="first_name" type="text" name="first_name" class="form-control mr-sm-2" required/>
                                <label for="email">E-mail</label>
                                <input id="email" type="email" name="email" class="form-control mr-sm-2" required/>
                                <label for="address">Address</label>
                                <input id="address" type="text" name="address" class="form-control mr-sm-2" required/>
                                <label for="IBAN">IBAN</label>
                                <input id="IBAN" type="text" name="IBAN" class="form-control mr-sm-2" required/>
                                <label for="bank">Bank</label>
                                <input id="bank" type="text" name="bank" class="form-control mr-sm-2" required/>
                                <label for="registration_number">Registration Number</label>
                                <input id="registration_number" type="text" name="registration_number" class="form-control mr-sm-2" required/>
                                <button id="billing_address" class="btn my-button-design">Continue</button>
                            </div>
                        </div>
                        <div class="middle-side">
                            <div class="middle-side-align">
                                Method of delivery:<br>
                                <input type="radio" name="method" value="Pickup from a deposit" required>Pickup from a deposit<br>
                                <input type="radio" name="method" value="Express delivery" required>Express delivery<br>
                                <button id="method" class="btn my-button-design">Continue</button>
                            </div>
                        </div>
                        <div class="right-side">
                            <div class="right-side-align">
                                Payment method:<br>
                                <input type="radio" name="payment" value="Cash on delivery" required>Cash on delivery<br>
                                <input type="radio" name="payment" value="Credit card" required>Credit card<br>
                                <input type="radio" name="payment" value="Payment order" required>Payment order<br>
                                <input type="radio" name="payment" value="Cash on pickup" required>Cash on pickup<br>
                                <input type="checkbox" name="terms" value="I agree with the Terms and conditions" required>I agree with the Terms and conditions<br>
                                <label for="comment">Comment</label>
                                <input id="comment" type="text" name="comment" class="form-control mr-sm-2"/>
                                <button id="confirm" class="btn my-button-design" type="submit">Send order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

        <footer id="footer-company">
            <p>@ 2019 COGNITIVE CREATORS</p>
        </footer>
    </div>
</body>
@endsection
