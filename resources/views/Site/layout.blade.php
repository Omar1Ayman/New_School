<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>HTML Education Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset("css/style.css")}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="{{url("/")}}">
							<img src="{{asset("/img/logo.png")}}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="{{url("/")}}">@lang('wep.home')</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('wep.cat') <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              @foreach ($cats as $cat)
							  <li><a href="{{url("cat/$cat->id")}}">{{$cat->name()}}</a></li>
							  @endforeach

                            </ul>
                        </li>
                        <li><a href="{{url("contact")}}">@lang('wep.contact')</a></li>
                         @guest
					        <li><a href="{{route("login")}}">@lang('wep.signin')</a></li>
					        <li><a href="{{route("register")}}">@lang('wep.signup')</a></li>
					     @endguest
						 @auth
						 {{-- <div class="nav-link" id="nav-bar-logoutbutton">
							<form method="POST" action="{{ route('logout') }}">
								@csrf
								<button class="btn btn-secondary btn-sm" type="submit">Logout</button>
							</form>
						</div> --}}
						<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							@lang('wep.logout')
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST">
							@csrf
						</form>
					</li>
						 <li><a>{{Auth::user()->name}}</a></li>


						 @endauth



						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('wep.lang') <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <li><a href="{{url("set/lang/en")}}">english</a></li>
                               <li><a href="{{url("set/lang/ar")}}">arabic</a></li>
                            </ul>
                        </li>




					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->







           @yield('content')


<!-- Footer -->
<footer id="footer" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div id="bottom-footer" class="row">

			<!-- social -->
			<div class="col-md-4 col-md-push-8">
				<ul class="footer-social">
					<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
			<!-- /social -->

			<!-- copyright -->
			<div class="col-md-8 col-md-pull-4">
				<div class="footer-copyright">
					<span>&copy; Copyright 2021. All Rights Reserved. | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">SkillsHub</a></span>
				</div>
			</div>
			<!-- /copyright -->

		</div>
		<!-- row -->

	</div>
	<!-- /container -->

</footer>
<!-- /Footer -->

<!-- preloader -->
<div id='preloader'><div class='preloader'></div></div>
<!-- /preloader -->


<!-- jQuery Plugins -->
<script type="text/javascript" src="{{asset("js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/main.js")}}"></script>

</body>
</html>
