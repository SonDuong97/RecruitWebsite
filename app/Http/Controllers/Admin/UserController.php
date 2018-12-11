<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    public function index() {
		$users = User::all();
		return view('admin.user.list', compact('users'));
	}

	public function create() {
		return view('admin.user.add');
	}

	public function store() {
		// add 

	} 

	public function edit() {

		return view('admin.user.edit');
	}

	public function update() {

	}

	public function destroy($id) {
		User::destroy($id);
		return redirect()->back();
	}

}
