<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public function user()
    {
    	return $this->beLongsTo('App\User','user_id','id');
    }
}
