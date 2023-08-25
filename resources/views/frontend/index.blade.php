@extends('frontend.layouts.base')

@section('title')
    Entertainment News, Videos and Breaking News 
@endsection

@section('body')
    <main class="mt-30">
        <div class="container">
            <!--Featured post Start-->           
            <div class="the-world mb-30">
                <div class="loop-grid-3 row vertical-divider">
                    <div class="col-lg-7 col-md-12">
                        <div class="slide-fade mb-lg-0 mb-md-4 mb-sm-4">
                            @if($recent_posts != null)
                                @foreach ($recent_posts as $recent_post)
                                    @if($recent_post->status == 'published')
                                        <article class="first-post slide-fade-item mb-md-4 mb-lg-0">
                                            <figure class="mb-30">
                                                <a href="{{ route('blog.detail',[$recent_post->category->slug, $recent_post->slug, $recent_post->id]) }}">
                                                    <img src="{{ asset('storage/blog/'.$recent_post->image) }}" alt="{{ $recent_post->title }}" title="{{ $recent_post->title }}">
                                                </a>
                                            </figure>
                                            <div class="post-content">
                                                <h3 class="mb-20 position-relative font-weight-bold">
                                                    <a href="{{ route('blog.detail',[$recent_post->category->slug, $recent_post->slug, $recent_post->id]) }}">{{ $recent_post->title }}</a>
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
                            @else
                                <div class="post-content">
                                    <p>No Posts Found</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row vertical-divider">
                            @if (!empty($blogs))
                                @foreach($blogs as $blog)
                                    @if($blog->status == 'published')
                                        <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                                            <figure class="mb-15">
                                                <a href="{{ route('blog.detail',[$blog->category->slug, $blog->slug, $blog->id]) }}">
                                                    <img src="{{ asset('storage/blog/'.$blog->image) }}" alt="{{ $blog->title }}">
                                                </a>
                                            </figure>
                                            <h6 class="post-title font-weight-bold mb-10">
                                                <a href="{{ route('blog.detail',[$blog->category->slug, $blog->slug, $blog->id]) }}">{{ $blog->title }}</a>
                                            </h6>
                                            @if($blog->is_live == 'isLive')
                                                <p class="excerpt">
                                                    <span class="live-now text-danger">Live</span> {{ $blog->short_description }}
                                                </p>
                                                @else
                                                <p class="excerpt">
                                                    {{ Str::limit($blog->short_description, 70) }}
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
                            @else
                                <div class="container">
                                    <p>No Posts Found</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <section class="hightlight-today mb-30">
                <h6 class="font-weight-bold widget-header widget-header-style-5 mb-10">
                    <span class="d-inline-block block mb-10 widget-title font-family-normal">Today's Highlight</span>
                </h6>
                <div class="loop-grid-5 row vertical-divider">
                    @if (!empty($todaysHighlights))
                        @foreach($todaysHighlights as $highlight)
                            @if($highlight->status == 'published')
                                <article class="col-1-5 col-sm-12 wow fadeIn animated">
                                    <figure class="mb-15">
                                        <a href="{{ route('blog.detail',[$highlight->category->slug, $highlight->slug, $highlight->id]) }}">
                                            <img src="{{ asset('storage/blog/'.$highlight->image) }}" alt="{{ $highlight->title }}">
                                        </a>
                                    </figure>
                                    <h6 class="font-weight-500 mb-20">
                                        <a href="{{ route('blog.detail',[$highlight->category->slug, $highlight->slug, $highlight->id]) }}">{{ $highlight->title }}</a>
                                    </h6>
                                </article>
                            @endif
                        @endforeach
                    @else
                        <p class="container">No Posts Found</p>
                    @endif                    
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
                            @if (!empty($editorPicked))
                                @foreach ($editorPicked as $editor)
                                    @if ($editor->status == 'published')
                                        <article class="col-md-6 wow fadeIn animated">
                                            <figure class="mb-15">
                                                <a href="{{ route('blog.detail',[$editor->category->slug, $editor->id, $editor->slug]) }}">
                                                    <img src="{{ asset('storage/blog/'.$editor->image) }}" alt="{{ $editor->title }}">
                                                </a>
                                            </figure>
                                            <h6 class="post-title font-weight-bold mb-10">
                                                <a href="{{ route('blog.detail',[$editor->category->slug, $editor->id, $editor->slug]) }}">
                                                    {{ $editor->title }}
                                                </a>
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
                                    @endif                                
                                @endforeach     
                            @else
                                <p class="container">No Posts Found</p>
                            @endif                                     
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 d-none d-lg-block">                       
                        @foreach ($blogs as $blog)
                            <article class="row wow fadeIn animated">
                                <div class="col-12">
                                    <div class="has-top-border mb-15 mt-15"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="entry-meta meta-0 mb-15 font-span">
                                        <a href="{{ route('category',$blog->category->slug) }}/">
                                            <span class="post-cat position-relative">In {{ $blog->category_name }}</span>
                                        </a>
                                    </div>
                                    <h6 class="post-title mb-20 font-weight-bold">
                                        <a href="{{ route('blog.detail',[$blog->category->slug, $blog->slug, $blog->id]) }}/">{{ $blog->title }}</a>
                                    </h6>
                                    @if ($blog->is_live == 'isLive')
                                        <span class="live-now text-danger">Live</span> {{ $blog->short_description }}
                                    @else
                                        <p class="excerpt mb-0">{{ $blog->short_description }}</p>
                                    @endif  
                                </div>
                                <div class="col-md-6">
                                    <figure class="mb-0">
                                        <img src="{{ asset('storage/blog/'.$blog->image) }}" title="{{ $blog->title }}"
                                            alt="{{ $blog->title }}">
                                    </figure>
                                </div>
                            </article>                            
                        @endforeach                        
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
                            @if (!empty($recentsSection))
                                @if($recentsSection->status == 'published')
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-6 mb-md-0 mb-sm-3">
                                            <figure class="mb-0">
                                                <a href="{{ route('blog.detail',[$recentsSection->category->slug, $recentsSection->id, $recentsSection->slug]) }}">
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
                                                    <a href="{{ route('blog.detail',[$recentsSection->category->slug, $recentsSection->id, $recentsSection->slug]) }}">{{ $recentsSection->title }}</a>
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
                            @else
                                <p class="container">No Posts Found</p>
                            @endif                            
                            <div class="row vertical-divider">
                                <div class="col-md-8">
                                    @if (!empty($random_blogs))
                                        @foreach ($random_blogs as $random_blog)
                                            @if ($random_blog->status == 'published')
                                                <article class="row wow fadeIn animated">
                                                    <div class="col-md-4">
                                                        <figure class="mb-md-0 mb-sm-3">
                                                            <img src="{{ asset('storage/blog/'.$random_blog->image) }}" alt="{{ $random_blog->title }}">
                                                        </figure>
                                                    </div>
                                                    <div class="col-md-8 pl-0">
                                                        <div class="entry-meta meta-0 mb-15 font-span">
                                                            <a href="{{ route('category',$random_blog->category->slug) }}/">
                                                                <span class="post-cat position-relative">{{ $random_blog->category_name }}</span>
                                                            </a>
                                                        </div>
                                                        <h6 class="post-title mb-20 font-weight-bold">
                                                            <a href="{{ route('blog.detail',[$random_blog->category->slug, $random_blog->id, $random_blog->slug]) }}/">
                                                                {{ $random_blog->title }}
                                                            </a>
                                                        </h6>
                                                        @if ($random_blog->is_live == 'isLive')
                                                            <p class="excerpt">
                                                                <span class="live-now text-danger">Live</span> {{ $random_blog->short_description }}
                                                            </p>
                                                        @else
                                                            {{ $random_blog->short_description }}
                                                        @endif
                                                        <p class="excerpt mb-0">{{ $random_blog->short_description }}</p>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                                    </div>
                                                </article>
                                            @endif                                        
                                        @endforeach
                                    @else
                                        <p class="container">No Posts Found</p>
                                    @endif                                    
                                </div>
                                <div class="col-md-4">
                                    @if (!empty($side))
                                        <article class="wow fadeIn animated">
                                            <figure class="mb-15">
                                                <a href="{{ route('blog.detail',[$side->category->slug, $side->slug, $side->slug]) }}">
                                                    <img src="{{ asset('storage/blog/'.$side->image) }}" alt="{{ $side->title }}">
                                                </a>
                                            </figure>
                                            <h6 class="post-title font-weight-bold mb-10">
                                                <a href="{{ route('blog.detail',[$side->category->slug, $side->slug, $side->slug]) }}">{{ $side->title }}</a>
                                            </h6>
                                            <p class="excerpt">{{ $side->short_description }}</p>
                                            <div class="horizontal-divider mt-15 mb-15"></div>
                                        </article>
                                    @else
                                        <p class="container">No Articles Found</p>
                                    @endif
                                    
                                    @foreach ($editorPicked as $random_blog)
                                        <article class="wow fadeIn animated">
                                            <h6 class="post-title mb-10 font-weight-bold">
                                                <a href="{{ route('blog.detail',[$random_blog->category->slug, $random_blog->id, $random_blog->slug]) }}">{{ $random_blog->title }}</a>
                                            </h6>
                                            @if ($random_blog->is_live == 'isLive')
                                                <p class="excerpt">
                                                    <span class="live-now text-danger">Live</span> {{ $random_blog->short_description }}
                                                </p>
                                            @else
                                                {{ $random_blog->short_description }}
                                            @endif                                           
                                            <div class="horizontal-divider mt-15 mb-15"></div>
                                        </article>
                                    @endforeach 
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Author Board</span>
                                </h6>
                                <div class="author-content text-center">
                                    @if (!empty($authorBoard))
                                        <a href="{{ route('author',$authorBoard->slug) }}">
                                            @if (!empty($authorBoard->avatar))
                                                <img class="img-circle d-inline-block mb-10" src="{{ asset('storage/avatar/'.$authorBoard->avatar) }}" alt="{{ $authorBoard->name }}">
                                            @else
                                                <img class="img-circle d-inline-block mb-10" src="{{ asset('assets/backendavatar.png') }}" alt="{{ $authorBoard->name }}">
                                            @endif
                                        
                                        </a>
                                        <p class="post-title">{{ $authorBoard->name }}</p>
                                        <p>
                                            {{ $authorBoard->about_author }}
                                        </p>
                                        <ul class="header-social-network d-inline-block list-inline font-span">
                                            @if ($authorBoard->social_facebook != null)
                                                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="{{ $authorBoard->social_facebook }}"><i class="ti-facebook"></i></a></li> 
                                            @endif

                                            @if ($authorBoard->social_twitter != null)
                                                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="{{ $authorBoard->social_twitter }}"><i class="ti-twitter-alt"></i></a></li> 
                                            @endif

                                            @if ($authorBoard->social_instagram != null)
                                                <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="{{ $authorBoard->social_instagram }}"><i class="ti-instagram"></i></a></li> 
                                            @endif
                                        </ul>
                                        <p class="font-span mt-15 text-muted">View Posts by <a href="{{ route('author',[$authorBoard->slug]) }}"><u>{{ $authorBoard->name }}</u></a></p>
                                                                            
                                    @else
                                        <p class="container">No Authors Found</p>
                                    @endif                                    
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