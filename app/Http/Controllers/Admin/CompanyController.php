<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyController extends Controller
{
    public function index() {
		$companies = Company::all();
		return view('admin.company.list', compact('companies'));
	}

	public function create() {
		return view('admin.company.add');
	}

	public function store() {
		// add 

	} 

	public function edit() {

		return view('admin.company.edit');
	}

	public function update() {

	}

	public function destroy($id) {
		$company = Company::find($id)->destroy();
		return redirect()->back();
	}
}
