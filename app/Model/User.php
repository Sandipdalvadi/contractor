<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'password',
        'is_email_verified',
        'is_mobile_verified',
        'address',
        'image',
        'language_code',
        'is_image_link',
        'identity',
        'facebook_id',
        'google_id',
        'apple_id',
        'is_social',
        'is_online',
        'device_token',
        'device',
        'remember_token',
        'created_at',
        'updated_at',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
