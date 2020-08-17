<?php 

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{


	public $timestamps = false;
	protected $table = 'category';
	
    protected $fillable = ['name_en','name_ar','name_ur','image','status','created_at','updated_at'];
    protected $primaryKey = 'id';
	
}
