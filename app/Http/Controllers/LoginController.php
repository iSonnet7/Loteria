<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('access.login');
    }

    public function store(Request $request){
        $request -> validate([
            'email'=>'required|max:100',
            'password'=>'required|max:255'
        ]);

        $credentials = $request->only('email', 'password');

        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            
           $request->session()->regenerate();
 
           return redirect()->route('home');
         }
        return redirect()->route('login.index');
    }

    public function destroy(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.index');
    }
}
