<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
class AddressController extends Controller
{
    //
	public function findByAddress(Request $request){
		
		$arrAddress = Address::where('name','like','%'.$request->address.'%')->get()->toArray();
		$addess = array();
		foreach ($arrAddress as $value) {
			# code..
			$address[] = $value['name'];
		}

		return response()->json(['address'=>$address]);
	}
}
