@extends('frontend.master')

@section('title','Login/Register Page')

@section('mainContent')

	<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                </div>
            </nav>

            <div class="login-page bg-image pt-8 pb-8 pt-md-7 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('{{ asset('frontend')}}/assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link" href="{{ route('login') }}" role="tab" aria-controls="signin-2" aria-selected="true">Sign In</a>
							    </li>
							    <li class="nav-item">
							    	<!-- <a class="nav-link" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a> -->
							    	
							        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a>
							    </li>
							</ul>
						
							<div class="tab-content">

							<!-- Login Section Start -->


							<!-- Login Section End -->

							    





							<!-- Register Section Start -->

							    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
							    	<!-- <form action="#"> -->
							    	
							    	<form method="POST" action="{{ url('/register') }}">
                        			@csrf

							    		<div>
								    		<div class="form-group">
								    			<label for="name">Name *</label>
								    			<!-- <input type="email" class="form-control" id="register-email-2" name="register-email" required> -->

								    			<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
							    			</div>
							    			@error('name')
			                                    <span style="color: red;" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
							    		</div>

							    		<div>
								    		<div class="form-group">
								    			<label for="username">User Name * </label>
								    			<!-- <input type="email" class="form-control" id="register-email-2" name="register-email" required> -->

								    			<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
							    			</div>
							    			@error('username')
			                                    <span style="color: red;" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
							    		</div>

							    		<div>
								    		<div class="form-group">
								    			<label for="phone">Phone</label>
								    			<!-- <input type="email" class="form-control" id="register-email-2" name="register-email" required> -->

								    			<input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>
							    			</div>
							    			@error('phone')
			                                    <span style="color: red;" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
							    		</div>

							    		<div>
								    		<div class="form-group">
								    			<label for="email">Your email address *</label>
								    			<!-- <input type="email" class="form-control" id="register-email-2" name="register-email" required> -->

								    			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

								    		</div>
								    		@error('email')
			                                    <span style="color: red;" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror			                                
							    		</div>

							    		<div>
								    		<div class="form-group">
								    			<label for="password">Password *</label>
								    			<!-- <input type="password" class="form-control" id="register-password-2" name="register-password" required> -->
								    			<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

								    		</div>
								    		@error('password')
			                                    <span style="color: red;" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror	
							    		</div>

							    		<div>
								    		<div class="form-group">
								    			<label for="password-confirm">Confirm Password *</label>
								    			<!-- <input type="password" class="form-control" id="register-password-2" name="register-password" required> -->
								    			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
								    		</div>								    		
							    		</div>

							    		<div class="form-footer">
							    			<button type="submit" class="btn btn-outline-primary-2">
			                					<span>SIGN UP</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

			                				<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="register-policy-2" required>
												<label class="custom-control-label" for="register-policy-2">I agree to the <a href="#">privacy policy</a> *</label>
											</div>
							    		</div>


							    	</form>
							    	<div class="form-choice">
								    	<p class="text-center">or sign in with</p>
								    	<div class="row">
								    		<div class="col-sm-6">
								    			<a href="#" class="btn btn-login btn-g">
								    				<i class="icon-google"></i>
								    				Login With Google
								    			</a>
								    		</div>
								    		<div class="col-sm-6">
								    			<a href="#" class="btn btn-login  btn-f">
								    				<i class="icon-facebook-f"></i>
								    				Login With Facebook
								    			</a>
								    		</div>
								    	</div>
							    	</div>
							    </div>

							<!-- Register Section End -->

							</div>
						</div>
            		</div>
            	</div>
            </div>
        </main>

@endsection
