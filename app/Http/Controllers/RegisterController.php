<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('access.register');
    }

    public function store(Request $request){
        $request -> validate([
            'name'=>'required|string|max:50',
            'fatherLastName'=>'required|string|max:30',
            'motherLastName'=>'required|string|max:30',
            'birthday'=>'required',
            'number'=>'required|numeric',
            'email'=>'required|max:100|unique:users',
            'password'=>'required|max:255',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->fatherLastName = $request->fatherLastName;
        $user->motherLastName = $request->motherLastName;
        $user->birthday = $request->birthday;
        $user->number = $request->number;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect()->route('login.index');
    }

    public function social(){
        return view('access.social');
    }
}
