<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        if(auth()->attempt($request->only('email','password'),true))
        {
            return redirect()->route('dashboard');

        }
        else{
            return back()->with('failure','Login credentials do not match our records');
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');

    }
}
