<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    protected $table = 'ship';

    public function order(){
    	return $this->beLongsTo('App\Order','order_id','id');
    }
}
