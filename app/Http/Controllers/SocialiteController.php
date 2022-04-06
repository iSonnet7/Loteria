<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('google')->user();

        $userExist = User::where('email', $user->email)->first();

        if($userExist){
            Auth::login($userExist);
            return redirect()->route('home');
        } else {
            $new = new User();

            $name = $user->name;

            //$new->name = $user->name;
            //$new->email = $user->email;

            //$new->save();

            //Auth::login($new);

            return redirect()->route('home');
        }
    }
}
