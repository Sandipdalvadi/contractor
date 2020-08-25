<?php 

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class SiteSetting extends Authenticatable
{


	public $timestamps = false;
	protected $table = 'site_setting';
	
    protected $fillable = [
        'about_en',
        'about_ur',
        'about_ar',
        'site_logo',
        'map_api_key',
        'phone',
        'email'
    ];
    protected $primaryKey = 'id';
	
}
