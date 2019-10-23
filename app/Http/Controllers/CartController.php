<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User_Cart;
use App\Cart_Product;
use App\Purchase;
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

        $total_without_VAT = 0;
        $total_with_VAT = 0;
        if($mycart != null)
        {
            foreach($mycart as $m)
            {
                $total_without_VAT = $total_without_VAT + $m->quantity * $m->new_price;
                $total_with_VAT = $total_with_VAT + $m->vat_price;
            }
            $total_with_VAT += $total_without_VAT;
        }

        return view('cart')
                ->with('mycart', $mycart)
                ->with('search',$search)
                ->with('total_with_VAT',$total_with_VAT)
                ->with('total_without_VAT',$total_without_VAT);
    }

    public function productRemove(Request $request,$id)
    {
        $deleted_product = Cart_Product::where('id',$id)->first();
        $deleted_product->deleted = '1';
        $deleted_product->save();

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
                        ->where('cart__products.deleted','0')
                        ->get();

        $request->session()->put('mycart',$mycart);

        return redirect()->route('cart');
    }

    public function order(Request $request)
    {
        $purchases = new Purchase();
        $purchases->user_id = Auth::user()->id;
        $purchases->person_type = $request->person_type;
        $purchases->name = $request->name;
        $purchases->first_name = $request->first_name;
        $purchases->email = $request->email;
        $purchases->address = $request->address;
        $purchases->IBAN = $request->IBAN;
        $purchases->bank = $request->bank;
        $purchases->registration_number = $request->registration_number;
        $purchases->delivery_method = $request->method;
        $purchases->payment_method = $request->payment;
        $purchases->comment = $request->comment;
        $purchases->save();

        $user_cart = User_Cart::where('user_id',Auth::user()->id)->where('ordered','no')->where('finished','no')->first();
        $user_cart->ordered = 'yes';
        $user_cart->finished = 'yes';
        $user_cart->save();

        $request->session()->pull('mycart');

        return view('order');
    }

}
