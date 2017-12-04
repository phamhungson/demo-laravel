<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='product';
 
    protected $primaryKey = 'product_id';
 
   
	public function Category(){
		return $this->belongsTo('App\Category','product_catalog_id','id');
	}
	public function manafacture(){
		return $this->belongsTo('App\Manafacture','manafacture_id','id');
	}
}
