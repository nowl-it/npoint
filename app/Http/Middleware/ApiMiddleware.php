<?php

namespace App\Http\Middleware;

use App\Models\Professors;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;
use Symfony\Component\HttpFoundation\Response;

class ApiMiddleware
{
	/**
	 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
	 */
	public function handle(Request $request, Closure $next): Response
	{

		dd(Auth::guard('api')->user());

		if (! Auth::check()) {
			return response()->json([
				'message' => 'Unauthorized'
			], 401);
		}

		if (!Auth::user()->role === "admin" || !Professors::where('account_id', "=", Auth::id())->whereHas('classSubjects')->exists()) {
			return response()->json([
				'message' => 'Forbidden'
			], 403);
		}

		return $next($request);
	}
}
