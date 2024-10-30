<?php

use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {});

Route::middleware('auth')->group(function () {
	Route::post('logout', LogoutController::class)
		->name('logout');

	Route::group(['prefix' => 'admin'], function () {
		Route::get('/', function () {
			return view('pages.home');
		})->name('dashboard');
	});
});
