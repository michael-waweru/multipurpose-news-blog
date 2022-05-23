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

    </body>

</html>