@extends('layouts.private')

@section('content')

<div class="container">
    <div class="row mt-4">
     <div class="col-md-12">
            <a class="btn btn-warning pull-right btn-lg mb-lg-2" href="{{ route('jobs.create') }}">Add New Job</a>
        </div>
        <div class="col-3 left-container">
			 <form id="JobFiltersForm">
            <input type="text" class="form-control" name="search" placeholder="Search Jobs">
             <input type="button" name="search" onclick="searchFilters()" value="Search" class="btn btn-primary margintop">
            <!-- Default unchecked -->
          
          <div class="panel-bod margintop" >
                    @foreach($filters as $key => $filter)
            <article class="card-group-item">   
				<header class="card-header">
			 {{$key}}
			</header>
			
		<div class="filter-content">
			<div class="card-body">
				 @foreach($filter as $keyId => $keyWords)
				 @if($keyWords['skillName'] != "")
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" name="skillsFilters[]" value="{{$keyId}}">
				  <span class="form-check-label">
				    {{$keyWords['skillName']. ' ('.$keyWords['count'].')'}}
				  </span>
				</label> <!-- form-check.// -->
				@endif
				@endforeach
				
			</div> <!-- card-body.// -->
		</div>
	</article> 
	@endforeach
             
            <article class="card-group-item">   
				<header class="card-header">
			Location
			</header>
			
		<div class="filter-content">
			<div class="card-body">
				 @foreach($cityFilters as $city)
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" name="city[]" value="{{$city->name}}">
				  <span class="form-check-label">
				    {{$city->name. ' ('.count($city->city).')'}}
				  </span>
				</label> <!-- form-check.// -->
				@endforeach
				
			</div> <!-- card-body.// -->
		</div>
	</article>
	 <article class="card-group-item">   
				<header class="card-header">
			Job Type
			</header>
			
		<div class="filter-content">
			<div class="card-body">
				 @foreach($typeFilters as $type)
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" name="type[]" value="{{$type->name}}">
				  <span class="form-check-label">
				    {{$type->name. ' ('.count($type->type).')'}}
				  </span>
				</label> <!-- form-check.// -->
				@endforeach
				
			</div> <!-- card-body.// -->
		</div>
	</article> 
	 <article class="card-group-item">   
				<header class="card-header">
			Source
			</header>
			
		<div class="filter-content">
			<div class="card-body">
				 @foreach($sourceFilters as $source)
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" name="source[]" value="{{$source->name}}">
				  <span class="form-check-label">
				    {{$source->name. ' ('.count($source->source).')'}}
				  </span>
				</label> <!-- form-check.// -->
				@endforeach
				
			</div> <!-- card-body.// -->
		</div>
	</article>             
	 <article class="card-group-item">   
				<header class="card-header">
			Status
			</header>
			
		<div class="filter-content">
			<div class="card-body">
				 @foreach($statusFilters as $name => $status)
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" name="status[]" value="{{$name}}">
				  <span class="form-check-label">
				    {{$name. ' ('.$status.')'}}
				  </span>
				</label> <!-- form-check.// -->
				@endforeach
				
			</div> <!-- card-body.// -->
		</div>
	</article>          
        </div>
        </form>
        </div>
		<div class="col-9 ajax-load">
			@include('jobs/jobListing')
        </div>
      
    </div>

</div>

@section('script')
<script>
var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
	        loadMoreData(page);
	    }
	});


	function loadMoreData(page){
		let filters = $('#JobFiltersForm').serializeArray();
		$.get('?page=' + page,filters, function(data){
				$('.ajax-load').append(data.html);
			});
	}
	function jobupdate(event, id){
		let txt = 'show';
		if($(event).closest('.jobListingContainer').hasClass('disabledbutton')){
			txt = 'Hide';
		}
		$(event).html(txt);
		$(event).closest('.jobListingContainer').toggleClass('disabledbutton');
		$.post("{{route('jobUpdate')}}",{'id':id}, function(){
			});

	}
	
	$('input[type="checkbox"]').click(function(){
		searchFilters();
		});
	function searchFilters(){
		
		let filters = $('#JobFiltersForm').serializeArray();
			$.post("{{route('jobFilters')}}",filters, function(data){
				$('.ajax-load').html(data.html);
			});
			page = 1;

	}
</script>

@endsection
@endsection
