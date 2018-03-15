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
		  <a class="navbar-brand" href="#"><i class="fas fa-heartbeat"></i>master Panel</a>
		                  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('master.login') }}">Login</a></li>
                           
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('master.logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('master.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
	</nav>
	<div class="container-fluid" >
			<div class="row">
			  <div class="col-sm-3 col-md-2 col-lg-2 sidenav">
				@include('master.layouts.sidenav')
			  </div>
			  <div class="col-sm-9 col-md-10 col-lg-10 right-content">
				@yield('content')
			  </div>
			</div>
	</div>
	<footer>
		<div class="col-lg-12 text-center text-white footer-color">
			<p class="pt-3">@copyright 2018 Hospital Management System</p>
		</div>
	</footer>
	<!-- Scripts -->
	@include('master.layouts.script')
</body>
</html>
