
@jquery
@toastr_js
@toastr_render

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="{{ asset('assets/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.ticker.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor/printThis.js') }}"></script>

<script src="{{ asset('assets/frontend/js/main.js') }}"></script>

<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '{1155161301719443}',
        cookie     : true,
        xfbml      : true,
        version    : '{v1.3}'
      });
        
      FB.AppEvents.logPageView();   
        
    };
  
    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>