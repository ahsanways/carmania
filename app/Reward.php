<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
	protected $guarded = [];
    public $timestamps = true;
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
