	<!-- Contact section -->	
	<div class="contact-section spad fix">
			<div class="container" >
				
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
						<form class="form-class" id="con_form" action="/service#something3" method="POST">
							@csrf
							<div class="row">
								<div class="col-sm-6">
									<input type="text" name="name" placeholder="Your name" value="{{old('name')}}" required>
								</div>
								<div class="col-sm-6">
									<input type="email" name="email" placeholder="Your email" value="{{old('email')}}" required>
								</div>
								<div class="col-sm-12">
									<input type="text" name="sujet" placeholder="Subject" value="{{old('sujet')}}" required>
									<textarea name="message" placeholder="Message" required>{{old('message')}}</textarea>
									<button type="submit" class="site-btn" id="something3">send</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		@if ($errors->has('name'))
					<div  class="alert alert-danger alert-dismissible">
							@foreach ($errors->all() as $error)
							<li>
							{{$error}}
							</li>
							@endforeach
							</div>
							@endif
		<!-- Contact section end-->
	