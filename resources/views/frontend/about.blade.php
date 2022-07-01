@extends('frontend.layouts.base')

@section('title')
    About Us
@endsection

@section('body')
    <main class="mt-30 mb-50">
        <div class="container single-content">
            <!--archive header-->
            <div class="archive-header text-center mb-50">
                <h2 class="font-weight-bold"><span class="font-family-normal">About Us</span></h2>
                <div class="breadcrumb font-small">
                    <a href="index.html">Home</a>
                    <span></span> About us
                </div>
            </div>
            <figure class="image mb-30 m-auto text-center border-radius-2">
                <a href="single.html"><img class="border-radius-5" src="{{ asset('assets/frontend/imgs/news/news-26.jpg') }}" alt=""></a>
            </figure>
            <div class="entry-wraper">
                
                <div class="excerpt">
                    <p>We've all been a part of that group project. You know, the project <a href="#">where one person</a> takes the lead, leading some members to conclude their ideas are unwelcome, while a select few ride the others' coattails.</p>
                    <p>And yet, something incredible happens when teamwork happens the way it's <a href="#">supposed to happen</a>. Things change when everyone on the team is equally invested in the overall purpose and goal. You find yourself working faster, finding mistakes more easily, and innovating better.</p>
                </div>
                <div class="entry-main-content">
                    <hr class="wp-block-separator is-style-wide">
                    <h3>What we do</h3>
                    <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending and much yikes off far quetzal goodness and from for grimaced goodness unaccountably and meadowlark near unblushingly crucial scallop tightly neurotic hungrily some and dear furiously this apart.</p>
                    <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much hello on spoon-fed that alas rethought much decently richly and wow against the frequent fluidly at formidable acceptably flapped besides and much circa far over the bucolically hey precarious goldfinch mastodon goodness gnashed a jellyfish and one however because.</p>
                    <hr class="wp-block-separator is-style-wide"> 
                    <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello far meadowlark imitatively egregiously hugged that yikes minimally unanimous pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>
                    <hr class="wp-block-separator is-style-dots">
                    <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously and and less rattlesnake contrary caustic wow this near alas and next and pled the yikes articulate about as less cackled dalmatian in much less well jeering for the thanks blindly sentimental whimpered less across objectively fanciful grimaced wildly some wow and rose jeepers outgrew lugubrious luridly irrationally attractively dachshund.</p>
                    <hr class="wp-block-separator is-style-wide">
                    <h3>Why choose Us</h3>
                    <div class="wp-block-image">
                        <figure class="alignleft is-resized">
                            <img class="border-radius-5" src="{{ asset('assets/frontend/imgs/news/thumb-13.jpg') }}">
                            <figcaption> And far contrary smoked some contrary among stealthy </figcaption>
                        </figure>
                    </div>
                    <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly scratched far while thus cackled sheepishly rigid after due one assenting regarding censorious while occasional or this more crane went more as this less much amid overhung anathematic because much held one exuberantly sheep goodness so where rat wry well concomitantly.</p>
                    <h5>What's next?</h5>
                    <p>Pouted flirtatiously as beaver beheld above forward energetic across this jeepers beneficently cockily less a the raucously that magic upheld far so the this where crud then below after jeez enchanting drunkenly more much wow callously irrespective limpet.</p>
                    <hr class="wp-block-separator is-style-dots">
                    <p>Other yet this hazardous oh the until brave close towards stupidly euphemistically firefly boa some more underneath circa yet on as wow above ripe or blubbered one cobra bore ouch and this held ably one hence</p>
                    <hr class="wp-block-separator is-style-wide">
                    <h3>Our Mission</h3>
                    <p>Alexe more gulped much garrulous a yikes earthworm wiped because goodness bet mongoose that along accommodatingly tortoise indecisively admirable but shark dear some and unwillingly before far vindictive less much this on more less flexed far woolly from following glanced resolute unlike far this alongside against icily beyond flabby accidental.</p>
                    <p class="text-center">
                        <a href="#"><img class="d-inline" src="{{ asset('assets/frontend/imgs/ads/ads-2.jpg') }}" alt=""></a>
                    </p>
                    <hr class="wp-block-separator is-style-wide">
                    <h3 class="mb-30">Get in touch</h3>

                    <div id="message-display">
                        <strong><span class="text-success" id="success-message"></span></strong>
                    </div>

                    <form class="form-contact comment_form mt-3" id="contact-form">                           
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">                                  
                                    <span class="text-danger" id="name-error"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="text" placeholder="Email">                                  
                                    <span class="text-danger" id="email-error"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="phone" id="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Message"></textarea>                                    
                                    <span class="text-danger" id="message-error"></span>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm" id="save-btn">Send message</button>
                        </div>
                    </form>
                    <hr class="wp-block-separator is-style-wide">
                </div>
                <div class="divider-1 mb-30"></div>                
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
        
            $('#contact-form').on('submit', function(event){
                event.preventDefault();           
                $('#name-error').text('');
                $('#email-error').text('');
                $('#message-error').text('');
            
                name = $('#name').val();
                email = $('#email').val();
                phone = $('#phone').val();
                message = $('#message').val();
        
                $.ajax({
                url: "/message-store",
                type: "POST",
                data:{                 
                    name:name,                  
                    email:email,                  
                    phone:phone,                  
                    message:message,                  
                },
                success:function(response){
                    console.log(response);
                    if (response) {
                        $('#success-message').text(response.success);
                        $("#contact-form")[0].reset();
                        // $("#contact-form").hide();
                    }
                },
                error: function(response) {
                    $('#name-error').text(response.responseJSON.errors.name);
                    $('#email-error').text(response.responseJSON.errors.email);
                    $('#message-error').text(response.responseJSON.errors.message);
                    }
                });
            });
        </script> 

        <script> 
            window.setTimeout(function() {
                $("#message-display").fadeTo(1000, 0).slideUp(1000, function(){
                    $(this).remove(); 
                });
            }, 10000);
        </script>
    @endsection
@endsection