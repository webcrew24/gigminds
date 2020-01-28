<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class Job extends Authenticatable
{
    use Notifiable;
    use HasRoles;
	
	const EMPLOYMENT_TYPES = [
	'Full-time' => 'Full-time',
	'Part-time' => 'Part-time',
	'Contract' => 'Contract',
	'Temporary' => 'Temporary',
	'Seasonal' => 'Seasonal',
	'Internship' => 'Internship',
	];
	const RATE_TYPES = [
	'Salary' => 'Salary',
	'Hourly' => 'Hourly'
	];
	
	 protected $fillable = [
        'reference_id', 'city', 'zip_postal', 'state_province', 'query', 'title', 'company', 'location', 'summary', 'salary',
        'url', 'posting_date', 'details', 'keywords_frequency', 'source', 'compensation_type', 'hourly_rate', 'org_id', 'uuid','status', 'notes', 'type'
    ];
    public function skills()
	{
		return $this->hasMany('App\Job_Skill', 'job_id','id');
	}
    public static function filterJobs($filers)
	{
		
		 $query = Job::with('skills:job_id,name');
		foreach($filers as $key => $value){
			switch ($key) {
				case 'status':
					$query->whereIn('status', $value);
					break;
				case 'city':
					$query->whereIn('city', $value);
				break;
				case 'type':
					$query->whereIn('type', $value);
				break;
				case 'source':
					$query->whereIn('source', $value);
				break;
				case 'search':
					$query->where('title', 'like', '%'.$value.'%');
				break;
				case 'skillsFilters':
					$query->join('job_skills','job_skills.job_id', 'jobs.id')->whereIn('skill_id', $value);
				break;
			}
		}
		if(empty($filers['search']) && empty($filers['status'])){
			$query->where('status', 'Active');
		}
		return $query->orderBy('jobs.id','DESC')->paginate(8);
	}
}
