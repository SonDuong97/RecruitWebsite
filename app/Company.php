<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = "companies";
    public function jobSummary(){
    	return $this->hasMany('App\JobSummary','id_company','id');
    }
}
