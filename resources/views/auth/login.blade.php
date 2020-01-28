@extends('layouts.private')

@section('content')
<div class="container h-100" style="margin-top: 100px;">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<span style="font-size: 100px; color: white;">
							<img src="images/gm-face-transparent-white.png" style="height: 150px; padding-bottom: 20px;" />
						</span>
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
                    <form method="POST" action="{{ route('login') }}"> 
                        @csrf 
						<div class="input-group mb-3" style="width: 300px;">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-key"></i></span>
							</div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">

                     <button type="submit" class="btn login_btn">
                            {{ __('Login') }}
                        </button>
                     
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<span>Don't have an account? <a class="btn btn-link" href="{{ route('register') }}">Join Now</a></span>
					</div>
					<div class="d-flex justify-content-center links">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
