	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@if($introitems->imgPathIntro)
					<img src="/storage/{{$introitems->imgPathIntro}}" alt="" style="width:"><!-- Logo -->
				@endif
			<p>{{$introitems->textIntro}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="img/01.jpg"></div>
			<div class="item  hero-item" data-bg="img/02.jpg"></div>
		</div>
	</div>
	<!-- Intro Section -->