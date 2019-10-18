<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginCheckAndRegisterController extends Controller
{

    public function login()
    {
        return view('auth/login');
    }

    public function loginCheck(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        $request->session()->put('email',$request->email);
        if($user != null)
        {
            return redirect()->route('loginPassword');
        }
        else
        {
            return redirect()->route('register');
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerPost(Request $request)
    {
        if($request->password != $request->input('password-confirm'))
        {
            return redirect()->back()->withErrors(array('password' => 'Password do not match!'));
        }
        $email = $request->session()->pull('email');

        $user = new User();
        $user->name = $request->name;
        $user->password = Hash::make($request->input('password'));
        $user->email = $email;
        $user->save();
        return view('home');
    }

    public function loginPassword()
    {
        return view('auth/loginPassword');
    }

    public function loginPasswordPost(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->session()->pull('email'),
            'password' => $request->password,
        ]))
        {
            return redirect()->route('home');
        }
        else
        {
            return redirect()->back()->withErrors(array('password' => 'Wrong password!'));
        }
    }
}
