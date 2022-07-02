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
                    @endforeach

                    <div class="col-lg-5 col-md-12">
                        <div class="row vertical-divider">
                            @foreach ($blogs as $blog)
                                <article class="col-md-6 wow fadeIn animated">
                                    <figure class="mb-15">
                                        <a href="{{ route('blog.detail',[$blog->category->slug,$blog->slug]) }}">
                                            <img src="{{ asset('storage/blog/') }}/{{ $blog->image }}" alt="{{ $blog->title }}">
                                        </a>
                                    </figure>
                                    <h6 class="post-title font-weight-bold mb-10">
                                        <a href="{{ route('blog.detail',[$blog->category->slug,$blog->slug]) }}">{{ $blog->title }}</a>
                                    </h6>
                                    <p class="excerpt">
                                       {{ $blog->short_description }}
                                    </p>
                                </article>
                            @endforeach                            

                            {{-- <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="{{ route('blog.detail') }}">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-19.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="{{ route('blog.detail') }}">Why The New York City subway signage is considered iconic? The true story</a>
                                </h6>
                                <p class="excerpt">
                                    Black and white signs with Helvetica showing just the information subway riders need at the points they need it and nothing more. After decades it still does its job remarkably well.
                                </p>
                            </article> --}}
                            <div class="col-12">
                                <div class="horizontal-divider mb-15 mt-15"></div>
                            </div>
                        </div>
                        <div class="row vertical-divider">
                            <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="#">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-8.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="#">This Freedom Rider was shot at, attacked, and put on death row—all by 20 years old</a>
                                </h6>
                                <p class="excerpt">
                                    As Trumpauer left Jackson behind, she didn’t know if her life was about to get better or worse. The Riders, many of whom were student
                                </p>
                            </article>
                            <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="#">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-4.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="#">This athlete conquered poverty, racism, and polio in order to became an Olympian</a>
                                </h6>
                                <p class="excerpt">
                                    <span class="live-now text-danger">Live</span>Six-year-old Wilma Rudolph was different from the other kids. They could walk, run, and jump
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
                <span class="line-dots mb-15 mt-30"></span>
            </div>
            <div class="recent-new mb-30">
                <div class="row vertical-divider">
                    <div class="col-lg-9 col-md-12">
                        <div class="loop-grid-3">
                            <article class="row wow fadeIn animated">
                                <div class="col-md-4">
                                    <figure class="mb-md-0 mb-sm-3"><a href="#"><img src="{{ asset('assets/frontend/imgs/news/news-16.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="post-title mb-10 font-weight-bold">
                                        <a href="#">The Endgame for LinkedIn Is Coming</a>
                                    </h4>
                                    <p class="excerpt mb-20">
                                        After two years, Microsoft still hasn’t delivered on its grand vision for LinkedIn. And it may never do so. Every time this LinkedIn commercial pops up on YouTube I am reminded of how low the company has fallen to.
                                    </p>
                                    <div class="entry-meta meta-2 font-x-small color-muted">
                                        <p class="mb-5">
                                            By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                        </p>
                                        <span class="mr-10"> 15 April 2020</span>
                                        <span class="has-dot"> 8 mins read</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-15 mb-15"></div>
                                </div>
                            </article>
                            <article class="row wow fadeIn animated">
                                <div class="col-md-4">
                                    <figure class="mb-md-0 mb-sm-3"><a href="#"><img src="{{ asset('assets/frontend/imgs/news/news-18.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="post-title mb-10 font-weight-bold">
                                        <a href="#">Neuroscience Says Listening to This Song Reduces Anxiety by Up to 65 Percent</a>
                                    </h4>
                                    <p class="excerpt mb-20">
                                        After a calamitous drop in March, the stock market has had a ferocious rally, despite a cascade of awful news. How can investors cope?
                                    </p>
                                    <div class="entry-meta meta-2 font-x-small color-muted">
                                        <p class="mb-5">
                                            By <a href="author.html"><span class="author-name">Sally Rooney</span></a>
                                        </p>
                                        <span class="mr-10"> 12 May 2020</span>
                                        <span class="has-dot"> 6 mins read</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-15 mb-15"></div>
                                </div>
                            </article>
                            <article class="row wow fadeIn animated">
                                <div class="col-md-4">
                                    <figure class="mb-md-0 mb-sm-3"><a href="#"><img src="{{ asset('assets/frontend/imgs/news/news-15.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="post-title mb-10 font-weight-bold">
                                        <a href="#">I Have A Theory That Donald Glover And Childish Gambino Are Secretly The Same Person</a>
                                    </h4>
                                    <p class="excerpt mb-20">
                                        For anyone who doesn’t know who these 2 dudes are, Donald Glover is a beloved actor/writer/comedian and Childish Gambino is a popular musician.
                                    </p>
                                    <div class="entry-meta meta-2 font-x-small color-muted">
                                        <p class="mb-5">
                                            By <a href="author.html"><span class="author-name">David Chariandy</span></a>
                                        </p>
                                        <span class="mr-10"> 15 May 2020</span>
                                        <span class="has-dot"> 18 mins read</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-15 mb-15"></div>
                                </div>
                            </article>
                            <article class="row wow fadeIn animated">
                                <div class="col-md-4">
                                    <figure class="mb-md-0 mb-sm-3"><a href="#"><img src="{{ asset('assets/frontend/imgs/news/news-14.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="post-title mb-10 font-weight-bold">
                                        <a href="#">Soft and Comfortable with the Buckyball Creative Office Chair</a>
                                    </h4>
                                    <p class="excerpt mb-20">
                                        Buckyball – creative office chair created by designer Svyatoslav Zbroy – can be a part of the scientific research of fullerenes. Six spheres, consisting of twelve pentagons each, form an unusual structure. Like a stable and multifunctional carbon molecule, Buckyball can withstand heavy loads without losing its shape.
                                    </p>
                                    <div class="entry-meta meta-2 font-x-small color-muted">
                                        <p class="mb-5">
                                            By <a href="author.html"><span class="author-name">Jessie Greengrass</span></a>
                                        </p>
                                        <span class="mr-10"> 15 March 2020</span>
                                        <span class="has-dot"> 11 mins read</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-15 mb-15"></div>
                                </div>
                            </article>
                            <article class="row wow fadeIn animated">
                                <div class="col-md-4">
                                    <figure class="mb-md-0 mb-sm-3"><a href="#"><img src="{{ asset('assets/frontend/imgs/news/news-6.jpg') }}" alt=""></a></figure>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="post-title mb-10 font-weight-bold">
                                        <a href="#">World’s 12 Most Expensive Luxury Cars</a>
                                    </h4>
                                    <p class="excerpt mb-20">
                                        These beautiful vessels are built with the latest technology and of course incredibly luxurious. Their owners are very wealthy people – members of royal families, American business magnates, Russian billionaire businessmen and world-class politicians.
                                    </p>
                                    <div class="entry-meta meta-2 font-x-small color-muted">
                                        <p class="mb-5">
                                            By <a href="author.html"><span class="author-name">Eley Williams</span></a>
                                        </p>
                                        <span class="mr-10"> 25 February 2020</span>
                                        <span class="has-dot"> 14 mins read</span>
                                    </div>
                                </div>
                            </article>
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
                                    <span>Author Award</span>
                                </h6>
                                <div class="author-content text-center">
                                    <a href="author.html"><img class="img-circle d-inline-block mb-10" src="{{ asset('assets/frontend/imgs/authors/author-1.jpg') }}" alt=""></a>
                                    <p><img src="{{ asset('assets/frontend/imgs/authors/sign.png') }}" alt=""></p>
                                    <p>
                                        You should write because you love the shape of stories and sentences and the creation of different words on a page. Writing comes from reading, and reading is the finest teacher of how to write.
                                    </p>
                                    <ul class="header-social-network d-inline-block list-inline font-small">
                                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                    <p class="font-small mt-15 text-muted"><a href="#">View more</a></p>
                                </div>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Most comments</span>
                                </h6>
                                <div class="post-block-list post-module-1 post-module-5">
                                    <ul class="list-post">
                                        <li class="mb-15">
                                            <div class="d-flex">
                                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="#">
                                                        <img src="{{ asset('assets/frontend/imgs/news/thumb-3.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="#">How I Made $11,000 From Writing in 30 Days</a></h6>
                                                    <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                        <span class="post-on mr-15">25 April</span>
                                                        <span class="hit-count has-dot">54k Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-15">
                                            <div class="d-flex">
                                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="#">
                                                        <img src="{{ asset('assets/frontend/imgs/news/thumb-4.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="#">Incognito Mode Won’t Keep Your Browsing Private</a></h6>
                                                    <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                        <span class="post-on mr-15">25 April</span>
                                                        <span class="hit-count has-dot">54k Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex">
                                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="#">
                                                        <img src="{{ asset('assets/frontend/imgs/news/thumb-5.jpg') }}" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row"><a href="#">So You Want To Know The Cause of Avicii’s Death?</a></h6>
                                                    <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                        <span class="post-on mr-15">25 April</span>
                                                        <span class="hit-count has-dot">54k Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_newsletter wow fadeIn animated" id="newsletter">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Newsletter</span>
                                </h6>
                                <div class="newsletter">
                                    <p class="">Continue reading uninterrupted with a subscription</p>
                                    <form action="{{ route('subscriber.store') }}" method="POST" enctype="form/multipart">
                                        @csrf
                                        <div class="form-newsletter-cover">
                                            <div class="form-newsletter">
                                                <input type="email" name="email" placeholder="Email address" class="form-control @error('email') is-invalid @enderror">
                                                @error('email')<span class="text-danger"><strong>{{ $message }}</strong></span>@enderror
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
@endsection
