<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $table = "address";
    public function companies()
    {
        return $this->hasMany('App\Company', 'id_address', 'id');
    }
    public $timestamps = false;
   
}
