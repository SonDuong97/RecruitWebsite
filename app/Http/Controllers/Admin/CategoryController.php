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

	
	public function getEdit($id){
    	$categories = Category::find($id);
    // Load user/createOrUpdate.blade.php view
    	return view('admin.category.edit', compact('categories'));
	}
	public function postEdit(Request $request,$id){
		$categories = Category::find($id);
	
		$categories -> name = $request -> name;
		$categories -> save();

		return redirect('admin/categories/edit'.$id)->with('thongbao','Sua thanh cong');
	}



	public function update() {
		
	}

	public function destroy($id) {
		Category::destroy($id);
		return redirect()->back();
	}

}
