<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Mockery\Exception;

class FacebookLoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        //Todo set login with account kit facebook
        try {
            $getUser = Socialite::driver('facebook')->user();
            $user = $this->createOrLogin($getUser);
            Auth::login($user);

            return redirect()->route('index');
        }catch(Exception $e) {
            return redirect()->route('index');
        }
    }

    public function createOrLogin(ProviderUser $user)
    {
        $account = Users::where('fb_id', '=', $user->getId())
                            ->first();

        if (!$account) {
            $account = Users::create([
                'fb_id' => $user->getId(),
                'name' => $user->getName(),
                'avatar' => $user->getAvatar(),
                'phone' => 0
            ]);
        }

        return $account;
    }
}
