<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobSummary;

class JobController extends Controller
{
    //
	public function showJob(Request $request){
		$job = JobSummary::orderBy('id','DESC')->paginate(5);
		return view('users.search-resume',['job'=>$job,'active_job'=>true]);
	}

   
}
