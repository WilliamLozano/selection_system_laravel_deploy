<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(!auth()->attempt($request->only('email','password'))){
            return back()->with('mensaje ', 'credenciales incorectas');
        }

        return redirect()->route('home.index');
    }
}
