	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
				
					@foreach ($servicetops as $servicetop)
						<div class="col-md-4 col-sm-6">
							<div class="lab-card">
								<div class="icon">
								<i class="{{$servicetop->logo}}"></i>
								</div>
							<h2>{{$servicetop->titre}}</h2>
							<p>{{$servicetop->text}}</p>
							</div>
						</div>
					@endforeach
		
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
				<h2>{{$aboutitems->titre}}</h2>
					{{-- <h2>Wesh alors</h2> --}}
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>{{$aboutitems->textGauche}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$aboutitems->textDroite}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 offset-md-2">
						<img src="{{$aboutitems->imgPath}}" alt="">
							<a href="{{$aboutitems->videoPath}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->