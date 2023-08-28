<?php

use Illuminate\Support\Facades\Route;
use CalvinKimani\Aura\Http\Controllers;
use CalvinKimani\Aura\Http\Controllers\UserController;

Route::group(['namespace' => 'CalvinKimani\Aura\Controllers'], function () {

	Route::get('/aura/users', [UserController::class, 'index'])->name('aura.users');
	
})->middleware([Authenticate::class]);
