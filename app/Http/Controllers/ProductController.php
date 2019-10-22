<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
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

        if($search == null)
        {
            $products = DB::table('products')->where('category',$category)->where('specific',$specific)->get();
        }

        return view('products')->with('products',$products)->with('category',$category)->with('specific',$specific);
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

    public function productAdd(Request $request,$id)
    {
        dd($request);
        return redirect()->route('products');
    }
}
