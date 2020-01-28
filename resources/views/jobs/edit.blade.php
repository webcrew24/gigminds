@extends('layouts.private')



@section('content')





<div class="container py-5">

    <div class="row">

        <div class="col-md-12 mx-auto">

            <div class="pull-left">

                <h2>Update Job</h2>

         </div>

         <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>

        </div>

        </div>

    </div>

</div>



@if (count($errors) > 0)

<div class="container">

    <div class="row">

  <div class="alert alert-danger">

    <label for="inputFirstname">Whoops!</label> There were some problems with your input.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

</div>

</div>

@endif

{!! Form::open(array('route' => ['jobs.update', $job->id],'method'=>'Put')) !!}




<div class="container">

    <div class="row">

        <div class="col-md-12 mx-auto">

        <div class="form-group row">

        <div class="col-sm-6">

            <label for="inputFirstname">Status</label>

            {!! Form::select('status', $lookups, $job->status , array('class' => 'form-control')) !!}

        </div>

        <div class="col-sm-6">

                <label for="inputFirstname">Title</label>

               {!! Form::text('title', $job->title, array('placeholder' => 'Title','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="form-group row">

            <div class="col-sm-6">

                <label for="inputFirstname">City/Location</label>

                 {!! Form::text('city', $job->city, array('placeholder' => 'City/Location','class' => 'form-control')) !!}

           </div>

           <div class="col-sm-6">

                <label for="inputFirstname">State/Province</label>

                {!! Form::text('state_province', $job->state_province, array('placeholder' => 'State/Province','class' => 'form-control')) !!}

            </div>

        </div>



        <div class="form-group row">

            <div class="col-sm-6">

                <label for="inputFirstname">Zip/Postal Code</label>

                {!! Form::text('zip_postal', $job->zip_postal, array('placeholder' => 'Zip/Postal Code','class' => 'form-control')) !!}

           </div>

            <div class="col-sm-6">

                <label for="inputFirstname">Summary</label>

                {!! Form::textarea('summary', $job->summary, array('placeholder' => 'Summary','class' => 'form-control','rows' => 2)) !!}

            </div>

        </div>



         <div class="form-group row">

  

            <div class="col-sm-6">

                <label for="inputFirstname">Company</label>
					
                {!! Form::select('company', $companies,array_search($job->company,$companies), array('class' => 'form-control')) !!}

           </div>

              <div class="col-sm-6">

                <label for="inputFirstname">Details</label>

                {!! Form::textarea('details', $job->details, array('placeholder' => 'Details','class' => 'form-control','rows' => 2)) !!}

            </div>

        </div>



         <div class="form-group row">

         

            <div class="col-sm-6">

                <label for="inputFirstname">Employment Type</label>

               {!! Form::select('type', $employments,$job->type, array('class' => 'form-control')) !!}

           </div>

            <div class="col-sm-6">

                <label for="inputFirstname">Compensation Type</label>

               {!! Form::select('compensation_type', $rates, $job->compensation_type, array('class' => 'form-control rate')) !!}

            </div>

        </div>



         <div class="form-group row">

            <div class="col-sm-6  salary_type rate_type" style="@if($job->compensation_type == 'Salary'){{'display:block'}}@else{{'display:none'}}@endif">

                <label for="inputFirstname">Salary</label>

                {!! Form::text('salary', $job->salary, array('placeholder' => 'Salary','class' => 'form-control')) !!}

           </div>

             <div class="col-sm-6 hourly_rate rate_type" style="@if($job->compensation_type == 'Hourly'){{'display:block'}}@else{{'display:none'}}@endif">

                <label for="inputFirstname">Hourly Rate</label>

                {!! Form::text('hourly_rate', $job->hourly_rate, array('placeholder' => 'Hourly Rate','class' => 'form-control')) !!}

            </div>


            <div class="col-sm-6">

                <label for="inputFirstname">Posting date</label>

                 {!! Form::text('posting_date', $job->posting_date, array('placeholder' => 'Posting date','class' => 'form-control datepicker')) !!}

           </div>

        </div>

         <div class="col-sm-12">

                <label for="inputFirstname">Note</label>

                {!! Form::textarea('notes', $job->notes, ['class' => 'form-control', 'rows' => 4]) !!}

            </div>
			<br/>
        <div class="col-sm-12 text-center">

        <button type="submit" class="btn btn-primary px-4">Update</button>
		
        <a href="{{route('jobs.index')}}" class="btn btn-secondary px-4">Cancel</a>
	
		<div>

</div>



</div>

</div>
</div>
</div>

{!! Form::close() !!}

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>

@section('css')

<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">

@endsection

@section('script')

  <script src="{{ asset('js/jquery-ui.js') }}"></script>

@endsection

<script>

$( function() {

    $( ".datepicker" ).datepicker();

  } );

$('.rate').change(function(){

$('.rate_type').hide();

	if($(this).val() == 'Hourly'){

		$('.hourly_rate').show();

	}else{

		$('.salary_type').show();

	}

});

</script>



@endsection
