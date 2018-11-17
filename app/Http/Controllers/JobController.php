<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\JobSummary;
use App\JobDetail;
use App\Address;
use App\Company;
use Illuminate\Support\Facades\DB;
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
		if($request->address == '' && $request->category == ''){
			$jobs = JobSummary::selectRaw('job_summaries.*')
					->join('companies','companies.id','=','job_summaries.id_company')
					->where('companies.name','like','%'.$request->company.'%')
					->orderBy('id','DESC')
					->paginate(5);

		}
		else if($request->address != '' && $request->category == ''){
			$addr = (int)$request->address;
			$jobs = JobSummary::selectRaw('job_summaries.*')
					->join('companies','companies.id','=','job_summaries.id_company')
					->join('address','address.id','=','job_summaries.id_address')
					->where([['companies.name','like','%'.$request->company.'%'],['address.id','=',$addr]])
					->orderBy('id','DESC')
					->paginate(5);
		}
		else if($request->address == '' && $request->category != ''){
			$cate = (int)$request->category;
			$jobs = JobSummary::selectRaw('job_summaries.*')
					->join('companies','companies.id','=','job_summaries.id_company')
					->join('categories','categories.id','=','job_summaries.id_category')
					->where([['companies.name','like','%'.$request->company.'%'],['categories.id','=',$cate]])
					->orderBy('id','DESC')
					->paginate(5);
		}
		else {
			$addr = (int)$request->address;
			$cate = (int)$request->category;
			$jobs = JobSummary::selectRaw('job_summaries.*')
					->join('companies','companies.id','=','job_summaries.id_company')
					->join('categories','categories.id','=','job_summaries.id_category')
					->join('address','address.id','=','job_summaries.id_address')
					->where(['companies.name','like','%'.$request->company.'%'],['categories.id','=',$cate],['address.id','=',$addr])
					->orderBy('id','DESC')
					->paginate(5);
		}

		
		$listAddress = Address::all();
		return view('users.search-resume',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory,'listAddress'=>$listAddress,'companySearch'=>$request->company]);
	}

	public function findByCategory($id) {
		$jobs = JobSummary::where('id_category',$id)->paginate(5);
		$category = Category::find($id);
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.job-category',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory,'category'=>$category,'listAddress'=>$listAddress]);

	}

	public function showJobDetail($id){
		$url =  URL::current();
		$jobSummary = JobSummary::find($id);
		$listCategory = Category::all();
		return view('users.job-detail',['jobSummary'=>$jobSummary,'listCategory'=>$listCategory,'url'=>$url]);
	}


}
