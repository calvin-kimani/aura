<?php

use Illuminate\Support\Facades\Route;
use CalvinKimani\Aura\Http\Controllers;

Route::group(['namespace' => 'CalvinKimani\Aura\Controllers'], function () {
	Route::prefix(config('aura.route_prefix'))->group(function(){

		Route::get('/', function(){ return view('aura::index'); })->name('aura.index');

	});

});

require __DIR__.'/./user.php';