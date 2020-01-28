<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Skill extends Model
{
    //
    protected $fillable = [
        'type', 'source', 'name', 'keyword', 'min_threshold'
    ];
	 public function skills()
	{
		return $this->hasMany('App\Job_Skill', 'skill_id','id');
	}
	 public static function jobFilters()
	 {
		 $filters = Skill::with('skills:skill_id')->select('id','type','keyword_group')->groupBy('type', 'keyword_group')->groupBy('type', 'keyword_group')->get();
	 
		return static::arrangeFilters($filters);
	 }
	 public static function arrangeFilters($filters)
	 {
		 $filterArray = [];
		 foreach($filters as $filter){
			$filterArray[$filter->type][$filter->id]['skillName'] = $filter->keyword_group;
			$filterArray[$filter->type][$filter->id]['count'] = count($filter->skills);
		 }
		 return $filterArray;
		 
	 }
}
