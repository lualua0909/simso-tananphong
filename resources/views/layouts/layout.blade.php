<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sim số Tấn An Phong</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

    <!-- Template CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/mmenu/mmenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

</head>


<body >

<!-- Site Start -->
<div id="page" class="site">
@include('layouts.header')

	<main id="primary" class="site-main">
    @yield('content')
	</main>
    @include('layouts.footer')

</div>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/libs/mmenu/mmenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
