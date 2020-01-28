
@foreach ($data as $key => $job)

<div class="box-container col-md-6 jobListingContainer @if($job->status != 'Active'){{'disabledbutton'}}@endif">
	<div class="title">
		<a href="javascript:;"><h3><strong>@if(strlen($job->title) > 60 ) {{substr($job->title, 0, 60)}}....@else{{$job->title }}@endif</strong></h3></a>
	</div>
	 <h6 class="card-subtitle mb-2 text-muted"><strong>{{ $job->company }} | {{ $job->city }}</strong></h6>
	<div class="description">@if(strlen($job->summary) > 255 ) {{substr($job->summary, 0, 255)}}....@else{{$job->summary}}@endif</div>
   
	@if($job->skills)@foreach($job->skills as $skill)<div class="category">{{$skill->name}}</div>@endforeach @endif
	<div class="action">
		<a href="{{route('jobs.edit',$job->id)}}" class="btn btn-primary btn-sm">Edit</a>
		<a class="btn btn-danger btn-sm jobbutton" href="javascript:;" onclick="jobupdate(this,{{$job->id}})">@if($job->status != 'Active'){{'Show'}} @else {{'Hide'}} @endif</a>
	</div>
</div>
   @endforeach



