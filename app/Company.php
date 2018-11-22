<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = "companies";
    public $timestamps = false;
    public function jobSummary(){
    	return $this->hasMany('App\JobSummary','company_id','id');
    }
}
