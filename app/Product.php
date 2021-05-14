<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];
    public $timestamps = true; 
       
    public function ads()
    {
        return $this->hasMany('App\Ad');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    
}
