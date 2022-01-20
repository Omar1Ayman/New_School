@extends('Site.layout')

@section('content')
    
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{asset("img/page-background.jpg")}})"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="{{url('/')}}">@lang('wep.home')</a></li>
							<li><a href="{{url("cat/$skill->cat_id")}}">cat</a></li>
							<li>{{$skill->name()}}</li>
						</ul>
						<h1 class="white-text">{{$skill->name()}}</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-12">

						<!-- row -->
						<div class="row">

							<!-- single exam -->
							@foreach ($exam as $ex)
							<div class="col-md-3">
								<div class="single-blog">
									<div class="blog-img">
										<a href="{{url("exam/$ex->id")}}">
											<img src="{{asset("img/exaams/$ex->image")}}" alt="">
										</a>
									</div>
									<h4><a href="{{url("exam/$ex->id")}}">{{$ex->desc()}}</a></h4>
									<div class="blog-meta">
                                        <span>{{carbon\carbon::parse($ex->created_at)->format('d M Y')}}</span>
										<div class="pull-right">
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							
							<!-- /single exam -->

						</div>
						<!-- /row -->

					</div>
					<!-- /main blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

@endsection