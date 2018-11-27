<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\JobSummary;
use App\JobDetail;
use App\Address;
use App\Company;
use App\ApplyCV;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Validator;

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
					->join('companies','companies.id','=','job_summaries.company_id')
					->where('companies.name','like','%'.$request->company.'%')
					->orderBy('id','DESC')
					->paginate(5);

		}
		else if($request->address != '' && $request->category == ''){
			$addr = (int)$request->address;
			$jobs = JobSummary::selectRaw('job_summaries.*')
					->join('companies','companies.id','=','job_summaries.company_id')
					->join('address','address.id','=','job_summaries.address_id')
					->where([['companies.name','like','%'.$request->company.'%'],['address.id','=',$addr]])
					->orderBy('id','DESC')
					->paginate(5);
		}
		else if($request->address == '' && $request->category != ''){
			$cate = (int)$request->category;
			$jobs = JobSummary::selectRaw('job_summaries.*')
					->join('companies','companies.id','=','job_summaries.company_id')
					->join('categories','categories.id','=','job_summaries.category_id')
					->where([['companies.name','like','%'.$request->company.'%'],['categories.id','=',$cate]])
					->orderBy('id','DESC')
					->paginate(5);
		}
		else {
			$addr = (int)$request->address;
			$cate = (int)$request->category;
			$jobs = JobSummary::selectRaw('job_summaries.*')
					->join('companies','companies.id','=','job_summaries.company_id')
					->join('categories','categories.id','=','job_summaries.category_id')
					->join('address','address.id','=','job_summaries.address_id')
					->where([['companies.name','like','%'.$request->company.'%'],['categories.id','=',$cate],['address.id','=',$addr]])
					->orderBy('id','DESC')
					->paginate(5);
		}

		
		$listAddress = Address::all();
		return view('users.search-resume',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory,'listAddress'=>$listAddress,'companySearch'=>$request->company]);
	}

	public function findByCategory($id) {
		$jobs = JobSummary::where('category_id',$id)->paginate(5);
		$category = Category::find($id);
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.job-category',['jobs'=>$jobs,'active_job'=>true,'listCategory'=>$listCategory,'category'=>$category,'listAddress'=>$listAddress]);

	}

	public function showJobDetail($id){
		$url =  URL::current();
		$jobSummary = JobSummary::find($id);
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.job-detail',['jobSummary'=>$jobSummary,'listCategory'=>$listCategory,'url'=>$url,'listAddress'=>$listAddress]);
	}

	public function showPostJob(){
		$listCategory = Category::all();
		$listAddress = Address::all();
		return view('users.post-job',['listCategory'=>$listCategory,'listAddress'=>$listAddress]);
	}

	public function addJob(Request $request){
		$jobSummary = new JobSummary;
		$jobDetail = new JobDetail;

		$jobDetail->salary = $request->salary;
		$jobDetail->experience = $request->experience;
		$jobDetail->education = $request->education;
		$jobDetail->quantity = $request->quantity;
		$jobDetail->position = $request->position;
		$jobDetail->gender = $request->gender;
		$jobDetail->age = $request->age;
		$jobDetail->expiration_date = $request->expiration_date;
		$jobDetail->job_description = $request->job_description;
		$jobDetail->benefit = $request->benefit;
		$jobDetail->other_requirement = $request->other_requirement;
		$jobDetail->save();

		$jobSummary->title = $request->title;
		$jobSummary->description = $request->description;
		$jobSummary->category_id = $request->category_id;
		$jobSummary->company_id = Auth::user()->company_id;
		$jobSummary->address_id = $request->address_id;
		$jobSummary->user_id = Auth::user()->id;
		$jobSummary->job_detail_id = $jobDetail->id;
		$jobSummary->save();

		return response()->json(["error"=>false]);


	}

	public function sendCV(Request $request){
		$rules = [
			
			'cv' => 'required'
		];
		$messages = [
			'required'=> 'Bạn chưa upload CV',
			
		];
		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()
			], 200);
    		// return redirect()->back()->withErrors($validator)->withInput();
		} 
/*		if(!$request->hasFile('cv')){
			$errors = new MessageBag(['logoCompany' => 'Bạn chưa upload CV']);
			return response()->json(['error'=>true,'message'=> $errors]);
		}*/
		$request->file('cv')->move(
			'cv', //nơi cần lưu
			$request->file('cv')->getClientOriginalName()
		);
		$cv = new ApplyCV;
		$cv->user_id = $request->user_id;
		$cv->job_summary_id = $request->job_id;
		$cv->cv = "cv/".$request->file('cv')->getClientOriginalName();
		$cv->save();
		return response()->json(['error'=>false]);

	}
}
