{{--     
    <meta charset="utf-8" />   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Protection -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    <title>Administrative Dashboard</title>
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/imgs/theme/favicon.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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

   <!-- Summernote Css --> 
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    @toastr_css() --}}


    <base href="/">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Newsboard Multipurpose Site" name="Newsboard Multipurpose Site" />
    <meta content="Newsboard Multipurpose Site" name="Newsboard Multipurpose Site" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard | {{ config('app.name', 'Newsboard Multipurpose Site') }}</title>

    <!-- App favicon -->
    {{-- <link rel="icon" href="{{ asset('frontend/logo/logo transparent.png') }}"> --}}

    <link rel="stylesheet" href="{{ asset('assets/backend/css/dashlite.css') }}">    

    <!-- Summernote Css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/editors/summernote.css') }}">

    @toastr_css()
