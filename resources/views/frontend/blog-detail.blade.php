@extends('frontend.layouts.base')

@section('title')
    {{ $blogDetail->title }}
@endsection

@section('body')
    <main class="mt-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-30 mt-50">
                @if ($blogDetail->is_live == 'isLive')
                    <div class="live-now text-danger">
                        <strong> Updated {{ $blogDetail->updated_at->diffForhumans() }}</strong>
                    </div>  
                @endif                 
                <h1 class="entry-title mb-30 font-weight-500">
                   {{ $blogDetail->title }}
                </h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <a class="author-avatar" href="{{ route('author',$blogDetail->user->slug) }}" title="Posted By {{ $blogDetail->author_name }}">
                                    @if (!empty($blogDetail->user->avatar))
                                        <img class="img-circle" src="{{ asset('storage/avatar/'.$blogDetail->user->avatar) }}" alt="{{ $blogDetail->author_name }}">
                                    @else
                                        <img class="img-circle" src="{{ asset('assets/backend/avatar.png') }}" alt="{{ $blogDetail->author_name }}">
                                    @endif
                                </a>
                                By <a href="{{ route('author',$blogDetail->user->slug) }}" title="Posted by {{ $blogDetail->author_name }}"><span class="author-name font-weight-bold">{{ $blogDetail->author_name }}</span></a>
                            </p>
                            <span class="mr-10">{{ $blogDetail->created_at->format('F, d Y') }}</span>
                            <span class="has-dot"> {{ $blogDetail->read_time }} mins read</span>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="single-tools">
                            <div class="entry-meta align-items-center meta-2 font-small color-muted">
                                <span class="mr-15">
                                    <span class="mr-5">Font size</span>
                                    <i class="fonts-size-zoom-in ti-zoom-in mr-5"></i>
                                    <i class="fonts-size-zoom-out ti-zoom-out"></i>
                                </span>
                                <a class="single-print mr-15"><span><i class="ti-printer mr-5"></i>Print</span></a>
                                <div class="vline-space d-inline-block"></div>
                                <a href="#"><span><i class="ti-email mr-5"></i>Email</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center border-radius-2">
                <img src="{{ asset('storage/blog') }}/{{ $blogDetail->image }}" alt="{{ $blogDetail->title }}">
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="excerpt mb-30">
                    <p>{{ $blogDetail->short_description }}</p>
                </div>
                <div class="entry-left-col">                  
                    <div class="social-sticky" href="#" target="_blank">
                        {!! $socialShare !!}
                    </div>                   
                </div>
                <div class="entry-main-content">                    
                    @php echo html_entity_decode($blogDetail->description) @endphp
                    <!--Begin Subcrible-->
                    <div class="border-radius-5 mb-50 border p-30 wow fadeIn animated">
                        <div class="row justify-content-between">
                            <div class="col-md-5 mb-2 mb-md-0">
                                <h5 class="font-weight-bold secondfont mb-30 mt-0">Become a member</h5>
                                <p class="font-small">Get the latest news right in your inbox. We never spam!</p>
                            </div>
                            <div class="col-md-7">                                
                                <div class="row">                                                                         
                                    <strong><span class="text-success"id="success-message"></span></strong>                                                                     
                                    <form id="subscriber-form">                                        
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter your e-mail address">                                                                                  
                                            <strong><span class="text-danger" id="email-error"></span></strong>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <button type="submit" class="btn btn-info btn-block">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Subcrible-->
                    <p>{{ $blogDetail->short_description }}</p>
                </div>
                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">                       
                       {{-- <a href="category.html" rel="tag">Article</a>
                       <a href="category.html" rel="tag">nature</a>
                       <a href="category.html" rel="tag">conserve</a>  --}}
                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated">
                    <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                        @if ($comments->count() > 0 && $comments->count() < 2)                            
                            <span class="hit-count mr-15"><i class="ti-comment mr-5"></i>{{ $comments->count() }} comment</span>                            
                        @else
                            <span class="hit-count mr-15"><i class="ti-comment mr-5"></i>{{ $comments->count() }} comments</span>
                        @endif                       
                    </div>                   
                    <ul class="d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center"><i class="ti-twitter-alt"></i></a></li>                        
                    </ul>                                       
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                <!--author box-->
                <div class="author-bio wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="{{ route('author',$blogDetail->user->slug) }}">
                            @if (!empty($blogDetail->user->avatar))
                                <img class="img-circle" src="{{ asset('storage/avatar/'.$blogDetail->user->avatar) }}" alt="{{ $blogDetail->blogDetail }}">
                            @else
                                <img class="img-circle" src="{{ asset('assets/backend/avatar.png') }}" alt="{{ $blogDetail->blogDetail }}">
                            @endif
                        </a>
                    </div>
                    <div class="author-info">
                        <h3><span class="vcard author"><span class="fn"><a href="{{ route('author',$blogDetail->user->slug) }}" title="Posted by {{ $blogDetail->blogDetail }}" rel="author">{{ $blogDetail->blogDetail }}</a></span></span>
                        </h3>
                        <h5>About author</h5>
                        @if(!empty($blogDetail->user->about_author))
                            <div class="author-description">{{ $blogDetail->user->about_author }}</div>
                        @else
                            <div class="author-description">Elite Author</div>
                        @endif
                        <a href="{{ route('author',[$blogDetail->user->slug]) }}" class="author-bio-link mb-md-0 mb-3"
                           title="Posts By {{ $blogDetail->author_name }}">View all posts</a>
                        <div class="author-social">
                            <ul class="author-social-icons">
                                @if ($blogDetail->user->social_facebook != null)
                                    <li class="author-social-link-facebook"><a href="{{ $blogDetail->user->social_facebook }}" target="_blank" ><i class="ti-facebook"></i></a></li> 
                                @endif

                                @if ($blogDetail->user->social_twitter != null)
                                    <li class="author-social-link-twitter"><a href="{{ $blogDetail->user->social_twitter }}" target="_blank"><i class="ti-twitter-alt"></i></a></li> 
                                @endif

                                @if ($blogDetail->user->social_instagram != null)
                                    <li class="author-social-link-instagram"><a href="{{ $blogDetail->user->social_instagram }}" target="_blank"><i class="ti-instagram"></i></a></li> 
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!--related posts-->
                <div class="related-posts">
                    <h3 class="mb-30">More From {{ $blogDetail->category_name }}</h3>
                    <div class="loop-list">
                        @foreach($relatedPosts as $relatedPost)
                            @if ($relatedPost->status == 'published')
                                <article class="row mb-30 wow fadeIn animated">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative thumb-overlay mb-md-0 mb-3">
                                            <div class="img-hover-slide border-radius-5 position-relative">
                                                <img src="{{ asset('storage/blog/') }}/{{ $relatedPost->image }}"/>
                                                <a class="img-link" href="{{ route('blog.detail',[$relatedPost->category->slug, $relatedPost->slug, $relatedPost->id]) }}"></a>
                                                <span class="top-right-icon background8"><i class="mdi mdi-flash-on"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-center-vertical">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-15"><a href="{{ route('category',$relatedPost->category->slug) }}/">
                                                <span class="post-cat background2 color-white">In {{ $relatedPost->category_name }}</span></a>
                                            </div>
                                            <h4 class="post-title mb-15">
                                                <a href="{{ route('blog.detail',[$relatedPost->category->slug, $relatedPost->slug, $relatedPost->id]) }}/">{{ $relatedPost->title }}</a>
                                            </h4>
                                            <p class="font-medium excerpt">{{ $relatedPost->short_description }}</p>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                </div>
                <!--More posts-->
                <div class="single-more-articles">
                    <h6 class="widget-title mb-30 font-weight-bold text">You might be interested in</h6>
                    @foreach($interestedPosts as $interestedPost)
                        @if ($interestedPost->status == 'published')
                            <div class="post-block-list post-module-1 post-module-5">
                                <ul class="list-post">
                                    <li class="mb-15">
                                        <div class="d-flex">
                                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                                <a class="color-white" href="{{ route('blog.detail',[$interestedPost->category->slug, $interestedPost->slug, $interestedPost->id]) }}/">
                                                    <img src="{{ asset('storage/blog/'.$interestedPost->image) }}" alt="{{ $interestedPost->title }}">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-10 text-limit-2-row">
                                                    <a href="{{ route('blog.detail',[$interestedPost->category->slug, $interestedPost->slug, $interestedPost->id]) }}/">{{ $interestedPost->title }}</a>
                                                </h6>
                                                <div class="entry-meta meta-1 font-x-small color-grey">
                                                    <span class="post-on">{{ $interestedPost->created_at->format('d M, Y') }}</span>                                               
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
                <!--Comments-->
                <div id="comments" class="comments-area">
                    @if ($comments->count() > 0 && $comments->count() < 2)
                        <h3 class="mb-30">{{ $comments->count() }} Comment</h3>
                    @else
                        <h3 class="mb-30">{{ $comments->count() }} Comments</h3>
                    @endif
                    
                    @if ($comments->count() > 0)
                        @foreach ($comments as $comment)                          
                            <div class="comment-list wow fadeIn animated">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/backend/avatar.png') }}" alt="commentor's-image">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                {{ $comment->comment }}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        {{ $comment->name }}
                                                    </h5>
                                                    <p class="date">{{ $comment->created_at->diffForHumans() }}</p>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                                   
                        @endforeach
                    @else
                        <img src="{{ asset('assets/frontend/imgs/No comment.png') }}" alt="No Comment" style="width: 50%">
                    @endif
                </div>
                <!--comment form-->
                <div class="comment-form wow fadeIn animated">
                    <h3 class="mb-30">Leave a Reply</h3>
                    <strong><span class="text-success" id="success"></span></strong>
                    <form action="{{ route('comment.store',$blogDetail->slug) }}" method="POST" class="form-contact comment_form" id="commentForm">
                        @csrf                   
                        <div class="row">                           
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Name">
                                    <strong><span class="text-danger" id="name-error"></span></strong>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Email">
                                    <strong><span class="text-danger" id="email-error"></span></strong>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" id="comment" name="comment" cols="30" rows="9" placeholder="Write Your Comment"></textarea>
                                    <strong><span class="text-danger" id="comment-error"></span></strong>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn button button-contactForm">Post Comment</button>
                        </div>
                    </form>
                </div>
            </article>
        </div>
        <!--container-->
    </main>   
    
    @section('scripts')
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            $('#subscriber-form').on('submit', function(event){
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
                        $("#subscriber-form")[0].reset();
                        $("#subscriber-form").hide();
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