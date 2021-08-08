<html>
<head>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-a11y="true"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
    <title>mano aplikacija -@yield('title')</title>
    @section('css')
    <link rel="stylesheet" type="text/css" href="/phpakademija/skrydziai/aplikacija/public/css/custom.css">
</head>
<header>
@include('header')
</header>
<body>



    @yield('content')

    @include('footer')

</body>

</html>
