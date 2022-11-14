@extends('frontend.layouts.base')

@section('title')
    {{ $category->category_name }}
@endsection

@section('body')
    <main class="mt-30">
        <div class="container">
            <!--archive header-->
            <div class="archive-header text-center">
                <div class="breadcrumb font-small">
                    <a href="{{ route('homepage') }}">Home</a>
                    <span></span> {{ $category->category_name }}
                </div>
                <h2 class="font-weight-bold"><span class="font-family-normal">{{ $category->category_name }}</span></h2>
                <p class="width-50">
                    {{ $category->description }}
                </p>
                <span class="line-dots mt-30 mb-30"></span>
            </div>
            <!--Loop Grid 3-->
            <div class="the-world mb-30">
                <div class="loop-grid-3 row vertical-divider">                    
                    @foreach ($recent_posts as $recent_post)
                        @if($recent_post->status == 'published')
                            <div class="col-lg-7 col-md-12">
                                <article class="first-post wow fadeIn animated mb-md-4 mb-lg-0">
                                    <figure class="mb-30">
                                        <a href="{{ route('blog.detail',[$recent_post->category->slug,$recent_post->slug]) }}">
                                            <img src="{{ asset('storage/blog/') }}/{{ $recent_post->image }}" alt="{{ $recent_post->title }}">
                                        </a>
                                        <span class="post-format position-top-right text-uppercase font-small">
                                            <i class="ti-image"></i>
                                        </span>
                                    </figure>
                                    <div class="post-content text-center plr-5-percent">
                                        <h2 class="post-title mb-30 position-relative">
                                            <a href="{{ route('blog.detail',[$recent_post->category->slug,$recent_post->slug]) }}">{{ $recent_post->title }}</a>
                                        </h2>
                                        <p class="excerpt">
                                            {{ $recent_post->short_description }}
                                        </p>
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <span class="post-cat position-relative">In {{ $recent_post->category->category_name }}</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-lg-5 col-md-12">
                        <div class="row vertical-divider">                            
                            @foreach ($blogs as $blog)
                                @if($blog->status == 'published')
                                    <article class="col-md-6 wow fadeIn animated">
                                        <figure class="mb-15">
                                            <a href="{{ route('blog.detail',[$blog->category->slug,$blog->slug]) }}">
                                                <img src="{{ asset('storage/blog/') }}/{{ $blog->image }}" alt="{{ $blog->title }}">
                                            </a>
                                        </figure>
                                        <h6 class="post-title font-weight-bold mb-10">
                                            <a href="{{ route('blog.detail',[$blog->category->slug,$blog->slug]) }}">{{ $blog->title }}</a>
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
                                    </article>                                       
                                @endif
                            @endforeach                                    
                        </div>                        
                    </div>
                </div>
                <span class="line-dots mb-15 mt-30"></span>
            </div>
            <div class="recent-new mb-30">
                <div class="row vertical-divider">
                    <div class="col-lg-9 col-md-12">
                        <div class="loop-grid-3">
                            @if ($blogs->count() > 0)
                                @foreach ($categories as $category)
                                    @if ($category->status == 'published')
                                        <article class="row wow fadeIn animated">
                                            <div class="col-md-4">
                                                <figure class="mb-md-0 mb-sm-3"><a href="{{ route('blog.detail',[$category->category->slug,$category->slug]) }}">
                                                    <img src="{{ asset('storage/blog/'.$category->image) }}" alt="{{ $category->title }}"></a>
                                                </figure>
                                            </div>
                                            <div class="col-md-8">
                                                <h4 class="post-title mb-10 font-weight-bold">
                                                    <a href="{{ route('blog.detail',[$category->category->slug,$category->slug]) }}">{{ $category->title }}</a>
                                                </h4>
                                                @if($category->is_live == 'isLive')
                                                    <p class="excerpt mb-20">
                                                        <span class="live-now text-danger">Live</span> {{ $category->short_description }}
                                                    </p>
                                                @else
                                                    <p class="excerpt mb-20">
                                                    {{ $category->short_description }}
                                                    </p>
                                                @endif                                            
                                                <div class="entry-meta meta-2 font-x-small color-muted">
                                                    <p class="mb-5">
                                                        By <a href="{{ route('author',$category->user->slug) }}"><span class="author-name">{{ $category->author_name }}</span></a>
                                                    </p>
                                                    <span class="mr-10"> {{ $category->created_at->format('d M Y') }}</span>
                                                    <span class="has-dot"> {{ $category->read_time }} mins read</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="horizontal-divider mt-15 mb-15"></div>
                                            </div>
                                        </article>
                                    @endif                                
                                @endforeach
                            @else
                                <img src="{{ asset('assets/frontend/imgs/No data.png') }}" alt="No-Data" style="width: 50%">
                            @endif

                            <!--Start pagination -->
                            {{-- <div class="pagination-area pt-30 border-top-2 mt-30 font-heading wow fadeIn animated">
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
                            </div> --}}
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
                                    <a href="{{ route('author',$authorBoard->slug) }}">
                                        @if (!empty($authorBoard->avatar))
                                            <img class="img-circle d-inline-block mb-10" src="{{ asset('storage/avatar/'.$authorBoard->avatar) }}" alt="{{ $authorBoard->avatar }}">                                       
                                        @else
                                            <img class="img-circle d-inline-block mb-10" src="{{ asset('assets/backend/avatar.png') }}" alt="{{ $authorBoard->avatar }}"></a>
                                        @endif
                                    </a>
                                    <p class="post-title">{{ $authorBoard->name }}</p>                           
                                    <p>
                                        @if (!empty($authorBoard->about_author))
                                            {{ $authorBoard->about_author }}
                                        @else
                                            <p>Elite Author</p>
                                        @endif
                                    </p>
                                    <ul class="header-social-network d-inline-block list-inline font-small">
                                        @if ($authorBoard->social_facebook != null)                                           
                                            <li class="list-inline-item">
                                                <a class="social-icon facebook-icon text-xs-center" target="_blank" href="{{ $authorBoard->social_facebook }}"><i class="ti-facebook"></i></a>
                                            </li>
                                        @endif
        
                                        @if ($authorBoard->social_twitter != null)
                                        <li class="list-inline-item">
                                            <a class="social-icon twitter-icon text-xs-center" target="_blank" href="{{ $authorBoard->social_twitter }}"><i class="ti-twitter-alt"></i></a>
                                        </li>
                                        @endif
        
                                        @if ($authorBoard->social_instagram != null)
                                        <li class="list-inline-item">
                                            <a class="social-icon instagrm-icon text-xs-center" target="_blank" href="{{ $authorBoard->social_instagram }}"><i class="ti-instagram"></i></a>
                                        </li>
                                        @endif                                         
                                    </ul>
                                    <p class="font-small mt-15 text-muted">Posts By <a href="{{ route('author',$authorBoard->slug) }}">{{ $authorBoard->name }}</a></p>
                                </div>
                            </div>                           
                            <div class="sidebar-widget widget_newsletter wow fadeIn animated" id="newsletter">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Newsletter</span>
                                </h6>
                                <div class="newsletter">
                                    <p class="">Continue reading uninterrupted with a subscription</p>
                                    <strong><span class="text-success" id="success-message"></span></strong>
                                    <strong><span class="text-danger" id="email-error"></span></strong>
                                    <form enctype="form/multipart" id="newsletter-form">                                       
                                        <div class="form-newsletter-cover">
                                            <div class="form-newsletter">                                               
                                                <input type="email" id="email" name="email" placeholder="Email address" class="form-control">                                                
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
            </div>
        </div>
    </main>

    @section('scripts')
        <script type="text/javascript">
            $.ajaxSetup({
                headers : {
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
