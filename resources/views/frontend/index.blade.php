@extends('frontend.layouts.base')

@section('title')
    Homepage
@endsection

@section('body')
    <main class="mt-30">
        <div class="container">
            <!--Featured post Start-->
            <!--Loop Grid 3-->
            <div class="the-world mb-30">
                <div class="loop-grid-3 row vertical-divider">
                    <div class="col-lg-7 col-md-12">
                        <div class="slide-fade mb-lg-0 mb-md-4 mb-sm-4">
                            @foreach ($recent_posts as $recent_post)
                                @if($recent_post->status == 'published')
                                    <article class="first-post slide-fade-item mb-md-4 mb-lg-0">
                                        <figure class="mb-30">
                                            <a href="{{ route('blog.detail',[$recent_post->category->slug,$recent_post->slug]) }}">
                                                <img src="{{ asset('storage/blog/') }}/{{ $recent_post->image }}" alt="{{ $recent_post->title }}">
                                            </a>
                                        </figure>
                                        <div class="post-content">
                                            <h3 class="mb-20 position-relative font-weight-bold">
                                                <a href="{{ route('blog.detail',[$recent_post->category->slug,$recent_post->slug]) }}">{{ $recent_post->title }}</a>
                                            </h3>
                                            @if($recent_post->is_live == 'isLive')
                                                <p class="excerpt">
                                                    <span class="live-now text-danger">Live</span> {{ $recent_post->short_description }}
                                                </p>
                                                @else
                                                <p class="excerpt">
                                                    {{ $recent_post->short_description }}
                                                </p>
                                            @endif
                                            <div class="entry-meta meta-0 mb-15 font-span">                                               
                                                <span class="post-cat position-relative">{{ $recent_post->created_at->diffforhumans() }}</span>                                               
                                            </div>
                                        </div>
                                    </article>
                                @endif
                            @endforeach                            
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row vertical-divider">
                            @foreach($blogs as $blog)
                                @if($blog->status == 'published')
                                    <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                                        <figure class="mb-15">
                                            <a href="{{ route('blog.detail',[$blog->category->slug, $blog->slug]) }}">
                                                <img src="{{ asset('storage/blog/'.$blog->image) }}" alt="{{ $blog->title }}">
                                            </a>
                                        </figure>
                                        <h6 class="post-title font-weight-bold mb-10">
                                            <a href="{{ route('blog.detail',[$blog->category->slug, $blog->slug]) }}">{{ $blog->title }}</a>
                                        </h6>
                                        @if($blog->is_live == 'isLive')
                                            <p class="excerpt">
                                                <span class="live-now text-danger">Live</span> {{ $blog->short_description }}
                                            </p>
                                            @else
                                            <p class="excerpt">
                                                {{ $blog->short_description }}
                                            </p>
                                        @endif
                                        <div class="entry-meta meta-2 font-x-span color-muted">
                                            @if ($blog->is_live == 'isLive')
                                                <p class="mb-5 text-danger">
                                                Updated {{ $blog->updated_at->diffForHumans() }}
                                                </p> 
                                            @else
                                                <p class="mb-5">By 
                                                    <a href="{{ route('author',$blog->user->slug) }}">
                                                        <span class="author-name">{{ $blog->author_name }}</span>
                                                    </a>
                                                </p>
                                                <span class="mr-10">{{ $blog->created_at->format('d M Y') }}</span>
                                                <span class="has-dot"> {{ $blog->read_time }} mins read</span>
                                            @endif                                            
                                        </div>
                                    </article>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <section class="hightlight-today mb-30">
                <h6 class="font-weight-bold widget-header widget-header-style-5 mb-10">
                    <span class="d-inline-block block mb-10 widget-title font-family-normal">Today's Highlight</span>
                </h6>
                <div class="loop-grid-5 row vertical-divider">
                    @foreach($todaysHighlights as $highlight)
                        @if($highlight->status == 'published')
                            <article class="col-1-5 col-sm-12 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="{{ route('blog.detail',[$highlight->category->slug, $highlight->slug]) }}">
                                        <img src="{{ asset('storage/blog/'.$highlight->image) }}" alt="{{ $highlight->title }}">
                                    </a>
                                </figure>
                                <h6 class="font-weight-500 mb-20">
                                    <a href="{{ route('blog.detail',[$highlight->category->slug, $highlight->slug]) }}">{{ $highlight->title }}</a>
                                </h6>
                            </article>
                        @endif
                    @endforeach
                    <div class="col-12">
                        <div class="horizontal-divider mb-15 mt-15"></div>
                    </div>
                </div>
            </section>
            <!--Loop Grid 4-->
            <section class="editor-picked mb-30">
                <h6 class="font-weight-bold widget-header widget-header-style-3 mb-20">
                    <span class="d-inline-block block mb-10 widget-title font-family-normal"># Editor Picked</span>
                    <span class="line-dots"></span>
                </h6>
                <div class="loop-grid-3 row vertical-divider">
                    <div class="col-lg-7 col-md-12">
                        <div class="row vertical-divider">
                            @foreach ($editorPicked as $editor)
                                <article class="col-md-6 wow fadeIn animated">
                                    <figure class="mb-15">
                                        <a href="single.html">
                                            <img src="{{ asset('storage/blog/'.$editor->image) }}" alt="{{ $editor->title }}">
                                        </a>
                                    </figure>
                                    <h6 class="post-title font-weight-bold mb-10">
                                        <a href="single.html"></a>
                                    </h6>
                                    <p class="excerpt">
                                        {{ $editor->short_description }}
                                    </p>
                                    <div class="entry-meta meta-0 mb-15 font-span">
                                        <a href="{{ route('category', $editor->category->slug) }}">
                                            <span class="post-cat position-relative">In {{ $editor->category_name }}</span>
                                        </a>                                       
                                    </div>
                                </article> 
                            @endforeach              
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 d-none d-lg-block">
                        <article class="row wow fadeIn animated">
                            <div class="col-md-6">
                                <div class="entry-meta meta-0 mb-15 font-span">
                                    <a href="category.html"><span class="post-cat position-relative"># Stayhome</span></a>
                                </div>
                                <h6 class="post-title mb-20 font-weight-bold">
                                    <a href="single.html">Gaming During the Pandemic Is Starting to Feel Like Work</a>
                                </h6>
                                <p class="excerpt mb-0">
                                    ARecognizing that he was about to spend a lot of time stuck in his apartment, Plenke, a branded content editor
                                </p>
                            </div>
                            <div class="col-md-6">
                                <figure class="mb-0">
                                    <img src="{{ asset('assets/frontend/imgs/news/news-8.jpg') }}" alt="">
                                </figure>
                            </div>
                        </article>
                        <article class="row wow fadeIn animated">
                            <div class="col-12">
                                <div class="has-top-border mb-15 mt-15"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="entry-meta meta-0 mb-15 font-span">
                                    <a href="category.html"><span class="post-cat position-relative"># Agriculture</span></a>
                                </div>
                                <h6 class="post-title mb-20 font-weight-bold">
                                    <a href="single.html">Tiny Weed-Killing Robots Could Make Pesticides Obsolete</a>
                                </h6>
                                <p class="excerpt mb-0">
                                    Clint Brauer’s farm outside of Cheney, Kansas, could be described as Old MacDonald’s Farm plus robots
                                </p>
                            </div>
                            <div class="col-md-6">
                                <figure class="mb-0">
                                    <img src="{{ asset('assets/frontend/imgs/news/news-9.jpg') }}" alt="">
                                </figure>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!--Recent news-->
            <section class="recent-news mb-30">
                <div class="row vertical-divider">
                    <div class="col-lg-9 col-md-12">
                        <h5 class="font-weight-bold widget-header widget-header-style-3 mb-20">
                            <span class="d-inline-block block mb-10 widget-title font-family-normal"># Recent posts</span>
                            <span class="line-dots"></span>
                        </h5>
                        <div class="loop-grid-3">
                            @if($recentsSection->status == 'published')
                                <article class="row wow fadeIn animated">
                                    <div class="col-md-6 mb-md-0 mb-sm-3">
                                        <figure class="mb-0">
                                            <a href="{{ route('blog.detail',[$recentsSection->category->slug, $recentsSection->slug]) }}">
                                                <img src="{{ asset('storage/blog/') }}/{{ $recentsSection->image }}" alt="{{ $recentsSection->title }}">
                                            </a>
                                            <span class="post-format position-top-right text-uppercase font-span">
                                                <i class="ti-stats-up"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 align-self-center">
                                        <div class="post-content text-center plr-5-percent">
                                            <div class="entry-meta meta-0 mb-15 font-span">
                                                <a href="{{ route('category',[$recentsSection->category->slug]) }}">
                                                    <span class="post-cat position-relative">In {{ $recentsSection->category_name }}</span>
                                                </a>
                                            </div>
                                            <h2 class="post-title mb-30 position-relative divider-wave">
                                                <a href="{{ route('blog.detail',[$recentsSection->category->slug, $recentsSection->slug]) }}">{{ $recentsSection->title }}</a>
                                            </h2>
                                            @if($recentsSection->is_live == 'isLive')
                                                <p class="excerpt">
                                                    <span class="live-now text-danger">Live</span> {{ $recentsSection->short_description }}
                                                </p>
                                            @else
                                                <p class="excerpt">
                                                    {{ $recentsSection->short_description }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </div>
                                </article>
                            @endif
                            <div class="row vertical-divider">
                                <div class="col-md-8">
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{ asset('assets/frontend/imgs/news/thumb-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-span">
                                                <a href="category.html"><span class="post-cat position-relative"># Technology</span></a>
                                            </div>
                                            <h6 class="post-title mb-20 font-weight-bold">
                                                <a href="single.html">The Endgame for LinkedIn Is Coming</a>
                                            </h6>
                                            <p class="excerpt mb-0">
                                                Every time this LinkedIn commercial pops up on YouTube I am reminded of how low the company has fallen to.
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="horizontal-divider mt-15 mb-15"></div>
                                        </div>
                                    </article>
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{ asset('assets/frontend/imgs/news/thumb-4.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-span">
                                                <a href="category.html"><span class="post-cat position-relative"># Music</span></a>
                                            </div>
                                            <h6 class="post-title mb-20 font-weight-bold">
                                                <a href="single.html">Neuroscience Says Listening to This Song Reduces Anxiety by Up to 65 Percent</a>
                                            </h6>
                                            <p class="excerpt mb-0">
                                                After a calamitous drop in March, the stock market has had a ferocious rally, despite a cascade of awful news. How can investors cope?
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="horizontal-divider mt-15 mb-15"></div>
                                        </div>
                                    </article>
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{ asset('assets/frontend/imgs/news/thumb-8.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-span">
                                                <a href="category.html"><span class="post-cat position-relative"># Entertainment</span></a>
                                            </div>
                                            <h6 class="post-title mb-20 font-weight-bold">
                                                <a href="single.html">I Have A Theory That Donald Glover And Childish Gambino Are Secretly The Same Person</a>
                                            </h6>
                                            <p class="excerpt mb-0">
                                                For anyone who doesn’t know who these 2 dudes are, Donald Glover is a beloved actor/writer/comedian and Childish Gambino is a popular musician.
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="horizontal-divider mt-15 mb-15"></div>
                                        </div>
                                    </article>
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{ asset('assets/frontend/imgs/news/thumb-9.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-span">
                                                <a href="category.html"><span class="post-cat position-relative">World</span></a>
                                            </div>
                                            <h6 class="post-title mb-20 font-weight-bold">
                                                <a href="single.html">Half a million people have seen me naked</a>
                                            </h6>
                                            <p class="excerpt mb-0">
                                                Twitch has quickly become a household name after its acquisition by Amazon. You can watch strangers livestream just about anything these days, working out, body painting; you can even tune in and watch someone else eating.
                                            </p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="wow fadeIn animated">
                                        <figure class="mb-15">
                                            <a href="single.html">
                                                <img src="{{ asset('assets/frontend/imgs/news/news-4.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                        <h6 class="post-title font-weight-bold mb-10">
                                            <a href="single.html">What Is Your True ‘Character’? And Who’s to Judge It?</a>
                                        </h6>
                                        <p class="excerpt">
                                            Marjorie Garber’s new book prods at confusion surrounding the word — its philosophical roots, literary history, political uses and inadvertent comedy..
                                        </p>
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </article>
                                    <article class="wow fadeIn animated">
                                        <h6 class="post-title mb-10 font-weight-bold">
                                            <a href="single.html"> How the United Arab Emirates Set Its Sights on Mars</a>
                                        </h6>
                                        <p class="excerpt mb-0">
                                            he launch of the Hope orbiter was delayed because of weather. The goal is for it to make contributions to research on the red planet.
                                        </p>
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </article>
                                    <article class="wow fadeIn animated">
                                        <h6 class="post-title mb-10 font-weight-bold">
                                            <a href="single.html">A Big California Quake Just Got ‘a Little Likelier’</a>
                                        </h6>
                                        <p class="excerpt mb-0">
                                            A new analysis puts the likelihood of an earthquake slightly higher than earlier forecasts.
                                        </p>
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </article>
                                    <article class="wow fadeIn animated">
                                        <h6 class="post-title mb-10 font-weight-bold">
                                            <a href="single.html">A Record 5.4 Million Americans Have Lost Health Insurance</a>
                                        </h6>
                                        <p class="excerpt mb-0">
                                            California’s governor announced a sweeping rollback of the state’s reopening and Los Angeles and San Diego school districts will be online-only in the fall.
                                        </p>
                                    </article>
                                </div>
                            </div>
                            <!--Start pagination -->
                            <div class="pagination-area pt-30 border-top-2 mt-30 font-heading wow fadeIn animated">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="single-wrap d-flex">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End pagination  -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Author Board</span>
                                </h6>
                                <div class="author-content text-center">
                                    <a href="author.html"><img class="img-circle d-inline-block mb-10" src="{{ asset('assets/frontend/imgs/authors/author-1.jpg') }}" alt=""></a>
                                    <p class="post-title">{{ $authorBoard->name }}</p>
                                    <p>
                                        You should write because you love the shape of stories and sentences and the creation of different words on a page. Writing comes from reading, and reading is the finest teacher of how to write.
                                    </p>
                                    <ul class="header-social-network d-inline-block list-inline font-span">
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                    <p class="font-span mt-15 text-muted">Posts by <a href="{{ route('author',[$authorBoard->slug]) }}">{{ $authorBoard->name }}</a></p>
                                </div>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated" id="newsletter-section">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Most comments</span>
                                </h6>
                                <div class="post-block-list post-module-1 post-module-5">
                                    <ul class="list-post">
                                        <li class="mb-15">
                                            <div class="d-flex">
                                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset('assets/frontend/imgs/news/thumb-3.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">How I Made $11,000 From Writing in 30 Days</a></h6>
                                                    <div class="entry-meta meta-1 font-x-span color-grey mt-10">
                                                        <span class="post-on mr-15">25 April</span>
                                                        <span class="hit-count has-dot">54k Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-15">
                                            <div class="d-flex">
                                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset('assets/frontend/imgs/news/thumb-4.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Incognito Mode Won’t Keep Your Browsing Private</a></h6>
                                                    <div class="entry-meta meta-1 font-x-span color-grey mt-10">
                                                        <span class="post-on mr-15">25 April</span>
                                                        <span class="hit-count has-dot">54k Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{ asset('assets/frontend/imgs/news/thumb-5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">So You Want To Know The Cause of Avicii’s Death?</a></h6>
                                                    <div class="entry-meta meta-1 font-x-span color-grey mt-10">
                                                        <span class="post-on mr-15">25 April</span>
                                                        <span class="hit-count has-dot">54k Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_newsletter wow fadeIn animated">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Newsletter</span>
                                </h6>
                                <div class="newsletter">
                                    <p class="">Always stay on track with the latest news straight to your inbox. Subscribe.</p>
                                    <strong><span class="text-success" id="success-message"></span></strong>
                                    <strong><span class="text-danger" id="email-error"></span></strong>
                                    <form id="newsletter-form">
                                        <div class="form-newsletter-cover">
                                            <div class="form-newsletter">
                                                <input type="email" name="email" id="email" placeholder="Email address">
                                                <button type="submit">
                                                    <span class="long-arrow long-arrow-right"></span>
                                                </button>
                                            </div>                                            
                                        </div>
                                    </form>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    @section('scripts')
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#newsletter-form').on('submit', function(event){
                event.preventDefault();           
                $('#email-error').text('');
            
                email = $('#email').val();          

                $.ajax({
                url: "/store-subscriber",
                type: "POST",
                data:{                 
                    email:email,                  
                },
                success:function(response){
                    console.log(response);
                    if (response) {
                        $('#success-message').text(response.success);
                        $("#newsletter-form")[0].reset();
                        $("#newsletter-form").hide();
                    }
                },
                error: function(response) {
                    $('#email-error').text(response.responseJSON.errors.email);                 
                    }
                });
            });
        </script>
    @endsection
@endsection