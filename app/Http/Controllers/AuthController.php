<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AuthController extends Controller
{
	public function index(): View
	{
		return view('pages.auth');
	}

	public function AuthAction(AuthRequest $request): RedirectResponse
	{
		$credentials = $request->validate([
			'username' => ['required', 'string', 'max:255', Rule::exists('accounts')],
			'password' => ['required', 'string', 'min:8'],
		]);

		if (Auth::attempt($credentials)) {
			$request->session()->regenerate();

			return redirect()->intended(route('dashboard'));
		}

		return back()->withErrors([
			'The provided credentials do not match our records.',
		])->withInput(['username' => $request->username, 'password' => '']);
	}
	public function Logout(): RedirectResponse
	{
		Session::flush();

		Auth::logout();

		return redirect()->route('auth');
	}
}
