<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        $user = Socialite::driver('google')->user();

        $userExist = User::where('email', $user->email)->first();

        if($userExist){
            Auth::login($userExist);
            return redirect()->route('home');
        } else {
            $new = new User();

            $new->name = $user->name;
            $new->email = $user->email;

            return view('access.register', compact('new'));
        }
    }

    public function redirectFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook(){
        $user = Socialite::driver('facebook')->user();

        $userExist = User::where('email', $user->email)->first();

        if($userExist){
            Auth::login($userExist);
            return redirect()->route('home');
        } else {
            $new = new User();

            $new->name = $user->name;
            $new->email = $user->email;

            return view('access.register', compact('new'));
        }
    }
}
