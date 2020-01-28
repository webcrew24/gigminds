<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\Lookup;
use App\Skill;
use App\Job_Skill;
use App\Organization;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Auth;
use Illuminate\Support\Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:job-list|job-view|job-create|job-edit|job-delete', ['only' => ['index','store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

			
     $data = Job::filterJobs($request->all());
      	if ($request->ajax()) {
    		$view = view('jobs.jobListing',compact('data'))->render();
            return response()->json(['html'=>$view]);
        }
		$cityFilters = Lookup::with('city:id,city')->select('name','value')->where('type', 'Scrape City')->get();
		$typeFilters = Lookup::with('type:id,type')->select('name','value')->where('type', 'Job Type')->get();
		$sourceFilters = Lookup::with('source:id,source')->select('name','value')->where('type', 'Job Source')->get();
		
		$statusFilters['Active'] = Job::where('status','Active')->count();
		$statusFilters['Inactive'] = Job::where('status','Inactive')->count();
		$filters = Skill::jobFilters();
        return view('jobs.index', compact('data', 'filters', 'cityFilters', 'statusFilters', 'typeFilters', 'sourceFilters'));
            
    }	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobFilters(Request $request)
    {
		$data = Job::filterJobs($request->all());
		$view = view('jobs.jobListing',compact('data'))->render();
        return response()->json(['html'=>$view]);
    }
    
    public function create()
    {
	$employments = Job::EMPLOYMENT_TYPES;
	$rates = Job::RATE_TYPES;
	 $companies = Organization::orderBy('name')->pluck('name','id')->toArray();
	 $lookups = Lookup::where('type', 'Job Status')->pluck('name','name');
	 return view('jobs.create', compact('companies', 'employments', 'rates', 'lookups'));
    }
    
    
    public function jobUpdate(Request $request)
    {
		$job = Job::where('id', $request->input('id'))->first();
		$status = 'Active';
		if($job->status == 'Active'){
			$status = 'Inactive';
		}
		echo $status;
		  Job::where('id', $request->input('id'))->update(['status'=> $status]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	 $this->validate($request, [
            'city' => 'required',
            'zip_postal' => 'required',
            'state_province' => 'required',
            'title' => 'required',
            'company' => 'required',
            'summary' => 'required',
            'posting_date' => 'required',
            'details' => 'required',
            'status' => 'required',
            'compensation_type' => 'required'
        ]);
        $uuid = Str::uuid()->toString();
		$records = $request->except(['_token']);
		
		$organization = Organization::where('id', $records['company'])->first();
		$records['reference_id'] = Auth::user()->id;
		$records['company'] = $organization->name;
        $records['location'] = $records['city'];
        $records['source'] = 'Internal';
        $records['uuid'] = $uuid;
		Job::create($records);
		return redirect()->route('jobs.index')->with('success','Job created successfully');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {
        $job = Job::find($id);
	
        return view('jobs.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $job = Job::find($id);
		$employments = Job::EMPLOYMENT_TYPES;
		$rates = Job::RATE_TYPES;
		$companies = Organization::orderBy('name')->pluck('name','id')->toArray();
		$lookups = Lookup::where('type', 'Job Status')->pluck('name','name');
        return view('jobs.edit',compact('companies', 'employments', 'rates', 'lookups', 'job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
            'city' => 'required',
            'zip_postal' => 'required',
            'state_province' => 'required',
            'title' => 'required',
            'company' => 'required',
            'summary' => 'required',
            'posting_date' => 'required',
            'details' => 'required',
            'status' => 'required',
            'compensation_type' => 'required'
        ]);
        $input = $request->except(['_token', '_method']);
		$organization = Organization::where('id', $input['company'])->first();
		$input['company'] = $organization->name;
        $input['location'] = $input['city'];
		
        Job::where('id', $id)->update($input);
       return redirect()->route('jobs.index')
                        ->with('success','Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::find($id)->delete();
        return redirect()->route('jobs.index')
                        ->with('success','Job deleted successfully');
    }
}
