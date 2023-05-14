<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

abstract class SocialiteAuthController extends Controller
{
    protected $driver;

    protected function __construct($driver)
    {
        $this->driver = $driver;
    }

    protected function redirect()
    {
        return Socialite::driver($this->driver)->redirect();
    }

    protected function getName($user)
    {
        return $user->getName() ?? $user->getNickname();
    }

    protected function getEmail($user)
    {
        return $user->getEmail();
    }

    private function id()
    {
        return $this->driver . '_id';
    }

    public function callback()
    {
        try {
            $auth_user = Socialite::driver($this->driver)->user();

            $user = User::where($this->id(), $auth_user->getId())->first();

            if (!$user) {
                $new_user = User::create([
                    'name' => $this->getName($auth_user),
                    'email' => $this->getEmail($auth_user),
                    $this->id() => $auth_user->getId(),
                ]);
                Auth::login($new_user);
            } else {
                Auth::login($user);
            }

            return redirect()->intended('home');
        } catch (\Throwable $th) {
            dd("Something went wrong " . $th->getMessage());
        }
    }
}
