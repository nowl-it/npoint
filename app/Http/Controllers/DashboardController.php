<?php

namespace App\Http\Controllers;

use App\Models\Professors;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
	public function index(Professors $professors): View
	{
		$professors = $professors->where('account_id', Auth::id())->first();

		$total_hours = $professors->totalTeachingHours();

		$total_teaching_hours = $professors->totalWasTeachingHoursThisMonth();

		return view('pages.home', compact('total_hours', 'total_teaching_hours'));
	}
}
