<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        @include('frontend.partials.head')
    </head>

    <body>
        <div class="scroll-progress bg-dark"></div>

        <!-- Start Preloader -->
        <div class="preloader-2">
            <div class="preloader-2-inner d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative wow animated fadeIn">
                    <div class="text-center">
                        <h1 class="font-weight-bold">Holp Up...</h1>
                        <p class="text-uppercase">We're Loading...</p>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.partials.header')

        @yield('body')

        @include('frontend.partials.footer')

        @include('frontend.partials.scripts')

        @yield('scripts')

        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('#submit').click(function(e){
                    e.preventDefault();
                    jQuery.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    jQuery.ajax({
                        url: "{{ url('/ajax') }}",
                        method: 'post',
                        data: {
                            email: jQuery('#email').val(),                    
                        },
                        success: function(data){
                                jQuery.each(data.errors, function(key, value){
                                    jQuery('.alert-danger').show();
                                    jQuery('.alert-danger').append('<p>'+value+'</p>');
                                });
                        }                    
                    });
                });
            });
        </script>

    </body>

</html>