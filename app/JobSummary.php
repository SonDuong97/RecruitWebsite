<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSummary extends Model
{
	protected $table = 'job_summaries';
	public function address(){
		return $this->belongsTo('App\Address','id_address','id');
	}
	public function company(){
		return $this->belongsTo('App\Company','id_company','id');
	}
	public function category(){
		return $this->belongsTo('App\Category','id_category','id');
	}
	public function user(){
		return $this->belongsTo('App\User','id_user','id');
	}

	public function detail(){
    	return $this->belongsTo('App\JobDetail','id_job_detail','id');
    	/*return $this->belongsto('App\Posts','forigen_key','local_key');*/
    }
}
