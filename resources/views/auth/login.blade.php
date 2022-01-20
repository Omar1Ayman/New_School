
		@extends('Site.layout')
		@section('content')
			
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">@lang('wep.home')</a></li>
							<li>@lang('wep.signin')</li>
						</ul>
						<h1 class="white-text">Sign In to start exam</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- login form -->
					<div class="col-md-6 col-md-offset-3">
						<div class="contact-form">
							<h4>@lang('wep.signin')</h4>
							<form method="POST" action="{{route('login')}}">
								@csrf
								<input class="input" type="email" name="email" placeholder="Email">
								<input class="input" type="password" name="password" placeholder="Password">
								<button type="submit" class="main-button icon-button pull-right">@lang('wep.signin')</button>
							</form>
						</div>
					</div>
					<!-- /login form -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

       
		@endsection