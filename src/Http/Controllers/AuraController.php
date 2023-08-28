<?php

namespace CalvinKimani\Aura\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuraController extends Controller {
	public function index(){
		$users = User::all();
		return view('aura::index', ['users' => $users]);
	}
	
}