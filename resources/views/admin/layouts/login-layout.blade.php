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
	@include('admin.layouts.link')
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<!-- Brand/logo -->
			<a class="navbar-brand" href="#">Admin Panel</a>
				<!-- Right Side Of Navbar -->
				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
							<!-- Authentication Links -->
									<li><a href="{{ route('admin.login') }}">Login</a></li>
									<li><a href="{{ route('admin.register') }}">Register</a></li>
					</ul>
				</div>
		</nav>
	<div class="container-fluid" >
		@yield('content')
	</div>
	<!-- Scripts -->
	@include('admin.layouts.script')
</body>
</html>
