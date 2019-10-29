	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				@if($introitems->imgPathIntro)
					<img src="{{$introitems->imgPathIntro}}" alt="" style="width:"><!-- Logo -->
				@endif
				<p>{{$introitems->textIntro}}</p>
			</div>
		</div>

		@if ($carouselCount === 0)
			<div id="hero-slider" class="owl-carousel">
					
				<div class="item  hero-item" data-bg="/01.jpg"></div>
					
		@else
		<div id="hero-slider" class="owl-carousel">
				@foreach ($carouselitems as $carouselitem)
					@if($carouselitem->imgPath)
						<div class="item  hero-item" data-bg="{{$carouselitem->imgPath}}"></div>
					@endif
				@endforeach
		</div>
		@endif
		<!-- slider -->
		
	</div>
	<!-- Intro Section -->