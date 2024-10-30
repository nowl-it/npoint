<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Account;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function Login(): View
    {
        return view('pages.auth.login');
    }

    public function Register(): View
    {
        return view('pages.auth.register');
    }

    public function LoginAction(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->getCredentials();

        if (! Auth::attempt($credentials)) {
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return redirect()->intended('/');
    }

    public function RegisterAction(
        RegisterRequest $request
    ): RedirectResponse {
        $account = Account::create($request->validated());
        $account_id = $account->id;

        User::create([
            'account_id' => $account_id,
            'username' => $request->get('username'),
        ]);

        Auth::login($account);

        return redirect()->route('auth.login')->with('success', 'Account created successfully');
    }

    public function Logout(): RedirectResponse
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('auth.login');
    }
}
