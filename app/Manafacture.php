<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manafacture extends Model
{
    protected $table = 'manafacture';
    public function product(){
    	return $this->hasMany('App\Product');
    }
}
