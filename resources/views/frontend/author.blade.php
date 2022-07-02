@extends('frontend.layouts.base')

@section('title')
    Author Archive
@endsection

@section('body')
    <main class="mt-30">
        <div class="container">
            <!--archive header-->
            <div class="archive-header text-center">
                <!--author box-->
                <div class="author-bio mt-50">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="{{ asset('assets/frontend/imgs/authors/author-3.jpg') }}" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h3 class="font-weight-bold">{{ $author_name->author_name }}</h3>
                        <h5><i class="ti-star font-x-small mr-5"></i>Elite author</h5>
                        <div class="author-description">You should write because you love the shape of stories and sentences and the creation of different words on a page. </div>
                        <span class="mb-md-0 mb-3 text-muted mr-20">26k articles </span>
                        <span class="mr-50 text-muted">15k follow</span>
                        <div class="author-social text-muted font-small15k follow">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Loop Grid 5-->
            <div class="row mb-50">
                <div class="col-lg-9 col-md-12">
                    <div class="mb-30 pr-50">
                        <div class="loop-grid-3">
                            @foreach ($author_archives as $author_archive)
                                <article class="row wow fadeIn animated">
                                    <div class="col-md-2">
                                        <div class="entry-meta meta-2 font-small color-muted mt-15">
                                            <span class="mr-10 mb-5">{{ $author_archive->created_at->format('d M Y') }}</span><br><br>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <a href="{{ route('category',[$author_archive->category->slug]) }}"><span class="post-cat position-relative">In {{ $author_archive->category->category_name }}</span></a>                                            
                                        </div>
                                        <h3 class="post-title mb-10">
                                            <a href="{{ route('blog.detail',[$author_archive->category->slug,$author_archive->slug]) }}">{{ $author_archive->title }}</a>
                                        </h3>
                                        <p class="excerpt">
                                            {{ $author_archive->short_description }}
                                        </p>
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <span class="position-relative text-muted">Article By {{ $author_archive->author_name }}</span></a>                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <figure class="mt-md-0 mt-sm-3">
                                            <a href="{{ route('blog.detail',[$author_archive->category->slug,$author_archive->slug]) }}">
                                                <img src="{{ asset('storage/blog') }}/{{ $author_archive->image }}" alt="{{ $author_archive->title }}">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="horizontal-divider mt-15 mb-15"></div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination-area pt-15 border-top-2 mt-30 font-heading wow fadeIn  animated">
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
                </div>
                <div class="col-lg-3 col-md-12 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <div class="sidebar-widget widget-latest-posts mb-30 wow fadeIn animated">
                            <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                <span>Most Popular</span>
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
                                                <a class="color-white" href="single.html">
                                                    <img src="{{ asset('assets/frontend/imgs/news/thumb-4.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Incognito Mode Won’t Keep Your Browsing Private</a></h6>
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
                                                <a class="color-white" href="single.html">
                                                    <img src="{{ asset('assets/frontend/imgs/news/thumb-5.jpg') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">So You Want To Know The Cause of Avicii’s Death?</a></h6>
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
                        <div class="sidebar-widget widget-latest-comments mb-30 wow fadeIn  animated">
                            <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                <span>Recent comments</span>
                            </h6>
                            <div class="post-block-list post-module-6 mt-50">
                                <div class="post-module-6-item d-flex wow fadeIn">
                                    <span class="item-count vertical-align"><i class="ti-comment"></i></span>
                                    <div class="alith_post_title_small">
                                        <p class="font-medium mb-10"><a href="single.html">A writer is someone for whom writing is more difficult than it is for other people.</a></p>
                                        <div class="entry-meta meta-1 font-x-small">
                                            <span class="post-on">On 15 April</span>
                                            <span class="hit-count has-dot">by Johan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-module-6-item d-flex wow fadeIn">
                                    <span class="item-count vertical-align"><i class="ti-comment"></i></span>
                                    <div class="alith_post_title_small">
                                        <p class="font-medium mb-10"><a href="single.html">Anybody who has survived his childhood has enough information about life to last him the rest of his days.</a></p>
                                        <div class="entry-meta meta-1 font-x-small">
                                            <span class="post-on">On 05 May</span>
                                            <span class="hit-count has-dot">by Emma</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-module-6-item d-flex wow fadeIn">
                                    <span class="item-count vertical-align"><i class="ti-comment"></i></span>
                                    <div class="alith_post_title_small">
                                        <p class="font-medium mb-10"><a href="single.html">A writer is someone for whom writing is more difficult than it is for other people.</a></p>
                                        <div class="entry-meta meta-1 font-x-small">
                                            <span class="post-on">On 15 May</span>
                                            <span class="hit-count has-dot">by Steven</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_newsletter mb-50 wow fadeIn animated">
                            <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                <span>Newsletter</span>
                            </h6>
                            <div class="newsletter">
                                <p class="">Continue reading uninterrupted with a subscription</p>
                                <form target="_blank" action="#" method="get" class="subscribe_form relative mail_part">
                                    <div class="form-newsletter-cover">
                                        <div class="form-newsletter">
                                            <input type="email" name="EMAIL" placeholder="Email address" required="">
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
    </main>
@endsection