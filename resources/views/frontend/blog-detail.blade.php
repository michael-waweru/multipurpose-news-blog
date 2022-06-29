@extends('frontend.layouts.base')

@section('title')
    
@endsection

@section('body')
    <main class="mt-30">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-30 mt-50">
                <h1 class="entry-title mb-30 font-weight-500">
                    The effect of livestock on the physiological condition of roe deer is modulated by habitat quality
                </h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <a class="author-avatar" href="#"><img class="img-circle" src="{{ asset('assets/frontend/imgs/authors/author-3.jpg') }}" alt=""></a>
                                By <a href="author.html"><span class="author-name font-weight-bold">{{ $blogDetail->author_name }}</span></a>
                            </p>
                            <span class="mr-10">{{ $blogDetail->created_at->format('F, m Y') }}</span>
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
                <img src="{{ asset('storage/blog') }}/{{ $blogDetail->image }}" alt="post-title">
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="excerpt mb-30">
                    <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                </div>
                <div class="entry-left-col">
                    <div class="social-sticky">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-heart"></i></a>
                        <a href="#"><i class="ti-email"></i></a>
                    </div>
                </div>
                <div class="entry-main-content dropcap wow fadeIn animated">
                    <p>Gosh jaguar ostrich quail one excited dear hello and <a href="#">bound</a><sup><a href="#">[1]</a></sup> and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                    <hr class="wp-block-separator is-style-dots">
                    <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness <a href="#">nightingale</a> the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                    <figure class="wp-block-gallery columns-3 wp-block-image">
                        <ul class="blocks-gallery-grid">
                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="{{ asset('assets/frontend/imgs/news/thumb-10.jpg') }}" alt=""></a></li>
                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="{{ asset('assets/frontend/imgs/news/thumb-11.jpg') }}" alt=""></a></li>
                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="{{ asset('assets/frontend/imgs/news/thumb-12.jpg') }}" alt=""></a></li>
                        </ul>
                        <figcaption> <i class="ti-credit-card mr-5"></i>Image credit: Behance </figcaption>
                    </figure>
                    <hr class="section-divider">
                    <p>Yet more some certainly yet alas abandonedly whispered <a href="#">intriguingly</a><sup><a href="#">[2]</a></sup> well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less <a href="#">however</a> hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                    <h2>The Guitar Legends</h2>
                    <p>Furrowed this in the upset <a href="#">some across</a><sup><a href="#">[3]</a></sup> tiger oh loaded house gosh whispered <a href="#">faltering alas</a><sup><a href="#">[4]</a></sup> ouch cuckoo coward in scratched undid together bit fumblingly so besides salamander heron during the jeepers hello fitting jauntily much smoothly globefish darn blessedly far so along bluebird leopard and.</p>
                    <blockquote>
                        <p>Integer eu faucibus <a href="#">dolor</a><sup><a href="#">[5]</a></sup>. Ut venenatis tincidunt diam elementum imperdiet. Etiam accumsan semper nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.</p>
                    </blockquote>
                    <p>Fretful human far recklessly while caterpillar well a well blubbered added one a some far whispered rampantly whispered while irksome far clung irrespective wailed more rosily and where saluted while black dear so yikes as considering recast to some crass until cow much less and rakishly overdrew consistent for by responsible oh one hypocritical less bastard hey oversaw zebra browbeat a well.</p>
                    <h3>Getting Crypto Rich</h3>
                    <hr class="wp-block-separator is-style-wide">
                    <div class="wp-block-image">
                        <figure class="alignleft is-resized">
                            <img class="border-radius-5" src="{{ asset('assets/frontend/imgs/news/thumb-13.jpg') }}">
                            <figcaption> And far contrary smoked some contrary among stealthy </figcaption>
                        </figure>
                    </div>
                    <p>And far contrary smoked some contrary among stealthy engagingly suspiciously a cockatoo far circa sank dully lewd slick cracked llama the much gecko yikes more squirrel sniffed this and the the much within uninhibited this abominable a blubbered overdid foresaw through alas the pessimistic.</p>
                    <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                    <hr class="section-divider">
                    <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness nightingale the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                    <!--Begin Subcrible-->
                    <div class="border-radius-5 mb-50 border p-30 wow fadeIn animated">
                        <div class="row justify-content-between">
                            <div class="col-md-5 mb-2 mb-md-0">
                                <h5 class="font-weight-bold secondfont mb-30 mt-0">Become a member</h5>
                                <p class="font-small">Get the latest news right in your inbox. We never spam!</p>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="btn btn-info btn-block">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Subcrible-->
                    <p>Yet more some certainly yet alas abandonedly whispered intriguingly well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less however hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                </div>
                <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                    <div class="tags">
                        <a href="category.html" rel="tag">deer</a>
                        <a href="category.html" rel="tag">nature</a>
                        <a href="category.html" rel="tag">conserve</a>
                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn animated">
                    <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                        <span class="hit-count mr-15"><i class="ti-comment mr-5"></i>182 comments</span>
                        <span class="hit-count mr-15"><i class="ti-heart mr-5"></i>268 likes</span>
                        <span class="hit-count"><i class="ti-star mr-5"></i>Rate: 9/10</span>
                    </div>
                    <ul class="d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center " target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                <!--author box-->
                <div class="author-bio wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="{{ asset('assets/frontend/imgs/authors/author-3.jpg') }}" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h3><span class="vcard author"><span class="fn"><a href="author.html" title="Posted by Barbara Cartland" rel="author">Barbara Cartland</a></span></span>
                        </h3>
                        <h5>About author</h5>
                        <div class="author-description">You should write because you love the shape of stories and sentences and the creation of different words on a page. </div>
                        <a href="author.html" class="author-bio-link mb-md-0 mb-3">View all posts</a>
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--related posts-->
                <div class="related-posts">
                    <h3 class="mb-30">Related posts</h3>
                    <div class="loop-list">
                        <article class="row mb-30 wow fadeIn animated">
                            <div class="col-md-4">
                                <div class="post-thumb position-relative thumb-overlay mb-md-0 mb-3">
                                    <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-11.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <span class="top-right-icon background8"><i class="mdi mdi-flash-on"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 align-center-vertical">
                                <div class="post-content">
                                    <div class="entry-meta meta-0 font-small mb-15"><a href="category.html"><span class="post-cat background2 color-white"># Fashion</span></a></div>
                                    <h4 class="post-title mb-15">
                                        <a href="single.html">The World Caters to Average People and Mediocre Lifestyles</a>
                                    </h4>
                                    <p class="font-medium excerpt">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                </div>
                            </div>
                        </article>
                        <article class="row mb-30 wow fadeIn animated">
                            <div class="col-md-4">
                                <div class="post-thumb position-relative thumb-overlay mb-md-0 mb-3">
                                    <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-12.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <span class="top-right-icon background5"><i class="mdi mdi-favorite"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 align-center-vertical">
                                <div class="post-content">
                                    <div class="entry-meta meta-0 font-small mb-15"><a href="category.html"><span class="post-cat background3 color-white"># Technology</span></a></div>
                                    <h4 class="post-title mb-15">
                                        <a href="single.html">Why Teamwork Really Makes The Dream Work</a>
                                    </h4>
                                    <p class="font-medium excerpt">We live in a world where disruption and dynamism reign supreme and businesses must be ready to adapt to the many unpredictable changes that come with this.</p>
                                </div>
                            </div>
                        </article>
                        <article class="row mb-30 wow fadeIn animated">
                            <div class="col-md-4">
                                <div class="post-thumb position-relative thumb-overlay mb-md-0 mb-3">
                                    <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url(assets/imgs/news/news-13.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <span class="top-right-icon background2"><i class="mdi mdi-audiotrack"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 align-center-vertical">
                                <div class="post-content">
                                    <div class="entry-meta meta-0 font-small mb-15"><a href="category.html"><span class="post-cat background1 color-white"># Sport</span></a></div>
                                    <h4 class="post-title mb-15">
                                        <a href="single.html">9 Things I Love About Shaving My Head During Quarantine</a>
                                    </h4>
                                    <p class="font-medium excerpt">At the Emmys, broadcast scripted shows created by people of color gained ground relative to those pitched by White show creators, while broadcast scripted shows.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <!--More posts-->
                <div class="single-more-articles">
                    <h6 class="widget-title mb-30 font-weight-bold text">You might be interested in</h6>
                    <div class="post-block-list post-module-1 post-module-5">
                        <ul class="list-post">
                            <li class="mb-15">
                                <div class="d-flex">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                        <a class="color-white" href="single.html">
                                            <img src="{{ asset('assets/frontend/imgs/news/thumb-1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">America’s Governors Get Tested for a Virus That Is Testing Them</a></h6>
                                        <div class="entry-meta meta-1 font-x-small color-grey">
                                            <span class="post-on">25 Jun</span>
                                            <span class="hit-count has-dot">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale">
                                        <a class="color-white" href="single.html">
                                            <img src="{{ asset('assets/frontend/imgs/news/thumb-2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row"><a href="single.html">Bartering Child’s Dress for Food: Life in Lebanon’s Economic Crisis</a></h6>
                                        <div class="entry-meta meta-1 font-x-small color-grey mt-10">
                                            <span class="post-on">25 April</span>
                                            <span class="hit-count has-dot">37k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Comments-->
                <div class="comments-area">
                    <h3 class="mb-30">03 Comments</h3>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="{{ asset('assets/frontend/imgs/authors/author-1.jpg') }}" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Robert Edition</a>
                                            </h5>
                                            <p class="date">6 minutes ago </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="{{ asset('assets/frontend/imgs/authors/author-2.jpg') }}" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Agatha Christie</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="{{ asset('assets/frontend/imgs/authors/author-4.jpg') }}" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Danielle Steel</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--comment form-->
                <div class="comment-form wow fadeIn animated">
                    <h3 class="mb-30">Leave a Reply</h3>
                    <form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
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
@endsection