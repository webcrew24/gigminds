<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
    protected $fillable = [
        'type', 'source', 'name', 'value', 'sort_order', 'default' ];
    
    public function city()
	{
		return $this->hasMany('App\Job', 'city','name');
	}
    public function type()
	{
		return $this->hasMany('App\Job', 'type','name');
	}
    public function source()
	{
		return $this->hasMany('App\Job', 'source','name');
	}
}
