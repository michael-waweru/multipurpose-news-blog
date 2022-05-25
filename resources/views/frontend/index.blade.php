@extends('frontend.layouts.base')

@section('title')
    Home
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
                            <article class="first-post slide-fade-item mb-md-4 mb-lg-0">
                                <figure class="mb-30">
                                    <a href="single.html">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-12.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="post-content">
                                    <h3 class="mb-20 position-relative font-weight-bold">
                                        <a href="single.html">This magical drug mansion in Upstate New York is where the psychedelic ’60s took off</a>
                                    </h3>
                                    <p class="excerpt">
                                        William Mellon Hitchcock was not your typical acid head. Billy, as he was called, was a tall, charming blonde stockbroker in his twenties who worked at Lehman Brothers, for one. He was heir to one of the largest fortunes in the country, for another.
                                    </p>
                                    <div class="entry-meta meta-0 mb-15 font-small">
                                        <a href="category.html"><span class="post-cat position-relative"># America’s</span></a>
                                        <a href="category.html"><span class="post-cat position-relative"># New York</span></a>
                                    </div>
                                </div>
                            </article>
                            <article class="first-post slide-fade-item mb-md-4 mb-lg-0">
                                <figure class="mb-30">
                                    <a href="single.html">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-19.jpg') }}" alt="">
                                    </a>
                                    <span class="post-format position-top-right text-uppercase font-small">
                                        <i class="ti-stats-up"></i>
                                    </span>
                                </figure>
                                <div class="post-content">
                                    <h3 class="mb-20 position-relative font-weight-bold">
                                        <a href="single.html">What I Learned From a Year of Reading Only Books by Women</a>
                                    </h3>
                                    <p class="excerpt">
                                        Alice Fishburn set herself a challenge for 2018 to only read female authors. Here’s what she discovered. It started, as so many of the best things do, with my attempt to one-up a sibling. At the end of last year, my brother explained to me that when it
                                    </p>
                                    <div class="entry-meta meta-0 mb-15 font-small">
                                        <a href="category.html"><span class="post-cat position-relative"># America’s</span></a>
                                        <a href="category.html"><span class="post-cat position-relative"># New York</span></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row vertical-divider">
                            <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="single.html">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-2.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="single.html">There’s a 49 Percent Chance the World As We Know It Will End by 2050</a>
                                </h6>
                                <p class="excerpt">
                                    Jared Diamond’s new book, Upheaval, addresses itself to a world very obviously in crisis.
                                </p>
                                <div class="entry-meta meta-2 font-x-small color-muted">
                                    <p class="mb-5">
                                        By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                    </p>
                                    <span class="mr-10"> 15 April 2020</span>
                                    <span class="has-dot"> 8 mins read</span>
                                </div>
                            </article>
                            <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="single.html">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-3.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="single.html">Why The New York City subway signage is considered iconic? The true story</a>
                                </h6>
                                <p class="excerpt">
                                    <span class="live-now text-danger">Live</span>Black and white signs with Helvetica showing just the information subway riders
                                </p>
                                <div class="entry-meta meta-2 font-x-small color-muted">
                                    <p class="mb-5">
                                        By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                    </p>
                                    <span class="mr-10"> 15 April 2020</span>
                                    <span class="has-dot"> 8 mins read</span>
                                </div>
                            </article>
                            <div class="col-12">
                                <div class="horizontal-divider mb-15 mt-15"></div>
                            </div>
                        </div>
                        <div class="row vertical-divider">
                            <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="single.html">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-4.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="single.html">This Freedom Rider was shot at, attacked, and put on death row—all by 20 years old</a>
                                </h6>
                                <p class="excerpt">
                                    As Trumpauer left Jackson behind, she didn’t know if her life was about to get better or worse
                                </p>
                                <div class="entry-meta meta-2 font-x-small color-muted">
                                    <p class="mb-5">
                                        By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                    </p>
                                    <span class="mr-10"> 15 April 2020</span>
                                    <span class="has-dot"> 8 mins read</span>
                                </div>
                            </article>
                            <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="single.html">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-5.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="single.html">This athlete conquered poverty, racism, and polio in order to became an Olympian</a>
                                </h6>
                                <p class="excerpt">
                                    Six-year-old Wilma Rudolph was different from the other kids.
                                </p>
                                <div class="entry-meta meta-2 font-x-small color-muted">
                                    <p class="mb-5">
                                        By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                    </p>
                                    <span class="mr-10"> 15 April 2020</span>
                                    <span class="has-dot"> 8 mins read</span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <section class="hightlight-today mb-30">
                <h6 class="font-weight-bold widget-header widget-header-style-5 mb-10">
                    <span class="d-inline-block block mb-10 widget-title font-family-normal">Today Highlight</span>
                </h6>
                <div class="loop-grid-5 row vertical-divider">
                    <article class="col-1-5 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-6.jpg') }}" alt="">
                            </a>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">Poland’s Presidential Election Was Close but Voters Remain Far Apart</a></h6>
                    </article>
                    <article class="col-1-5 col-md-6 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-15.jpg') }}" alt="">
                            </a>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">After Months of Debate, England Requires Face Masks for Shoppers</a></h6>
                    </article>
                    <article class="col-1-5 col-md-6 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-14.jpg') }}" alt="">
                            </a>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">A Racial Awakening in France, Where Race Is a Taboo Topic</a></h6>
                    </article>
                    <article class="col-1-5 col-md-6 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-3.jpg') }}" alt="">
                            </a>
                            <span class="post-format position-top-right text-uppercase font-small">
                                <i class="ti-image"></i>
                            </span>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">Strains Show in Russia’s Make-Believe Politics</a></h6>
                    </article>
                    <article class="col-1-5 col-md-6 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-2.jpg') }}" alt="">
                            </a>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">Ireland Has a New Coronavirus Fear: Americans Who Flout Quarantine</a></h6>
                    </article>
                    <div class="col-12">
                        <div class="horizontal-divider mb-15 mt-15"></div>
                    </div>
                </div>
                <div class="loop-grid-5 row vertical-divider">
                    <article class="col-1-5 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-7.jpg') }}" alt="">
                            </a>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">World Population Could Peak Decades Ahead of U.N. Forecast, Study Asserts</a></h6>
                    </article>
                    <article class="col-1-5 col-md-6 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-8.jpg') }}" alt="">
                            </a>
                            <span class="post-format position-top-right text-uppercase font-small">
                                <i class="ti-headphone"></i>
                            </span>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">Egyptian Dissident Battles Extradition in Spanish Court</a></h6>
                    </article>
                    <article class="col-1-5 col-md-6 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-9.jpg') }}" alt="">
                            </a>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">He Changed His Country’s Name. Will North Macedonia Punish Him?</a></h6>
                    </article>
                    <article class="col-1-5 col-md-6 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-10.jpg') }}" alt="">
                            </a>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">‘I Felt Defenseless’: Seoul Mayor’s Secretary Speaks Out About Alleged Abuse</a></h6>
                    </article>
                    <article class="col-1-5 col-md-6 col-sm-12 wow fadeIn animated">
                        <figure class="mb-15">
                            <a href="single.html">
                                <img src="{{ asset('assets/frontend/imgs/news/news-11.jpg') }}" alt="">
                            </a>
                        </figure>
                        <h6 class="font-weight-500 mb-20"><a href="single.html">Bahrain to Execute 2 Shiite Protesters After Years of Desperate Appeals</a></h6>
                    </article>
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
                            <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <a href="single.html">
                                        <img src="{{ asset('assets/frontend/imgs/news/news-21.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="single.html">Unlucky Charms: The Rise and Fall of Billion-Dollar Jewelry Empire Alex and Ani</a>
                                </h6>
                                <p class="excerpt">
                                    The headwrap has undergone several iterations throughout American history. As a descendant of the cloths that adorned the heads of women in ancient Egypt and sub-Saharan Africa
                                </p>
                                <div class="entry-meta meta-0 mb-15 font-small">
                                    <a href="category.html"><span class="post-cat position-relative"># Woman</span></a>
                                    <a href="category.html"><span class="post-cat position-relative"># America</span></a>
                                </div>
                            </article>
                            <article class="col-md-6 wow fadeIn animated">
                                <figure class="mb-15">
                                    <video autoplay="" class="photo-item__video" loop="" muted="" preload="none">
                                        <source src="https://player.vimeo.com/external/420790802.sd.mp4?s=0ce6b08ddc38dd61b8d399921e45a4928fe19637&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
                                    </video>
                                </figure>
                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="single.html">Coronavirus May Be a Blood Vessel Disease, Which Explains Everything</a>
                                </h6>
                                <p class="excerpt">
                                    April, blood clots emerged as one of the many mysterious symptoms attributed to Covid-19, a disease that had initially been thought to largely affect the lungs in the form of pneumonia.
                                </p>
                                <div class="entry-meta meta-0 mb-15 font-small">
                                    <a href="category.html"><span class="post-cat position-relative"># Covid19</span></a>
                                    <a href="category.html"><span class="post-cat position-relative"># Health</span></a>
                                    <a href="category.html"><span class="post-cat position-relative"># WHO</span></a>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 d-none d-lg-block">
                        <article class="row wow fadeIn animated">
                            <div class="col-md-6">
                                <div class="entry-meta meta-0 mb-15 font-small">
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
                                <div class="entry-meta meta-0 mb-15 font-small">
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
                            <article class="row wow fadeIn animated">
                                <div class="col-md-6 mb-md-0 mb-sm-3">
                                    <figure class="mb-0">
                                        <a href="single.html">
                                            <img src="{{ asset('assets/frontend/imgs/news/news-15.jpg') }}" alt="">
                                        </a>
                                        <span class="post-format position-top-right text-uppercase font-small">
                                            <i class="ti-stats-up"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <div class="post-content text-center plr-5-percent">
                                        <div class="entry-meta meta-0 mb-15 font-small">
                                            <a href="category.html"><span class="post-cat position-relative"># World</span></a>
                                            <a href="category.html"><span class="post-cat position-relative"># Education</span></a>
                                        </div>
                                        <h2 class="post-title mb-30 position-relative divider-wave">
                                            <a href="single.html">How to Reopen Schools: What Science and Other Countries Teach Us</a>
                                        </h2>
                                        <p class="excerpt">
                                            The pressure to bring American students back to classrooms is intense, but the calculus is tricky with infections still out of control in many communities.
                                        </p>
                                        <p><span class="live-now text-danger">Live now</span></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-15 mb-15"></div>
                                </div>
                            </article>
                            <div class="row vertical-divider">
                                <div class="col-md-8">
                                    <article class="row wow fadeIn animated">
                                        <div class="col-md-4">
                                            <figure class="mb-md-0 mb-sm-3">
                                                <img src="{{ asset('assets/frontend/imgs/news/thumb-2.jpg') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <div class="entry-meta meta-0 mb-15 font-small">
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
                                            <div class="entry-meta meta-0 mb-15 font-small">
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
                                            <div class="entry-meta meta-0 mb-15 font-small">
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
                                            <div class="entry-meta meta-0 mb-15 font-small">
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
                            <div class="sidebar-widget widget_newsletter wow fadeIn animated">
                                <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                                    <span>Newsletter</span>
                                </h6>
                                <div class="newsletter">
                                    <p class="">Continue reading uninterrupted with a subscription</p>
                                    <form id="newsletter-subscriber" class="subscribe_form relative mail_part">
                                        @csrf
                                        <div class="form-newsletter-cover">
                                            <div class="form-newsletter">
                                                <input type="email" name="email[]" id="email" placeholder="Email address">
                                                <button type="submit" id="submit">Submit
                                                    {{-- <span class="long-arrow long-arrow-right"></span> --}}
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
@endsection

@section('scripts')
    <script>
        // if ($("#newsletter-subscriber").length > 0) {
        //         $("#newsletter-subscriber").validate({
        //         rules: {                    
        //             email: {
        //                 required: true,
        //                 maxlength: 50,
        //                 email: true,
        //             },
        //         },

        //         messages: {                
        //             email: {
        //                 required: "This attribute is required",
        //                 email: "Please enter valid email",
        //                 maxlength: "The email name should less than or equal to 50 characters",
        //             },               
        //         },

        //         submitHandler: function(form) {
        //             $.ajaxSetup({
        //                 headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                 }
        //             });

        //             $('#submit').html('Please Wait...');
        //             $("#submit"). attr("disabled", true);
        //             $.ajax({
        //                 url: "{{url('/newsletter/store')}}",
        //                 type: "POST",
        //                 data: $('#newsletter-subscriber').serialize(),
        //                 success: function( response ) {
        //                     $('#submit').html('Submit');
        //                     $("#submit"). attr("disabled", false);
        //                     alert('You have successfully been subscribed.');
        //                     document.getElementById("newsletter-subscriber").reset(); 
        //                 }
        //             });
        //         }
        //     })
        // }
        
        $("#newsletter-subscriber").on('submit', function(e){
            e.preventDefault();           
            $ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                url: '/newsletter-store',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                beforeSend:function() {
                    $("#submit").attr('disabled','disabled');
                },
                success:function (data) {
                    console.log(data);
                    alert('You have successfully been subscribed.');
                },
                error:function (error) {
                    console.log(error);
                    alert('There was an issue submitting your request');
                }
            })
        })
    </script>
@endsection
