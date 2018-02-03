<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //use Notifiable;
    public function ratings()
    {
        return $this->belongsToMany('App\Rating')->withTimestamps();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
		'email',
		'password',
		'importance_of_price',
		'importance_of_music',
		'importance_of_decor',
		'importance_of_variety',
		'importance_of_taste'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}