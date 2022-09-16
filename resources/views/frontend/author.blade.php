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
                     <img src="{{ asset('assets/frontend/imgs/authors/author-3.jpg') }}" alt="" class="avatar">
                    </div>
                    <div class="author-info">
                        <h3 class="font-weight-bold">{{ $author_name->author_name }}</h3>
                        <h5><i class="ti-star font-x-small mr-5"></i>Elite author</h5>
                        <div class="author-description">You should write because you love the shape of stories and sentences and the creation of different words on a page. </div>
                        @if($author_archives->count() > 0 && $author_archives->count() < 2)
                            <span class="mb-md-0 mb-3 text-muted mr-20">I have posted {{ $author_archives->count() }} article </span>
                        @else
                            <span class="mb-md-0 mb-3 text-muted mr-20">I have posted {{ $author_archives->count() }} articles </span>
                        @endif                       
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
                                            <a href="{{ route('category',[$author_archive->category->slug]) }}/">
                                                <span class="post-cat position-relative">In {{ $author_archive->category->category_name }}</span>
                                            </a>
                                        </div>
                                        <h3 class="post-title mb-10">
                                            <a href="{{ route('blog.detail',[$author_archive->category->slug,$author_archive->slug]) }}/">{{ $author_archive->title }}</a>
                                        </h3>
                                        @if($author_archive->is_live == 'isLive')
                                            <p class="excerpt">
                                                <span class="live-now text-danger">Live</span> {{ $author_archive->short_description }}
                                            </p>
                                        @else
                                            <p class="excerpt">
                                                {{ $author_archive->short_description }}
                                            </p>
                                        @endif                                         
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <span class="position-relative text-muted">Article By {{ $author_archive->author_name }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <figure class="mt-md-0 mt-sm-3">
                                            <a href="{{ route('blog.detail',[$author_archive->category->slug,$author_archive->slug]) }}/">
                                                <img src="{{ asset('storage/blog/'.$author_archive->image) }}" alt="{{ $author_archive->title }}">
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
                    {{-- <div class="pagination-area pt-15 border-top-2 mt-30 font-heading wow fadeIn  animated">
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
                </div>
                <div class="col-lg-3 col-md-12 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <div class="sidebar-widget widget-latest-posts mb-30 wow fadeIn animated">
                            <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                <span>kindle your curiosity</span>
                            </h6>
                            <div class="post-block-list post-module-1 post-module-5">
                                <ul class="list-post">
                                    @foreach($randomPosts as $randomPost)
                                        <li class="mb-15">
                                            <div class="d-flex">
                                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                    <a class="color-white" href="{{ route('blog.detail',[$randomPost->category->slug,$randomPost->slug]) }}">
                                                        <img src="{{ asset('storage/blog/') }}/{{ $randomPost->image }}" alt="{{ $randomPost->title }}">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-10 text-limit-2-row">
                                                        <a href="{{ route('blog.detail',[$randomPost->category->slug,$randomPost->slug]) }}">{{ $randomPost->title }}</a>
                                                    </h6>
                                                    <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                                        <span class="post-on mr-15">{{ $randomPost->created_at->format('d M') }}</span>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>                       
                        <div class="sidebar-widget widget_newsletter mb-50 wow fadeIn animated">
                            <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                <span>Newsletter</span>
                            </h6>
                            <div class="newsletter">
                                <p class="">Stay ahead of the curve. Subscribe to our weekly newsletter.</p>
                                <strong><span class="text-success" id="success-message"></span></strong>
                                <form class="subscribe_form relative mail_part" id="newsletter-form">
                                    <div class="form-newsletter-cover">
                                        <div class="form-newsletter">
                                            <input type="email" name="email" placeholder="Email address" id="email">
                                            <button type="submit">
                                                <span class="long-arrow long-arrow-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <strong><span class="text-danger" id="email-error"></span></strong>
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