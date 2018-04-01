<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Abraham</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('color/default.css')}}">
        <link rel="shortcut icon" type="text/css" href="{{asset('img/favicon.ico')}}">

    </head>

    <body>

      @yield('content')


    </body>

    <script src="{{asset('js/jquery.js')}}"> </script>
    <script src="{{asset('js/jquery.scrollTo.js')}}"> </script>
    <script src="{{asset('js/jquery.nav.js')}}"> </script>
    <script src="{{asset('js/jquery.localScroll.js')}}"> </script>
    <script src="{{asset('js/bootstrap.js')}}"> </script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"> </script>
    <script src="{{asset('js/isotope.js')}}"> </script>
    <script src="{{asset('js/jquery.flexslider.js')}}"> </script>
    <script src="{{asset('js/inview.js')}}"> </script>
    <script src="{{asset('js/animate.js')}}"> </script>
    <script src="{{asset('js/custom.js')}}"> </script>
    <script src="{{asset('contactform/contactform.js')}}"> </script>



</html>
