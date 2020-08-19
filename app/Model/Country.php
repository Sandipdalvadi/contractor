<?php 

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Country extends Authenticatable
{


	public $timestamps = false;
	protected $table = 'country';
	
    protected $fillable = ['name'];
    protected $primaryKey = 'id';
	
}
