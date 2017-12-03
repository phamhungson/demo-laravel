<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='product';
 
    protected $primaryKey = 'product_id';
 
   
	public function Category(){
		return $this->belongsTo('App\Category','product_catalog_id','product_catalog_id');
	}
	public fucntion manafacture(){
		return $this->belongsTo('App\Manafacture','manafacture_id','id');
	}
}
