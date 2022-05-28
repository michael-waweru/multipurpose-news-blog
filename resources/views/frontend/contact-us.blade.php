@extends('frontend.layouts.base')

@section('title')
    Contact Us
@endsection

@section('body')
    <main class="mt-30 mb-50">
        <div class="container single-content">
            <!--archive header-->
            <div class="archive-header text-center mb-50">
                <h2 class="font-weight-bold"><span class="font-family-normal">Contact Us</span></h2>
                <div class="breadcrumb font-small">
                    <a href="{{ route('homepage') }}">Home</a>
                    <span></span> Get in touch
                </div>
            </div>

            <div class="entry-wraper">
                @if (Session::has('errors'))
                    <div class="alert alert-danger d-flex align-items-center" role="alert" id="error-alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <div>
                            <span class="text-danger text-center"><strong>There was a problem with your submission. Please try again.</strong></span>
                        </div>
                    </div>                                   
                @endif
            </div>

            <div class="entry-wraper">
                <div class="mb-30">
                    <p>We are <strong>AliThemes</strong> , a creative and dedicated group of individuals who love web development almost as much as we love our customers. We are passionate team with the mission for achieving the perfection in web design. All designs are made by love with pixel perfect design and excellent coding quality. Speed, security and SEO friendly alway in our mind.</p>
                    <hr class="wp-block-separator is-style-dots">
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h3 class="mb-30">Contact</h3>
                        <p>
                            <strong>Address:</strong> Lorem 142 Str., 2352, Ipsum, State, USA <br>
                            <strong>Phone:</strong> +01-234 56789
                        </p>
                        <p>If you would like to partner with Ultra at our next event, contact us at <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="12717d7c66737166527c776561707d7360763c717d7f3c">[email&#160;protected]</a></p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h3 class="mb-30">Advertise</h3>
                        <p>Please contact us directly at <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88e9ecfbc8e6edfffbeae7e9faeca6ebe7e5a6">[email&#160;protected]</a> </p>
                        <p>For large or unique campaigns please email <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8dfeece1e8cde3e8fafeefe2ecffe9a3eee2e0">[email&#160;protected]</a> for requests-for-proposal and additional pricing information. </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h3 class="mb-30">Event</h3>
                        <p>We are a professional event management team, starting in 2012.</p>
                        <p>Please send request details to email <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="472231222933072922303425282635236924282a">[email&#160;protected]</a></p>
                    </div>
                </div>
                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="mb-30">Get in touch</h1>                        

                        <form class="form-contact comment_form" id="commentForm" action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" placeholder="Name">
                                        @error('name') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="Email">
                                        @error('email') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="phone" type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100 @error('message') is-invalid @enderror" name="message" id="message" cols="30" rows="9" placeholder="Message"></textarea>
                                        @error('message') <span class="text-danger"><strong>{{ $message }}</strong></span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm" id="save-btn">Send message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-12"><img src="{{ asset('assets/frontend/imgs/marginalia-productive-work.png') }}" alt=""></div>
                </div>
                <div class="single-social-share clearfix ">
                    <p class="text-uppercase">Share this post </p>
                    <ul class="d-inline-block list-inline">
                        <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center color-white" target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center color-white" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center color-white" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center color-white" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <p class="text-center mt-50">
                    <span class="mb-15 text-muted">Advertise Here</span><br>
                    <a href="#"><img class="d-inline border-radius-2" src="{{ asset('assets/frontend/imgs/banners/banner-2.jpg') }}" alt=""></a>
                </p>
            </div>
        </div>
    </main>  
@endsection

@section('scripts')
    <script>
        // $("#error-alert").fadeTo(2000, 500).slideUp(500, function(){
        //     $("#error-alert").slideUp(500);
        // });

        window.setTimeout(function() {
            $("#error-alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 5000);
    </script>
@endsection