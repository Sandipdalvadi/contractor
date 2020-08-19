<?php 

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserDetails extends Authenticatable
{


	public $timestamps = false;
	protected $table = 'user_details';
	
    protected $fillable = ['rate_per_hour','selected_category','country','about','personal_characteristics','linkedin_url','name_url','facebook_url','twitter_url'];
    protected $primaryKey = 'id';
	public function hasOneCountry()
    {
        return $this->hasOne('App\Model\Country', 'id', 'country');
    }
}
