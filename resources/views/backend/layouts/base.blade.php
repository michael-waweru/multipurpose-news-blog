<!doctype html>
<html lang="zxx" class="js">

    <head>
        @include('backend.partials.head')
    </head>

    <body class="nk-body npc-crypto">
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
