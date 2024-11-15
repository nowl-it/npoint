<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Professors;
use Illuminate\Support\Facades\Auth;

class BlockedController extends Controller
{
	protected $account;
	protected $professor;


	public function __construct(Accounts $account, Professors $professor)
	{
		$this->account = $account;
		$this->professor = $professor;
	}

	public function index()
	{
		if (!Auth::user()->role === "admin" || !$this->professor->where('account_id', "=", Auth::id())->whereHas('classSubjects')->exists()) {
			dd($this->professor->classSubjects()->get());
			return view('pages.blocked');
		}

		return redirect(route("dashboard"));
	}
}
