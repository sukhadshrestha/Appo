@extends('front.layouts.masterwithoutslider')
@section('content')
<!-- BreadCrumb Area Start -->
	<section id="Mediflexbreadcrumb" class="Mediflexbreadcrumb">
			<div class="bcoverlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="Content">
							<h2>
								Contact
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
										<a class="active" href="contact.html">Contact</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
<!--  BreadCrumb Area Start  -->


	
<!--Start Contact Wrap-->
<div class="contact-wrap">
		<div class="container">
			
				<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10">
							<div class="sectionHeader">
								<h2>
									Contact Us
								</h2>
								<span class="sectionSeparator"></span>
								<p>
									when an unknown printer took a galley of type and scrambled it to make a type specimen book.
									the book type of spaciman and scrambled it to make a type specimen book.
								</p>
							</div>
						</div>
					</div>
			<div class="row justify-content-center">
				
			</div>
			<div class="row address">
					<div class="col-lg-8">
						<div class="row">
								<div class="col-12">
										<!--Start Contact Form-->
										<div class="contact-form">
											<form action="http://rexbd.net/html/mediflex/medical/contact.html" id="contact_form_submit" method="POST">
												<div class="row">
													<div class="col-12">
														<div class="form-group form-element">
															<input type="text" class="form-control input-field" id="name" name="name" placeholder="First Name">
														</div>
													</div>
													<div class="col-12">
														<div class="form-group form-element">
															<input type="text" class="form-control input-field" id="lastName" name="lastName" placeholder="Last Name">
														</div>
													</div>
												</div>
												<div class="row">
														<div class="col-12">
															<div class="form-group form-element">
																<input type="email" class="form-control input-field" id="email" name="email" placeholder="Your Email">
															</div>
														</div>
													<div class="col-12">
														<div class="form-group form-element">
															<input type="text" class="form-control input-field" id="phone" name="phone" placeholder="Your Phone">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12">
														<div class="form-group form-element">
															<input type="text" class="form-control input-field" id="subject" name="subject" placeholder="Your Subject">
														</div>
														<div class="form-group form-element">
															<textarea id="message" cols="30" rows="10" class="form-control" name="message" placeholder="Write Your Message"></textarea>
														</div>
													</div>
												</div>
												<div class="contact-frm-btn">
													<button type="submit" class="mr_btn_fill">SUBMIT NOW</button>
												</div>
											</form>
										</div>
										<!--End Contact Form-->
								</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
								<div class="col-12">
										<div class="media">
												<div class="left align-self-center mr-3">
													<i class="pe-7s-map-marker"></i>
												</div>
												<div class="media-body">
													<h4>Find Us</h4>
													<p>304 Mebanewood Dr, Huntingdon, TN, 38344</p>
												</div>
											</div>
								</div>
								<div class="col-12">
										<div class="media">
												<div class="left align-self-center mr-3">
												<i class="pe-7s-call"></i>
												</div>
												<div class="media-body">
													<h4>Call Us</h4>
													<p>+00 123 456 789</p>
													<p>+00 321 852 963</p>
												</div>
											</div>
								</div>
								<div class="col-12">
										<div class="media">
												<div class="left align-self-center mr-3">
													<i class="pe-7s-mail"></i>
												</div>
												<div class="media-body">
													<h4>Mail Us</h4>
													<p>info@domain.com</p>
													<p>example@domain.com</p>
												</div>
											</div>
								</div>
						</div>
					</div>
				</div>
			<!--End Row-->
		</div>
		<!--End Container-->
</div>
<!--End Contact Wrap-->
@endsection