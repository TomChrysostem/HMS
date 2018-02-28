<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	@include('user.layouts.link')
</head>
<body>
@include('user.layouts.header')
	<main>
		<div class="container-fluid">
			<div class="row">
				<!--Carousel Wrapper-->
				<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
						<!--Indicators-->
						<ol class="carousel-indicators">
								<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-1z" data-slide-to="1"></li>
								<li data-target="#carousel-example-1z" data-slide-to="2"></li>
						</ol>
						<!--/.Indicators-->
						<!--Slides-->
						<div class="carousel-inner" role="listbox">
								<!--First slide-->
								<div class="carousel-item active">
										<img class="d-block w-100" src="{{asset('bootstrap/img/h6.jpg')}}" alt="First slide">
								</div>
								<!--/First slide-->
								<!--Second slide-->
								<div class="carousel-item">
										<img class="d-block w-100" src="{{asset('bootstrap/img/h7.jpg')}}" alt="Second slide">
								</div>
								<!--/Second slide-->
								<!--Third slide-->
								<div class="carousel-item">
										<img class="d-block w-100" src="{{asset('bootstrap/img/h8.jpg')}}" alt="Third slide">
								</div>
								<!--/Third slide-->
						</div>
						<!--/.Slides-->
						<!--Controls-->
						<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
								<i class="fas fa-angle-double-left"></i>
								<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
								<i class="fas fa-angle-double-right"></i>
								<span class="sr-only">Next</span>
						</a>
						<!--/.Controls-->
				</div>
				<!--/.Carousel Wrapper-->
			</div>
			<div class="row service-row">
				<div class="text-center service-content">
					<h3>Hospital Management Project</h3>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
				</div>
			</div>
			<div class="row time-service">
				<div class="col time-blog text-center">
					<div class="our-timetable"><img src="{{asset('bootstrap/img/rewind-time.png')}}"/></div>
						<h5>Opening Hours</h5>
						<ul class="list-group">
							<li class="list-group-item">
								<div><font class="time-color" style="vertical-align: inherit;">8:00 - 20:30</font></div>
								<div><strong><font class="day-list" style="vertical-align: inherit;">Monday - Friday</font></strong></div>
							</li>
							<li class="list-group-item">
								<div><font class="time-color" style="vertical-align: inherit;">8:30 - 18:00</font></div>
								<div><strong><font class="day-list" style="vertical-align: inherit;">Saturday</font></strong></div>
							</li>
							<li class="list-group-item">
								<div><font class="time-color" style="vertical-align: inherit;">9:00 - 20:30</font></div>
								<div><strong><font class="day-list" style="vertical-align: inherit;">Sunday</font></strong></div>
							</li>
						</ul>
				</div>
				<div class="col time-blog text-center">
					<div class="our-timetable"><img src="{{asset('bootstrap/img/appointment-book.png')}}"/></div>
					<h5>Appointment</h5>
					<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
					<div class="btn-time-blog"><a href="#">Make an appointment</a></div>
				</div>

				<div class="col time-blog text-center">
					<div class="our-timetable"><img src="{{asset('bootstrap/img/healthcare.png')}}"/></div>
					<h5>Emergency calls</h5>
					<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
					<div class="btn-time-blog"><a href="#">Contact Us</a></div>
				</div>

				<div class="col time-blog text-center">
					<div class="our-timetable"><img src="{{asset('bootstrap/img/hospital.png')}}"/></div>
					<h5>Since 1970</h5>
					<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
					<div class="btn-time-blog"><a href="">More Information</a></div>
				</div>

			</div>
			<div class="row">
				<div class="text-center service-content">
					<h3>Our Service</h3>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
				</div>
			</div>

			<div class="row">
						<div class="col time-blog text-center">
							<div class="our-timetable"><img src="{{asset('bootstrap/img/microscope.png')}}"/></div>
							<h5>Blood Test</h5>
							<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
							<a href="#" class="read_more"><i class="fas fa-angle-right"></i>Read More</a>
						</div>
						<div class="col time-blog text-center">
							<div class="our-timetable"><img src="{{asset('bootstrap/img/syringe (1).png')}}"/></div>
							<h5>Cancer Clinic</h5>
							<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
							<a href="#" class="read_more"><i class="fas fa-angle-right"></i>Read More</a>
						</div>
						<div class="col time-blog text-center">
							<div class="our-timetable"><img src="{{asset('bootstrap/img/ambulance.png')}}"/></div>
							<h5>24/7 service</h5>
							<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
							<a href="#" class="read_more"><i class="fas fa-angle-right"></i>Read More</a>
						</div>
						<div class="col time-blog text-center">
							<div class="our-timetable"><img src="{{asset('bootstrap/img/nurse.png')}}"/></div>
							<h5>Qualified doctors</h5>
							<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
							<a href="#" class="read_more"><i class="fas fa-angle-right"></i>Read More</a>
						</div>
			</div>

			<div class="row">
				<div class="col time-blog text-center">
					<div class="our-timetable"><img src="{{asset('bootstrap/img/hospital (2).png')}}"/></div>
						<h5>Medical facilities</h5>
						<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
						<a href="#" class="read_more"><i class="fas fa-angle-right"></i>Read More</a>
				</div>
				<div class="col time-blog text-center">
					<div class="our-timetable"><img src="{{asset('bootstrap/img/microscope (2).png')}}"/></div>
					<h5>Pathology</h5>
					<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
					<a href="#" class="read_more"><i class="fas fa-angle-right"></i>Read More</a>
				</div>
				<div class="col time-blog text-center">
					<div class="our-timetable"><img src="{{asset('bootstrap/img/magnifying-glass.png')}}"/></div>
					<h5>Rehabilitation</h5>
					<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
					<a href="#" class="read_more"><i class="fas fa-angle-right"></i>Read More</a>
				</div>
				<div class="col time-blog text-center">
					<div class="our-timetable"><img src="{{asset('bootstrap/img/aids.png')}}"/></div>
					<h5>Medical advice</h5>
					<p>Leporiusam Dolores Out Infecture Com Accenture Delictos Seki Lorem Epsom Dolor Set Amit, Consectitor.</p>
					<a href="#" class="read_more"><i class="fas fa-angle-right"></i>Read More</a>
				</div>
				</div>
			</div>
		</div>
	</main>
		@include('user.layouts.footer')
	<!-- Start Modal-popup -->
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Modal-popup -->
		@include('user.layouts.script')
</body>
</html>
