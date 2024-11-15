<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlockedController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
	Route::get('auth', [AuthController::class, 'index'])->name('auth');
	Route::post('auth', [AuthController::class, 'AuthAction']);
});

Route::middleware('auth')->group(function () {
	Route::get('logout', [AuthController::class, 'Logout'])
		->name('logout');

	Route::group(['prefix' => 'admin'], function () {
		Route::get('/', [DashboardController::class, "index"])->name('dashboard');

		Route::get('/attendance', function () {
			return view('pages.attendance');
		})->name('attendance');

		Route::group(['prefix' => 'class'], function () {
			Route::get('/', function () {
				return view('pages.class.index');
			})->name('class');

			Route::get('/{id}', function ($id) {
				return view('pages.class.[id]', ['id' => $id]);
			})->name('class.detail');
		});
	});
});

Route::get('blocked', [BlockedController::class, "index"])->name('blocked');
