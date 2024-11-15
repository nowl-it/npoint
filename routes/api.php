<?php

use App\Http\Controllers\Api\CalendarController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:api'])->group(function () {
	Route::group(['prefix' => 'calendar'], function () {
		Route::controller(CalendarController::class)->group(function () {
			Route::get('/', "index")->name('calendar');
		});
	});
});
