<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                    <img src="/{{$article->imgPath}}" alt="">
                        <div class="post-date">
                            	<h2>{{$article->created_at->day}}</h2>
									<h3>{{$article->created_at->shortEnglishMonth}} {{$article->created_at->year}}</h3>
                        </div>
                    </div>
                    <div class="post-content">
                    <h2 class="post-title">{{$article->titre}}</h2>
                        <div class="post-meta">
                            <a href="">
                                @foreach ($categories as $category)
                                @if ($article->category_id === $category->id)
                                    {{$category->name}}
                                @endif
                                
                            @endforeach</a>
                            <a href="">
                                    @foreach ($article->tags()->get() as $tag)
                                    {{$tag->name}}
                                    @endforeach
                            </a>
                            <a href="">{{$nbrcommentaire}} Comments</a>
                        </div>
                    <p>{{$article->text}}</p>
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar">
                        <img src="/{{$author[0]->imgPath}}" alt="" style="width:100px;">
                        </div>
                        <div class="author-info">
                        <h2>{{$author[0]->name}} <span>{{$author[0]->role}}</span></h2>
                            <p>{{$author[0]->text}} </p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">

                     
                        <h2>Comments ({{$nbrcommentaire}})</h2>
                       
                        
                        <ul class="comment-list">

                            @foreach ($commentaires as $commentaire)
                                @if ($commentaire->article_id === $article->id)
                                    <li>
                                        
                                        <div class="avatar">
                                            <img src="/{{$commentaire->imgPath}}" alt="">
                                        </div>
                                        <div class="commetn-text">
                                            <h3>{{$commentaire->sujet}}</h3>
                                            
                                            <p>{{$commentaire->message}}</p>
                                        </div>
                                    </li>
                                @endif
                                
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>

                        <form class="form-class" method="POST" action="/blog-post/{{$article->id}}/message" enctype="multipart/form-data">
                                    @csrf
                                    @METHOD('PATCH')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                            <input type="text" name="sujet" placeholder="Subject">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn" type="submit" >send</button>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="/search" class="search-form">
                        @csrf
                        <input type="text" placeholder="Search" name="searchItems" required>
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        {{-- <li><a href="#">Vestibulum maximus</a></li>
                        <li><a href="#">Nisi eu lobortis pharetra</a></li>
                        <li><a href="#">Orci quam accumsan </a></li>
                        <li><a href="#">Auguen pharetra massa</a></li>
                        <li><a href="#">Tellus ut nulla</a></li>
                        <li><a href="#">Etiam egestas viverra </a></li> --}}
                        @foreach ($categories as $category)
                        <li><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Instagram</h2>
                    <ul class="instagram">
                        <li><img src="img/instagram/1.jpg" alt=""></li>
                        <li><img src="img/instagram/2.jpg" alt=""></li>
                        <li><img src="img/instagram/3.jpg" alt=""></li>
                        <li><img src="img/instagram/4.jpg" alt=""></li>
                        <li><img src="img/instagram/5.jpg" alt=""></li>
                        <li><img src="img/instagram/6.jpg" alt=""></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        {{-- <li><a href="">branding</a></li>
                        <li><a href="">identity</a></li>
                        <li><a href="">video</a></li>
                        <li><a href="">design</a></li>
                        <li><a href="">inspiration</a></li>
                        <li><a href="">web design</a></li>
                        <li><a href="">photography</a></li> --}}
                        @foreach ($tags as $tag)
                            <li><a href="">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Quote</h2>
                    <div class="quote">
                        <span class="quotation">‘​‌‘​‌</span>
                        <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
                    </div>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Add</h2>
                    <div class="add">
                        <a href=""><img src="/img/add.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->