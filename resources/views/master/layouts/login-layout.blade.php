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
	@include('master.layouts.link')
</head>
<body>
	<nav class="navbar navbar-expand-sm master-nav">
		  <!-- Brand/logo -->
		  <a class="navbar-brand" href="#">Master Panel</a>
	</nav>
	<div class="container-fluid" >
		@yield('content')
	</div>
	@include('master.layouts.footer')
	<!-- Scripts -->
	@include('master.layouts.script')
</body>
</html>
