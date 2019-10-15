
	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{{$titres->teamTitre}}</h2>
			</div>
			<div class="row">
				<!-- single member -->
				{{-- <div class="col-sm-4">
					<div class="member">
						<img src="img/team/1.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Project Manager</h3>
					</div>
				</div> --}}

				{{-- @foreach ($teams as $team)
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$team->imgPath}}" alt="">
						<h2>{{$team->name}}</h2>
						<h3>{{$team->function}}</h3>
					</div>
				</div>
				@endforeach --}}

				
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$teamnull1s[0]->imgPath}}" alt="">
						<h2>{{$teamnull1s[0]->name}}</h2>
						<h3>{{$teamnull1s[0]->function}}</h3>
					</div>
				</div>

				

				

				
			
				
					<div class="col-sm-4">
						<div class="member">
							<img src="{{$teamboss[0]->imgPath}}" alt="">
							<h2>{{$teamboss[0]->name}}</h2>
							<h3>{{$teamboss[0]->function}}</h3>
						</div>
					</div>
				

					<div class="col-sm-4">
						<div class="member">
							<img src="{{$teamnull2s[0]->imgPath}}" alt="">
							<h2>{{$teamnull2s[0]->name}}</h2>
							<h3>{{$teamnull2s[0]->function}}</h3>
						</div>
					</div>




				<!-- single member -->
				{{-- <div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Junior developer</h3>
					</div>
				</div> --}}
				<!-- single member -->
				{{-- <div class="col-sm-4">
					<div class="member">
						<img src="img/team/3.jpg" alt="">
						<h2>Christinne Williams</h2>
						<h3>Digital designer</h3>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	<!-- Team Section end-->