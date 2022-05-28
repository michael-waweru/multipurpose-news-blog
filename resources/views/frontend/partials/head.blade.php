
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>{{ config('app.name', 'Newsboard Multipurpose Site') }} | @yield('title')</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/imgs/theme/favicon.png') }}">
<!-- Frontend CSS  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/widgets.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">

@toastr_css