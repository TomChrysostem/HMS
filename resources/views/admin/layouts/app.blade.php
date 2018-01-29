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
	</nav>
	<div class="container-fluid" >
			<div class="row">
			  <div class="col-sm-3 col-md-6 col-lg-4 bg-success">
				@include('admin.layouts.sidenav')
			  </div>
			  <div class="col-sm-9 col-md-6 col-lg-8 bg-warning">
				@yield('content')
			  </div>
			</div>

	</div>
	<!-- Scripts -->
	@include('admin.layouts.script')
</body>
</html>
