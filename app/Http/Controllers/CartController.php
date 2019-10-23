<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User_Cart;
use App\Cart_Product;
use Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cart(Request $request)
    {
        $mycart = $request->session()->get('mycart');
        $search = $request->session()->get('search');
        return view('cart')
                ->with('mycart', $mycart)
                ->with('search',$search);
    }

}
