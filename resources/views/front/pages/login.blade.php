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
									<form action="http://rexbd.net/html/mediflex/medical/add_banner.html">
											<div class="inputArea">
												<div class="form-row">
													<div class="col">
														<div class="input-group">
															<input type="text" class="form-control" placeholder="Enter username or email" aria-describedby="Site" required>
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
															<input type="password" class="form-control" placeholder="Your password" aria-describedby="url" required>
															<div class="input-group-prepend">
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