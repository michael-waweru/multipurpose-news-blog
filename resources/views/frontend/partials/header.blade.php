 <!--Offcanvas sidebar-->
 <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-left">
    <button class="off-canvas-close"><i class="ti-close"></i></button>
    <div class="sidebar-inner">
        <!--Latest-->
        <div class="sidebar-widget widget-latest-posts mb-30">
            <div class="widget-header position-relative mb-30">
                <h5 class="widget-title mt-5 mb-30">Don't Miss</h5>
            </div>
            <div class="post-block-list post-module-1 post-module-5">
                <ul class="list-post">
                    @foreach (\App\Models\Blog::getBlogs() as $blog)
                        <li class="mb-15">
                            <div class="d-flex">                                
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-10 text-limit-2-row">
                                        <a href="{{ route('blog.detail',[$blog->category->slug,$blog->slug]) }}">{{ $blog->title }}</a>
                                    </h6>
                                    <div class="entry-meta meta-1 font-x-small color-grey">
                                        <span class="post-on">{{ $blog->created_at->format('D, d M Y') }}</span>
                                        <span class="hit-count has-dot">By {{ $blog->author_name }}</span>
                                    </div>
                                </div>
                            </div>
                        </li>                        
                    @endforeach 
                </ul>
            </div>
        </div>
        <!--Categories-->
        <div class="sidebar-widget widget_categories mb-50">
            <div class="widget-header position-relative mb-20">
                <h5 class="widget-title mt-5">All Categories</h5>
            </div>
            <div class="widget_nav_menu">
                <ul class="menu">
                    @foreach (App\Models\Category::getAllCategories() as $category)
                        <li><a href="{{ route('category',$category->slug) }}/">{{ $category->category_name }}</a></li>
                    @endforeach                   
                </ul>
            </div>
        </div>
        <!--Ads-->
        <span class="mb-15 text-muted">Advertise With Us</span><br>
        <div class="sidebar-widget mt-30">            
            <a href="{{ asset('assets/frontend/imgs/news/news-1.jpg') }}" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                <img src="{{ asset('assets/frontend/imgs/banners/banner-1.jpg') }}">
            </a>
        </div>
    </div>
</aside>
<!-- Start Header -->
<header class="main-header header-style-2 header-sticky">
    <div class="container pt-30 pb-30 position-relative text-center header-top">
        <div class="mobile_menu d-lg-none d-block"></div>
        <!--Header tools-->
        <div class="header-tools position-absolute position-absolute-center">
            <ul class="header-social-network d-inline-block list-inline mr-10">
                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center color-grey" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center color-grey" target="_blank" href="#"><i class="ti-twitter"></i></a></li>
            </ul>
            <button type="submit" class="search search-icon search-btn mr-15">
                <i class="ti-close"></i>
                <i class="ti-search"></i>
            </button>
            <div class="off-canvas-toggle-cover d-inline-block">
                <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                    <span></span>
                    <p class="font-small d-none d-lg-inline font-weight-bold offcanvas-more-text">MORE</p>
                </div>
            </div>
        </div>
        <!--Header logo-->
        <div class="logo-text">
            <h1 class="logo text-uppercase d-md-inline d-none"><a href="/">News Board.</a></h1>
            <h1 class="logo logo-mobile text-uppercase d-inline d-md-none"><a href="/">NB.</a></h1>
            <p class="head-line font-heading text-muted d-none d-lg-block">Creative Newspaper & Publisher Site</p>
        </div>
        <!--Header right-->
        <div class="position-absolute-center font-small d-none d-lg-block position-absolute position-right mr-30">
            <ul class="list-inline text-right">
                @guest
                    @if (Route::has('login'))
                        <li class="list-inline-item mr-15"><a href="{{ route('login') }}"><i class="ti-user font-x-small mr-5"></i>Login / Register</a></li>                        
                    @endif 
                @else                                    
                    <li class="list-inline-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="ti-user font-x-small mr-5"></i>{{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>  
                        <ul class="dropdown-menu dropdown-menu-language dropdown-menu-right border-0 font-small text-right">                            
                            @if (Auth::user()->role_id == 1)
                                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>                                
                            @elseif (Auth::user()->role_id == 2)
                                <li><a href="{{ route('author.dashboard') }}">Dashboard</a></li>
                            @else
                                <li><a href="#">Dashboard</a></li>                         
                            @endif
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); 
                                                    document.getElementById('logout-form').submit();">Sign Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                            </li>
                        </ul>
                    </li>                       
                @endguest
            </ul>
        </div>        
    </div>
    <div class="main-navigation text-center text-uppercase font-heading">
        <div class="container">
            <div class="horizontal-divider-black"></div>
        </div>
        <div class="main-nav d-none d-lg-block">
            <nav>
                <!--Desktop menu-->
                <ul class="main-menu d-none d-lg-inline">
                    <li><a href="/">Home</a></li>                    
                    <li><a href="{{ route('about') }}">About</a></li>                    
                    @foreach (App\Models\Category::getCategories() as $category)
                        <li><a href="{{ route('category',$category->slug) }}">{{ $category->category_name }}</a></li>
                    @endforeach                    
                    <li><a href="{{ route('contact') }}">Contact</a></li>                   
                </ul>                
                <!--Mobile menu-->
                <ul id="mobile-menu" class="d-block d-lg-none">
                    <li><a href="/">Home</a></li>                   
                    <li>
                        <a href="javasctipt:void(0);">Company</a>
                        <ul class="col-md-2">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="javascript:void(0)">Careers</a></li>                            
                        </ul>
                    </li>                    
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="horizontal-divider-black mb-1px"></div>
        </div>
        <div class="container">
            <div class="horizontal-divider-black"></div>
        </div>
    </div>
</header>
<!--Start search form-->
<div class="main-search-form">
    <div class="container">
        <div class="main-search-form-cover pt-50 pb-50 m-auto">
            <div class="row mb-20">
                <div class="col-12">
                    <form action="#" class="search-header">
                        <div class="input-group w-100">
                            <select class="form-control first_null not_chosen">
                                <option value="">Search all</option>
                                <option value="AX">Articles</option>
                                <option value="AF">Authors</option>
                                <option value="AF">Tags</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Type your key words and hit enter">
                            <div class="input-group-append">
                                <button class="btn btn-black" type="submit">
                                    <i class="ti-search mr-5"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 font-small suggested-area">
                    <p class="suggested font-heading mb-10"><strong>Suggestions</strong></p>
                    <ul class="list-inline d-inline-block">
                        @foreach (\App\Models\Category::getCategories() as $suggestion)
                            <li class="list-inline-item"><a href="{{ route('category',$suggestion->slug) }}">{{ $suggestion->category_name }}</a></li>                            
                        @endforeach                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>