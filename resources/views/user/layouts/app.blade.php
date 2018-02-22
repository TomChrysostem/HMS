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
	<header>
		<div class="container-fluid">
			<div class="row social-nav">
				<!-- Button trigger modal -->
				<div class="col">
					<a class="small-nav white-text" data-toggle="modal" data-target="#exampleModal">
						Login Record
					</a>
				</div>
				<div class="col">
					<span class="small-nav white-text">Welcome to our website</span>
				</div>
				<div class="col">
					<ul class="social-list white-text">
						<li><i class="fab fa-instagram"></i></li>
						<li><i class="fab fa-pinterest"></i></li>
						<li><i class="fab fa-google-plus-g"></i></li>
						<li><i class="fab fa-twitter"></i></li>
						<li><i class="fab fa-facebook-square"></i></li>
					</ul>
				</div>
			</div>
			<div class="row content-and-logo">
				<div class="col-8 blue-grey-text">
					<div class="contact-blog text-center">
						<span class="contact-icon"><i class="fas fa-home"></i></span>
						<h5>Title</h5>
						<span>Four episode Infinity F. 45635</span>
					</div>
					<div class="contact-blog text-center">
						<span class="contact-icon"><i class="fas fa-phone"></i></span>
						<h5>Call us</h5>
						<span>+959263132985</span>
					</div>
					<div class="contact-blog text-center">
						<span class="contact-icon"><i class="fas fa-envelope"></i></span>
						<h5>Mail us</h5>
						<span>toeyadanar.tya@gmail.com</span>
					</div>
				</div>
				<div class="col-4"></div>
			</div>
			<!--Main Navigation-->
			<nav class="navbar navbar-expand-lg">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
									<li class="nav-item active">
											<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="#">Features</a>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="#">Pricing</a>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="#">Opinions</a>
									</li>
							</ul>
							<ul class="navbar-nav nav-flex-icons">
									<li class="nav-item">
											<a class="nav-link"><i class="fa fa-facebook"></i></a>
									</li>
									<li class="nav-item">
											<a class="nav-link"><i class="fa fa-twitter"></i></a>
									</li>
									<li class="nav-item">
											<a class="nav-link"><i class="fa fa-instagram"></i></a>
									</li>
							</ul>
					</div>
			</nav>
			<!--Main Navigation-->
		</div>
	</header>
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
			<div class="row">
				<div class="col" style="background-color:red;"></div>
				<div class="col" style="background-color:black;"></div>
				<div class="col"></div>
				<div class="col"></div>
			</div>
		</div>
	</main>
	<footer></footer>
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
