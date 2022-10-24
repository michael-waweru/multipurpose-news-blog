<!DOCTYPE html>
<html lang="en-us" class="no-js">    
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Newsboard Multipurpose Site') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('assets/backend/404/404doz/css/style-vintage.css') }}" />
        <script src="{{ asset('backend/404/404doz/js/modernizr.js') }}"></script>
    </head>
    <body>
        <div id="container">
            <div class="overlay"></div>
            <div class="item-title">
                <div id="message"></div>
                <div class="link-bottom">
                    <a class="link-icon" href="/"><i class="icon ion-ios-home"></i> Home</a> 
                    <a class="link-icon" href="mailto:info@michaelwaweru.co.ke"><i class="icon ion-ios-compose"></i> Write us</a>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/backend/404/code.jquery.com/jquery-1.12.3.min.js') }}"></script>
        <script src="{{ asset('assets/backend/404/cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/backend/404/maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/vegas.js') }}"></script>
        <script>
            $("body").vegas({ slides: [{ src: "https://cdn.themehelite.com/themeforest/404doz/img/background-vintage.jpg" }] });
        </script>
        <script src="{{ asset('assets/backend/404/404doz/js/main-vintage.js') }}"></script>
    </body>   
</html>
