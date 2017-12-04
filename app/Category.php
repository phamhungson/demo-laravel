<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'product_catalog';
  
    protected $primaryKey = 'id';
 
	public function Product(){
		return $this->hasMany('App\Product','id','product_id');
	}
}
