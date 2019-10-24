	<!-- Contact section -->
	<div class="contact-section spad fix">
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
				<!-- contact info -->
				<div class="col-md-5 offset-md-1 contact-info col-push">
					<div class="section-title left">
					<h2>{{$contacts->titre}}</h2>
					</div>
					<p>{{$contacts->text}}</p>
					<h3 class="mt60">{{$contacts->officeTitre}}</h3>
					<p class="con-item">{{$contacts->adress}}</p>
					<p class="con-item">{{$contacts->phone}}</p>
					<p class="con-item">{{$contacts->email}}</p>
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull">
					<form class="form-class" id="con_form" action="/" method="POST">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name" required>
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email" required>
							</div>
							<div class="col-sm-12">
								<input type="text" name="sujet" placeholder="Subject" required>
								<textarea name="message" placeholder="Message" required></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->
