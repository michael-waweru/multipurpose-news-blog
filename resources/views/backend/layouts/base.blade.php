{{-- <!doctype html>
<html lang="en">

    <head>
        @include('backend.partials.head')
    </head>

    <body id="kt_body" class="dark-mode header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">         

                @include('backend.partials.aside')

                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                    @include('backend.partials.top-nav')

                    @yield('body')

                    <!--begin::Footer-->
                    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-bold me-1">© <script>document.write(new Date().getFullYear());</script>
                                    All Rights Reserved.
                                </span>                                
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                                <li class="menu-item">
                                    <a href="{{ route('homepage') }}" target="_blank" class="text-gray-800 text-hover-primary">{{ env('APP_NAME') }}</a>
                                </li>                                
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
            </div>
        </div>

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->

        @include('backend.partials.scripts')

        @yield('scripts')

    </body>

</html> --}}

<!doctype html>
<html lang="zxx" class="js">

    <head>
        @include('backend.partials.head')
    </head>

    <body class="{{ $theme . '-theme' }}">
        <div class="nk-app-root">           

            <div class="nk-main">
                <!-- wrap @s -->
                <div class="nk-wrap">

                    @include('backend.partials.top-nav')

                    @include('backend.partials.aside')

                    <!-- content @s -->
                    <div class="nk-content">
                        <div class="container-fluid">
                            <div class="nk-content-inner">
                                <div class="nk-content-body">
                                    @yield('body')
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content @e -->

                    @include('backend.partials.footer')

                    @yield('scripts')
                </div>
            </div>
        </div>

        @include('backend.partials.scripts')
    </body>
</html>
