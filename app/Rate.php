<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
	protected $table = 'rate';

	 public function user(){
    	return $this->beLongsTo('App\User');
    }
    public function product(){
    	return $this->beLongsTo('App\Product');
    }
}
