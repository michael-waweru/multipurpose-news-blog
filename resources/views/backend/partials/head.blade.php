    
    <meta charset="utf-8" />   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Protection -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    <title>Administrative Dashboard</title>
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/imgs/theme/favicon.png') }}">

   <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('assets/backend/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/backend/plugins/global/plugins.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/style.dark.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    @toastr_css()