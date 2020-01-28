@extends('layouts.private')

@section('content')

<div class="container">
    <div class="row mt-4">
        @foreach ($data as $key => $resume)
        <div class="col-4 p-1 m-0">
            <div class="card-deck">
                <div class="card" style="background-color: #ffffff;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $resume->first_name }} {{ $resume->last_name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $resume->email }}</h6>
                        <p class="card-text"></p>
                        <a href="#" class="card-link">View Resume</a>
                        <a href="#" class="card-link">...</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $data->links() }}
    </div>
</div>

@endsection