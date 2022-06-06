    
    <meta charset="utf-8" />   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Protection -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    
    <title>Administrative Dashboard</title>
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/imgs/theme/favicon.png') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/backend/js/layout.js') }}"></script>

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
   
    <!-- Icons Css -->
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert css-->
    <link href="{{ asset('assets/backend/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ asset('assets/backend/libs/dropzone/dropzone.css') }}" type="text/css" />

    <!-- App Css-->
    <link href="{{ asset('assets/backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- custom Css-->
    <link href="{{ asset('assets/backend/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    @toastr_css()