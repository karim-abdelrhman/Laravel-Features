<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginSocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        if($provider == 'github'){
            return Socialite::driver('github')
                ->setScopes(['read:user', 'public_repo'])
                ->redirect();
        }
        return Socialite::driver($provider)
            ->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $createdUser = User::firstOrCreate([
            'provider_id' => $user->getId(),
            'provider_type' => $provider,
        ],[
            'name' => $user->getName(),
            'email' => $user->getEmail(),
        ]);
        Auth::login($createdUser);
        return redirect()->route('dashboard');
    }
}
