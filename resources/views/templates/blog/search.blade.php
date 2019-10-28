	<!-- page section -->
	<div class="page-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7 blog-posts">
                        <!-- Post item -->
                    
                        @if ( $countSearch === false)
                            Aucun résultat trouvé
                        @endif
                        @foreach ($search as $item)
                        @if ($item->published === 1)
                            <div class="post-item">
                                    <div class="post-thumbnail">
                                    <img src="{{$item->imgPath}}" alt="">
                                        <div class="post-date">
                                            	<h2>{{$item->created_at->day}}</h2>
									<h3>{{$item->created_at->shortEnglishMonth}} {{$item->created_at->year}}</h3>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                    <h2 class="post-title">{{$item->titre}}</h2>
                                        <div class="post-meta">
                                            <a href="">{{$item->category[0]->name}}</a>
                                            <a href="">@foreach ($item->tags()->get() as $tag)
                                                    {{$tag->name}}
                                                    @endforeach</a>
                                            
                                        <a href="">{{$item->commentaire->count()}} comments</a>
                                        </div>
                                        <p>{{$item->text}}</p>
                                        <a href="/blog-post/{{$item->id}}" class="read-more">Read More</a>
                                    </div>
                            </div>
                        @endif
                        @endforeach
                        
                            
    
                
                        
                        <!-- Pagination -->
                        <div class="page-pagination">
                            {{-- <a class="active" href="">01.</a>
                            <a href="">02.</a>
                            <a href="">03.</a> --}}
                            
                         
                        
                            
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
                                    <li><a href="/blog/category/{{$category->id}}">{{$category->name}}</a></li>
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
                                    <li><a href="/blog/tag/{{$tag->id}}">{{$tag->name}}</a></li>
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
                                <a href=""><img src="img/add.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page section end-->