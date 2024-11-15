<?php

namespace App\Http\Middleware;

use App\Models\Professors;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
	/**
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $request, Closure $next): Response
	{
		if (! Auth::check()) {
			return redirect(route('auth'));
		}

		if (!Auth::user()->role === "admin" || !Professors::where('account_id', "=", Auth::id())->whereHas('classSubjects')->exists()) {
			return redirect(route('blocked'));
		}

		return $next($request);
	}
}
