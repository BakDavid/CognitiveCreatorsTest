<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User_Cart;
use App\Cart_Product;
use Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function products(Request $request)
    {
        $category = $request->session()->get('category');
        $specific = $request->session()->get('specific');
        $search = $request->session()->get('search');

        if($search == null || $search == '')
        {
            $products = DB::table('products')
                            ->where('category',$category)
                            ->where('specific',$specific)
                            ->get();
        }
        else
        {
            $products = DB::table('products')
                            ->where('category',$category)
                            ->where('specific',$specific)
                            ->where(function($q) use($search){
                                $q->where('category','like',"%$search%")
                                ->orWhere('brand','like',"%$search%")
                                ->orWhere('size','like',"%$search%")
                                ->orWhere('old_price','like',"%$search%")
                                ->orWhere('new_price','like',"%$search%")
                                ->orWhere('tires_load_index','like',"%$search%")
                                ->orWhere('season','like',"%$search%");
                            })
                            ->get();
        }


        $myproducts = User_Cart::select('id')
                               ->where('user_id',Auth::user()->id)
                               ->where('ordered','no')
                               ->where('finished','no')
                               ->get(1);

        $cart_product = Cart_Product::select('product_id')
                                    ->where('cart_id',$myproducts[0]->id)
                                    ->get()
                                    ->toArray();

        $mycart = Product::whereIn('products.id',$cart_product)
                         ->join('cart__products','products.id','=','cart__products.product_id')
                         ->get();

        $request->session()->put('mycart',$mycart);

        return view('products')->with('products',$products)
                               ->with('category',$category)
                               ->with('specific',$specific)
                               ->with('search',$search)
                               ->with('mycart',$mycart);
    }

    public function setCategory(Request $request,$category)
    {
        $request->session()->put('category',$category);
        return redirect()->route('products');
    }

    public function setSpecific(Request $request,$specific)
    {
        $request->session()->put('specific',$specific);
        return redirect()->route('products');
    }

    public function search(Request $request)
    {
        $request->session()->put('search',$request->search_input);
        return redirect()->route('products');
    }

    public function productAdd(Request $request,$id)
    {
        $user_cart = DB::table('user__carts')->where('user_id',Auth::user()->id)->where('finished','no')->first();
        if($user_cart == null)
        {
            $cart = new User_Cart();
            $cart->user_id = Auth::user()->id;
            $cart->save();
        }
        $cart_product = new Cart_Product();
        $cart_product->product_id = $id;
        $cart_product->cart_id = $user_cart->id;
        $cart_product->quantity = $request->quantity;
        $cart_product->save();

        $products = Product::where('id',$id)->first();
        $products->quantity = $products->quantity - $request->quantity;
        $products->save();

        return redirect()->route('products');
    }
}
