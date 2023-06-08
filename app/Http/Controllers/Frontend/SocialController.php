<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialController extends Controller
{
    public function facebookRedirect(): RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();

            if ($isUser) {
                Auth::login($isUser);
                toastr()->success('You Have Been Successfully logged in');
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('authenticated')
                ]);

                Auth::login($createUser);
                toastr()->success('You Have Been Successfully logged in');
                return redirect()->route('homepage');
            }
        } catch(Exception $exception){
            dd($exception->getMessage());
        }
    }

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $isUser = User::where('google_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                toastr()->success('You Have Been Successfully logged in');
                return redirect()->route('homepage');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('authenticated')
                ]);
                Auth::login($newUser);
                toastr()->success('You Have Been Successfully logged in');
                return redirect()->route('homepage');
            }
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
