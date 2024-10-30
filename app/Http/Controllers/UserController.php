<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function changeAvatar(Request $request)
	{
		$request->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		]);
		$imageName = time() . '.' . $request->image->extension();
		$request->image->move(
			public_path('uploads/images'),
			$imageName
		);

		User::where('account_id', Auth::id())->update([
			'avatar_uri' => "/uploads/images/$imageName"
		]);

		return redirect("/")->with('success', 'Product created successfully.');
	}
}
