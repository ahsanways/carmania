<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ads()
    {
        return $this->hasMany('App\Ad');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function searches()
    {
        return $this->hasMany('App\Search');
    }

    public function buyer_requests()
    {
        return $this->hasMany('App\Buyer_request');
    }

    public function wishlists()
    {
        return $this->hasMany('App\Wishlist');
    }
    
    public function reward()
    {
        return $this->hasOne('App\Reward');
    }
}
