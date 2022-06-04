<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

<head>
    @include('backend.partials.head')
</head>

<body>
    <div id="layout-wrapper">
        @include('backend.partials.top-nav')

        @include('backend.partials.aside')

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @yield('body')
                    
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            © <script>document.write(new Date().getFullYear())</script> - {{ env('APP_NAME') }}.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                {{ env('APP_URL') }}
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
   
    @include('backend.partials.scripts')

    @yield('scripts')

</body>