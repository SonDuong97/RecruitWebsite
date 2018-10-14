<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    //
    public function findByCompany(Request $request){
		
		$arrCompany = Company::where('name','like','%'.$request->company.'%')->get()->toArray();
		$company = array();
		foreach ($arrCompany as $value) {
			# code..
			$company[] = $value['name'];
		}

		return response()->json(['company'=>$company]);
	}
}
