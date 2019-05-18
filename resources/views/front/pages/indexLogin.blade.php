@extends('front.layouts.masterHeaderWithLogout')
@section('content')
@if($errors)
@foreach($errors->all() as $error)
	<div class="alert alert-danger">
		{{$error}}
	</div>
@endforeach
@endif
<!-- Make an Appointment Section Start -->
	<section id="appointment" class="appointment">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="box">
							<a href="doctor.html">
							<div class="icon">
								<i class="icofont-doctor"></i>
							</div>
							</a>
							<h4>Professional Doctors</h4>
							<p>
								There are many professional doctors available for appointments.
							</p>
						</div>
					</div>
					<!-- <div class="col-lg-4">
						<div class="box">
							<div class="icon">
								<i class="icofont-blood-drop"></i>
							</div>
							<h4>Exclusive Blood Bank</h4>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
								.
							</p>
						</div>
					</div> -->
					<!-- <div class="col-lg-4">
						<div class="box">
							<div class="icon">
								<i class="icofont-dna-alt-1"></i>
							</div>
							<h4>Track your Progress</h4>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
								.
							</p>
						</div>
					</div> -->
				</div>
				<div class="row appointmentForm">
					<div class="col-12">
						<h3 class="bg1">
							MAKE AN APPOINTMENT
						</h3>
						<h3 class="bg2">
							<i class="fas fa-phone"></i> +977-9841010101
						</h3>
					</div>
					<div class="col-12">
						<form class="appointmentinputs" action="{{route('Appointment.store')}}" method="post">
							@csrf
							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" name="fullName" placeholder="Full Name" required>
								</div>
								<div class="form-group col-md-6">
									<input type="email" class="form-control" name="email"placeholder="Email" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="tel" class="form-control" name="number" placeholder="Phone Number" required>
								</div>
								<div class="form-group col-md-6">
									<select name="department" placeholder="Department">
										<option value="0">Department</option>
										<option value="1">Dental</option>
										<option value="2">Heart</option>
										<option value="3">Pathology</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<input type="text" class="form-control" name="addinformation" placeholder="Additional Information" required>
								</div>
								<!-- <div class="form-group col-md-6">
									<input id="datetimepicker" type="text" class="form-control" name="datetimepicker" placeholder="Date And Time" required>
								</div> -->
							</div>
							<div class="form-row">
								<div class="form-group col-md-12">
									<input type="submit" class="form-control submit" value="book and appoinment">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	<!-- Make an Appointment Section End -->

	<!-- About Section Start -->
	<div class="about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="sectionHeader">
						<h2>
							BEST TEMPLATE FOR MEDICAL
						</h2>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
							industry's standard dummy text ever since the 1500s
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 col-xl-6">
					<div class="slider">
						<img class="img-fluid" src="img/about/about.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-7 col-xl-6">
					<div class="right_content">
						<h5>
								Mediflex Minimal Template
							Suitable For Anytype Medical Website
						</h5>
						<p>
							Appropriately embrace transparent materials via turnkey niche markets.
							Proactively plagiarize installed base bandwidth with team driven
							architectures. Compellingly exploit extensive partnerships after
							market-driven core competencies. Proactively plagiarize installed base bandwidth ansparent materials.
						</p>
						<div class="list">
							<div class="row">
								<div class="col-md-6">
									<ul>
										<li>
											<i class="fas fa-check"></i>
											Personal patient care
										</li>
										<li>
											<i class="fas fa-check"></i>
											Easy and Affordable Billing
										</li>
										<li>
											<i class="fas fa-check"></i>
											Exclusive 24 hours blood bank
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul>
										<li>
											<i class="fas fa-check"></i>
											Intensive care unit
										</li>
										<li>
											<i class="fas fa-check"></i>
											24x7 Emergency Services
										</li>
										<li>
											<i class="fas fa-check"></i>
											Air conditioned rooms
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About Section End -->

	<!-- Service Section Start -->
	<section id="serviceSection" class="serviceSection">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="sectionHeader">
						<h2>
							Services We provide
						</h2>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
							industry's standard dummy text ever since the 1500s
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 serviceSlider owl-carousel">
					<div class="item">
						<div class="box">
							<div class="icon">
								<i class="icofont-tooth"></i>
							</div>
							<a href="serviceDetails.html">
								<h4>Dental care</h4>
							</a>
							<p>We have a dedicated space for dental care.
								We have dedicated team for dental services.
							</p>
						</div>
					</div>
					<div class="item">
						<div class="box">
							<div class="icon">
								<i class="icofont-tablets"></i>
							</div>
							<a href="serviceDetails.html">
								<h4>phurmacy care</h4>
							</a>
							<p>We have a dedicated space for dental care.
								We have dedicated team for dental services.
							</p>
						</div>
					</div>
					<div class="item">
						<div class="box">
							<div class="icon">
								<i class="icofont-operation-theater"></i>
							</div>
							<a href="serviceDetails.html">
								<h4>sergary care</h4>
							</a>
							<p>We have a dedicated space for dental care.
								We have dedicated team for dental services.
							</p>
						</div>
					</div>
					<div class="item">
						<div class="box">
							<div class="icon">
								<i class="icofont-surgeon"></i>
							</div>
							<a href="serviceDetails.html">
								<h4>cancer care</h4>
							</a>
							<p>We have a dedicated space for dental care.
								We have dedicated team for dental services.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Section End -->

	<!-- Testimonial Area Start -->
	<section id="testimonial" class="testimonial">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="sectionHeader">
						<h2>
							NEWS(hospital or other news)
						</h2>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
							industry's standard dummy text ever since the 1500s
						</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="leftSlider">
						<div class="testiminal-carousel">
							<div class="testimonial-item">
								<div class="img">
									<div class="imgOverlay"></div>
									<img class="img-fluid" src="img/testimonial/bigimg.png" alt="">
									<div class="text">
										<img class="quot" src="img/quot.png" alt="">
										<p>
											When an unknown printer took a galley
											and scrambled it to make a type
											It has survived not only five centuries,
											leap into electronic typesetting has
											survived not make a type.
										</p>
									</div>
								</div>
							</div>
							<div class="testimonial-item">
								<div class="img">
									<div class="imgOverlay"></div>
									<img class="img-fluid" src="img/testimonial/bigimg2.png" alt="">
									<div class="text">
										<img class="quot" src="img/quot.png" alt="">
										<p>
											When an unknown printer took a galley
											and scrambled it to make a type
											It has survived not only five centuries,
											leap into electronic typesetting has
											survived not make a type.
										</p>
									</div>
								</div>
							</div>
							<div class="testimonial-item">
								<div class="img">
									<div class="imgOverlay"></div>
									<img class="img-fluid" src="img/testimonial/bigimg.png" alt="">
									<div class="text">
										<img class="quot" src="img/quot.png" alt="">
										<p>
											When an unknown printer took a galley
											and scrambled it to make a type
											It has survived not only five centuries,
											leap into electronic typesetting has
											survived not make a type.
										</p>
									</div>
								</div>
							</div>
							<div class="testimonial-item">
								<div class="img">
									<div class="imgOverlay"></div>
									<img class="img-fluid" src="img/testimonial/bigimg2.png" alt="">
									<div class="text">
										<img class="quot" src="img/quot.png" alt="">
										<p>
											When an unknown printer took a galley
											and scrambled it to make a type
											It has survived not only five centuries,
											leap into electronic typesetting has
											survived not make a type.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="rightSlider">
						<ul id="tesitmonial_right_item">
							<li data-owl-item="1">
								<div class="item">
									<div class="left">
										<div class="leftInner">
											<img class="img-fluid" src="img/testimonial/people1.png" alt="">
											<div class="info align-self-center">
												<h5>
													Glenn Martin
												</h5>
												<p>
													web developer
												</p>
											</div>
										</div>
									</div>
									<div class="right">
										<div class="rightInner">
											<img class="aimg-fluid" src="img/testimonial/brand1.png" alt="">
										</div>
									</div>
								</div>
							</li>
							<li data-owl-item="2">
								<div class="item">
									<div class="left">
										<div class="leftInner">
											<img class="img-fluid" src="img/testimonial/people2.png" alt="">
											<div class="info align-self-center">
												<h5>
													Danny Moser
												</h5>
												<p>
													web developer
												</p>
											</div>
										</div>
									</div>
									<div class="right">
										<div class="rightInner">
											<img class="img-fluid" src="img/testimonial/brand2.png" alt="">
										</div>
									</div>
								</div>
							</li>
							<li data-owl-item="3">
								<div class="item">
									<div class="left">
										<div class="leftInner">
											<img class="img-fluid" src="img/testimonial/people3.png" alt="">
											<div class="info align-self-center">
												<h5>
													Protik Khan
												</h5>
												<p>
													web developer
												</p>
											</div>
										</div>
									</div>
									<div class="right">
										<div class="rightInner">
											<img class="img-fluid" src="img/testimonial/brand3.png" alt="">
										</div>
									</div>
								</div>
							</li>
							<li data-owl-item="4">
								<div class="item">
									<div class="left">
										<div class="leftInner">
											<img class="img-fluid" src="img/testimonial/people4.png" alt="">
											<div class="info align-self-center">
												<h5>
													Ramon Shaw
												</h5>
												<p>
													web developer
												</p>
											</div>
										</div>
									</div>
									<div class="right">
										<div class="rightInner">
											<img class="img-fluid" src="img/testimonial/brand4.png" alt="">
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonial Area End -->
@endsection