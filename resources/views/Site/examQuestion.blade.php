@extends('Site.layout')

@section('content')
    	<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{asset("/img/blog-post-background.jpg")}})"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="{{url("/")}}">@lang('wep.home')</a></li>
							<li><a href="{{url("cat/$exam->skill_id")}}">Category name</a></li>
							<li><a href="{{url("skill/$exam->skill_id")}}">{{$exam->skill->name()}}</a></li>
							<li>{{$exam->name()}}</li>
						</ul>
						<h1 class="white-text">{{$exam->name()}}</h1>
						<ul class="blog-post-meta">
							<li>{{carbon\carbon::parse($question->created_at)->format("d M ,Y")}}</li>
							<li class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> 35</a></li>
						</ul>
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
					<div id="main" class="col-md-9">

						<!-- blog post -->
						<div class="blog-post mb-5">
							<p>
               
                  
                      @foreach ( $questions as $question )
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">{{$loop->iteration}}- {{$question->title}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="radio">
                                <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                  {{$question->option_1}}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                  {{$question->option_2}}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                  {{$question->option_3}}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                  <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                  {{$question->option_4}}
                                </label>
                            </div>
                        </div>
                       </div> 
                     
                      @endforeach
                                 
                                
                               
                            </p>       
					    	</div>
						<!-- /blog post -->
                        
                        <div>
                            <button class="main-button icon-button pull-left">Submit</button>
                            <button class="main-button icon-button btn-danger pull-left ml-sm">Cancel</button>
                        </div>
					</div>
					<!-- /main blog -->
                    
					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- exam details widget -->
                        <ul class="list-group">
                            <li class="list-group-item">Skill: {{$exam->skill->name()}}</li>
                            <li class="list-group-item">Questions: {{$questions->count()}}</li>
                            <li class="list-group-item">Duration: {{$exam->duration_min}} mins</li>
                            <li class="list-group-item">Difficulty: 

								@for ($i=1;$i <= $exam->difficult;$i++)
								  <i class="fa fa-star"></i>
								@endfor

								@for ($i=1; $i <= 5-$exam->difficult ;$i++)
								  <i class="fa fa-star-o"></i>
								@endfor
                                
                               
                               
                            </li>
                        </ul>
						<!-- /exam details widget -->

						

					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->
@endsection