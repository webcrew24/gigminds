<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>gigminds | careers &middot; marketplace &middot; news</title>
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}" ></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	@yield('css')
</head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-lg bg-dark text-white p-2 m-0">
            <div class="container">
                <a class="navbar-brand p-0 m-0 pr-5" href="{{ url('/') }}">
                    <span style="font-size: 36px; color: white;">
						<img src="images/gm-text-transparent-white.png" style="height: 40px;"/>
					</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest

                        @else
					@if(Auth::user()->roles[0]->pivot->role_id == 1)
					<li class="nav-item" style="width:90px; border-left: 1px solid white;"">
                            <a class="nav-link text-center m-0 p-0 mt-2" href="{{url('/')}}">
                                <span style="font-size: 24px; color: white;">
                                    <i class="fa fa-outline fa-briefcase p-0 m-0">
                                        <br/><span style="font-size: 13px; font-family: roboto, sans-serif;">Home</span>
                                    </i>
                                </span>
                            </a>
                        </li>
					<li class="nav-item" style="width:90px; border-left: 1px solid white;"">
                            <a class="nav-link text-center m-0 p-0 mt-2" href="{{url('/jobs')}}">
                                <span style="font-size: 24px; color: white;">
                                    <i class="fa fa-outline fa-briefcase p-0 m-0">
                                        <br/><span style="font-size: 13px; font-family: roboto, sans-serif;">Jobs</span>
                                    </i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item" style="width:90px; border-right: 1px dotted white; border-left: 1px dotted white;">
                            <a class="nav-link text-center m-0 p-0 mt-2" href="{{url('/')}}">
                                <span style="font-size: 24px; color: white;">
                                    <i class="fa fa-outline fa-users p-0 m-0">
                                    <br/><span style="font-size: 13px; font-family: roboto, sans-serif;">Companies</span>
                                    </i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item" style="width:90px; border-right: 1px dotted white;">
                            <a class="nav-link text-center m-0 p-0 mt-2" href="{{url('/')}}">
                                <span style="font-size: 24px; color: white;">
                                    <i class="fa fa-outline fa-comments p-0 m-0">
                                    <br/><span style="font-size: 13px; font-family: roboto, sans-serif;">Contacts</span>
                                    </i>
                                </span>
                            </a>
                        </li> 
						
					@else
					<li class="nav-item" style="width:90px; border-right: 1px dotted white;">
                            <a class="nav-link text-center m-0 p-0 mt-2" href="{{url('/')}}">
                                <span style="font-size: 24px; color: white;">
                                    <i class="fa fa-outline fa-comments p-0 m-0">
                                    <br/><span style="font-size: 13px; font-family: roboto, sans-serif;">Home</span>
                                    </i>
                                </span>
                            </a>
                        </li>
					@endif
                        
                        <div class="form-inline my-2 my-lg-0 has-search pl-4">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>

                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-info small upper" href="{{ route('register') }}">Join Now</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: #444;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
										@if(Auth::user()->roles[0]->pivot->role_id == 1)
                                    <hr/>
                                    <a class="dropdown-item" style="color: black;" href=#><strong>Admin</strong></a>
                                    <a class="dropdown-item" style="color: #444;" href="{{ route('users.index') }}">Manage Users</a>
                                    <a class="dropdown-item" style="color: #444;" href="{{ route('roles.index') }}">Manage Role</a>
                                    <a class="dropdown-item" style="color: #444;" href="{{ route('resumes.index') }}">Resumes</a>
									@endif
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
	<script>
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	</script>
	@yield('script')
	
</body>
</html>
