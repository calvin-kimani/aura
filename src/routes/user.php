<?php

use Illuminate\Support\Facades\Route;
use CalvinKimani\Aura\Http\Controllers;
use CalvinKimani\Aura\Http\Controllers\UserController;


Route::group(['namespace' => 'CalvinKimani\Aura\Controllers'], function () {
	Route::prefix(config('aura.route_prefix'))->group(function(){

		Route::prefix(config('aura.models.user.route_prefix'))->group(function(){			
			Route::get('/', [UserController::class, 'index'])->name('aura.users');
		});
	});

});
