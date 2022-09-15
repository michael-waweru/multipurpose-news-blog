<base href="/">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Newsboard Multipurpose Site" name="Newsboard Multipurpose Site" />

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Dashboard | {{ config('app.name', 'Newsboard Multipurpose Site') }}</title>

<!-- App favicon -->
{{-- <link rel="icon" href="{{ asset('frontend/logo/logo transparent.png') }}"> --}}

<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<link rel="stylesheet" href="{{ asset('assets/backend/css/dashlite.css') }}">   
<link id="skin-default" rel="stylesheet" href="{{ asset('assets/backend/css/theme.css') }}"> 

<!-- Summernote Css -->
<link rel="stylesheet" href="{{ asset('assets/backend/css/editors/summernote.css') }}">

@toastr_css()