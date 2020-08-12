<?php 

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{


	public $timestamps = false;
	protected $table = 'category';
	
    protected $fillable = ['name_eng','name_ar','image','created_at','updated_at'];
    protected $primaryKey = 'id';
	
}
