@extends('front.layouts.masterwithoutslider')
@section('content')
<!-- BreadCrumb Area Start -->
	<section id="Mediflexbreadcrumb" class="Mediflexbreadcrumb extraPaddimg">
			<div class="bcoverlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="Content">
							<h2>
								Login
							</h2>
							<div class="links">
								<ul>
									<li>
										<a href="index.html">Home</a>
									</li>
									<li>
										<span>/</span>
									</li>
									<li>
										<a class="active" href="login.html">Login</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
	<!--  BreadCrumb Area Start  -->


	<!-- SignIn Area Start -->
	<section id="logRegForm" class="logRegForm"> 
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-10">
							<div class="contact_form_wrappre2">
									<div class="row justify-content-center">
											<div class="col-lg-9">
												<div class="sectionHeader">
													<h2>
														Login
													</h2>
												</div>
											</div>
										</div>
									<form method="POST" action="{{ route('login') }}">
                      					  @csrf
											<div class="inputArea">
												<div class="form-row">
													<div class="col">
														<div class="input-group">
															<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

							                                @if ($errors->has('email'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('email') }}</strong>
							                                    </span>
							                                @endif
															<div class="input-group-prepend">
																<span class="input-group-text" id="Site">
																	<i class="fas fa-user"></i>
																</span>
															</div>
				
														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="col">
														<div class="input-group">
															 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

							                                @if ($errors->has('password'))
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $errors->first('password') }}</strong>
							                                    </span>
							                                @endif
																<span class="input-group-text" id="url">
																	<i class="fas fa-key"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-6">
														<button class="loginnow" type="submit">Login Now</button>
													</div>
													<div class="col-md-6">
														<a href="register.html" class="lostpass" >Register</a>
													</div>
												</div>
											</div>
										</form>
							</div>
					</div>
				</div>
			</div>
		</section>
		<!-- SignIn Area Start -->
@endsection