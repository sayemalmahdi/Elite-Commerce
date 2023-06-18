@extends('frontend.master')

@section('title','Login/Register Page')

@section('mainContent')

	<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div>
            </nav>

            <div class="login-page bg-image pt-8 pb-8 pt-md-7 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('{{ asset('frontend')}}/assets/images/backgrounds/login-bg.jpg')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    <li class="nav-item">
							        <a class="nav-link active" id="signin-tab-2" data-toggle="tab" href="#signin-2" role="tab" aria-controls="signin-2" aria-selected="true">Sign In</a>
							    </li>
							    <li class="nav-item">
							        <!-- <a class="nav-link" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="false">Register</a> -->
							        
							        <a class="nav-link" href="{{ url('/custom-register') }}" role="tab" aria-controls="register-2" aria-selected="false">Register</a>
							    </li>
							</ul>
							<div class="tab-content">

						<!-- Login Section Start -->

							    <div class="tab-pane fade show active" id="signin-2" role="tabpanel" aria-labelledby="signin-tab-2">


									<form method="POST" action="{{ route('login') }}">
	                        		@csrf
							    		
							    		<div>
								    		<div class="form-group">
								    			<label for="email">Email address *</label>
								    			<!-- <input type="email" class="form-control" id="email" name="email" required> -->
								    			
								    			<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
								    			<!-- <input type="password" class="form-control" id="password" name="password" required> -->
								    			
								    			<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

								    		</div>

								    		@error('password')
			                                    <span style="color: blue;" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
							    		</div>


							    		<div class="form-footer">
							    			<button type="submit" class="btn btn-outline-primary-2">
			                					<span>LOG IN</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>

			                				<div class="custom-control custom-checkbox">
												<!-- <input type="checkbox" class="custom-control-input" id="signin-remember-2"> -->

												<input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

												<label class="custom-control-label" for="signin-remember-2">Remember Me</label>
											</div>
											<a href="#" class="forgot-link">Forgot Your Password?</a>
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
								    		</div><!-- End .col-6 -->
								    		<div class="col-sm-6">
								    			<a href="#" class="btn btn-login btn-f">
								    				<i class="icon-facebook-f"></i>
								    				Login With Facebook
								    			</a>
								    		</div>
								    	</div>
							    	</div>

							    </div>

						<!-- Login Section End -->



							    
							    <!-- Register Section Start -->


							    <!-- Register Section End -->

							</div>
						</div>
            		</div>
            	</div>
            </div>
        </main>

@endsection
