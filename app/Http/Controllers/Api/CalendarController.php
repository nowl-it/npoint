<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
	public function index(Request $request): array
	{
		return [
			'message' => 'Hello World'
		];
	}
}
