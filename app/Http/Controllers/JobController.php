<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\JobSummary;
use App\JobDetail;
use Illuminate\Support\Facades\URL;

class JobController extends Controller
{
    //
	public function showJob(Request $request){
		$jobs = JobSummary::orderBy('id','DESC')->paginate(5);
		$listCategory = Category::all();
		return view('users.search-resume',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory]);
	}

	public function searchJob(Request $request){
		$listCategory = Category::all();
		$jobs = JobSummary::where('id_category','1')->orderBy('id','DESC')->paginate(5);
		return view('users.search-resume',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory]);
	}

	public function findByCategory($id) {
		$jobs = JobSummary::where('id_category',$id)->paginate(5);
		$category = Category::find($id);
		$listCategory = Category::all();
		return view('users.job-category',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory,'category'=>$category]);

	}

	public function showJobDetail($id){
		$url =  URL::current();
		$jobSummary = JobSummary::find($id);
		$listCategory = Category::all();
		return view('users.job-detail',['jobSummary'=>$jobSummary,'listCategory'=>$listCategory,'url'=>$url]);
	}


}
