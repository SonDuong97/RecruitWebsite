<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserApplyController extends Controller
{
	public function listUserApply(){
		protected $table = 'cv_apply';
		public function userApply(){
			return $this->belongsToMany('App\User', 'cv_apply', 'user_id', 'job_summary_id');
		}
	}
}
