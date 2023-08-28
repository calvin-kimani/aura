<?php

namespace CalvinKimani\Aura\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CalvinKimani\Aura\Models\AuraUser;

class UserController extends Controller {
	public function index(){

		$users = AuraUser::paginate(config('aura.paginate'));
		return view('aura::user', ['users' => $users]);
	}

}