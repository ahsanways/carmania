<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer_request extends Model
{
	protected $guarded = [];
    public $timestamps = true;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
