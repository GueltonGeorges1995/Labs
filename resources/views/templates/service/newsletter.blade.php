	<!-- newsletter section -->
	<div class="newsletter-section spad" id="yo">
		<div class="container">
				@if ($errors->any())
					<div  class="alert alert-danger alert-dismissible">
						@foreach ($errors->all() as $error)
							<li>
								{{$error}}
							</li>
						@endforeach
					</div>
				@endif
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" action="/service/new#yo" method="POST">
						@csrf
						@METHOD('PATCH')
						<input type="text" placeholder="Your e-mail here" name="newEmail" required>
						<button type="submit" class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->