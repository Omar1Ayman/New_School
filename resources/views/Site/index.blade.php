
	@extends('Site.layout')

    @section('content')
        	<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{asset("img/home-background.jpg")}})"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8"> 
							<h1 class="white-text">@lang('wep.skillhub')</h1>
							<p class="lead white-text">@lang('wep.Libris')</p>
							<a class="main-button icon-button" href="#">@lang('wep.Get Started')!</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>Popular Exams</h2>
						<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
					</div>
				</div>
				<!-- /row -->

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">
                         
						@foreach ($skills as $skill )
							<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="{{url("cat/$skill->cat_id")}}" class="course-img">
									<img src="{{asset("./img/$skill->image")}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Beginner to Pro in Excel: Financial Modeling and Valuation</a>
								<div class="course-details">
									<span class="course-category">{{$skill->name()}}</span>
								</div>
							</div>
						</div>
						<!-- /single course -->
						@endforeach
						
					</div>
					<!-- /row -->

					

				</div>
				<!-- /courses -->

				<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">More Courses</a>
					</div>
				</div>

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->

		

		<!-- Contact CTA -->
		<div id="contact-cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta.jpg)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contact Us</h2>
						<p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
						<a class="main-button icon-button" href="contact.html">Contact Us Now</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->


    @endsection