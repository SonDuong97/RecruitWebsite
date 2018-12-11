<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
	public function index() {
		$categories = Category::all();
		return view('admin.category.list', compact('categories'));
	}

	public function create() {
		return view('admin.category.add');
	}

	public function store() {
		// add 

	} 

	public function edit() {

		return view('admin.category.edit');
	}

	public function update() {

	}

	public function destroy($id) {
		Category::destroy($id);
		return redirect()->back();
	}

}
