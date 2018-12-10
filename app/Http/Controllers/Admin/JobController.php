<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobSummary;
class JobController extends Controller
{
	public function index() {
		$jobs = JobSummary::all();
		$data = [
			'jobs' => $jobs, 
		];
		return view('admin.jobSummary.list', $data);
	}

	public function create() {
		return view('admin.jobSummary.add');
	}

	public function store() {
		// add 

	} 

	public function edit() {

		return view('admin.jobSummary.edit');
	}

	public function update() {

	}

	public function destroy($id) {
		$job = JobSummary::find($id)->destroy();
		return redirect()->back();
	}



}
