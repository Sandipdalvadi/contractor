<?php 

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserCategory extends Authenticatable
{


	public $timestamps = false;
	protected $table = 'user_category';
	
    protected $fillable = ['user_id','category_id'];
    protected $primaryKey = 'id';
	public function hasOneCategory()
    {
        return $this->hasOne('App\Model\Category', 'id', 'category_id');
    }
}
