@extends('layouts.private')



@section('content')



<div class="container py-5">

    <div class="row">

        <div class="col-md-12 mx-auto">

            <div class="pull-left">

                <h2>Create New Job</h2>

         </div>

      
        </div>

    </div>

</div>





@if (count($errors) > 0)

<div class="container">

    <div class="row">

  <div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

</div>

</div>

@endif





{!! Form::open(array('route' => 'jobs.store','method'=>'POST')) !!}



<div class="container">

    <div class="row">

        <div class="col-md-12 mx-auto">

        <div class="form-group row">

        <div class="col-sm-6">

            <label for="inputFirstname">Status</label>

            {!! Form::select('status', $lookups,'', array('class' => 'form-control')) !!}

        </div>

        <div class="col-sm-6">

                <label for="inputFirstname">Title</label>

               {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}

            </div>

        </div>

        <div class="form-group row">

            <div class="col-sm-6">

                <label for="inputFirstname">City/Location</label>

                 {!! Form::text('city', null, array('placeholder' => 'City/Location','class' => 'form-control')) !!}

           </div>

           <div class="col-sm-6">

                <label for="inputFirstname">State/Province</label>

                {!! Form::text('state_province', null, array('placeholder' => 'State/Province','class' => 'form-control')) !!}

            </div>

        </div>



        <div class="form-group row">

            <div class="col-sm-6">

                <label for="inputFirstname">Zip/Postal Code</label>

                {!! Form::text('zip_postal', null, array('placeholder' => 'Zip/Postal Code','class' => 'form-control')) !!}

           </div>

            <div class="col-sm-6">

                <label for="inputFirstname">Summary</label>

                {!! Form::textarea('summary', null, array('placeholder' => 'Summary','class' => 'form-control','rows' => 2)) !!}

            </div>

        </div>



         <div class="form-group row">

  

            <div class="col-sm-6">

                <label for="inputFirstname">Company</label>

                {!! Form::select('company', [null=>'Please Select'] + $companies,'null', array('class' => 'form-control')) !!}

           </div>

              <div class="col-sm-6">

                <label for="inputFirstname">Details</label>

                {!! Form::textarea('details', null, array('placeholder' => 'Details','class' => 'form-control','rows' => 2)) !!}

            </div>

        </div>



         <div class="form-group row">

         

            <div class="col-sm-6">

                <label for="inputFirstname">Employment Type</label>

               {!! Form::select('type', $employments,'', array('class' => 'form-control')) !!}

           </div>

            <div class="col-sm-6">

                <label for="inputFirstname">Compensation Type</label>

               {!! Form::select('compensation_type', $rates,'', array('class' => 'form-control rate')) !!}

            </div>

        </div>



         <div class="form-group row">

            <div class="col-sm-6  salary_type rate_type" style="display:none">

                <label for="inputFirstname">Salary</label>

                {!! Form::text('salary', null, array('placeholder' => 'Salary','class' => 'form-control')) !!}

           </div>

             <div class="col-sm-6 hourly_rate rate_type">

                <label for="inputFirstname">Hourly Rate</label>

                {!! Form::text('hourly_rate', null, array('placeholder' => 'Hourly Rate','class' => 'form-control')) !!}

            </div>


            <div class="col-sm-6">

                <label for="inputFirstname">Posting date</label>

                 {!! Form::text('posting_date', null, array('placeholder' => 'Posting date','class' => 'form-control datepicker')) !!}

           </div>

        </div>

         <div class="col-sm-12">

                <label for="inputFirstname">Note</label>

                {!! Form::textarea('notes', null, ['class' => 'form-control', 'rows' => 4]) !!}

            </div>
			<br/>
        <div class="col-sm-12 text-center">

        <button type="submit" class="btn btn-primary px-4">Save</button>
		
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
