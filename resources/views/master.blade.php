<!DOCTYPE html>

<html>

    <head>

        <title>@yield('title') | Elzinga en de Vries betimmeringen</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">

        @include('partials.styles')

    </head>

    <body>


    	@include('partials.header')

        @include('partials.banner')

        @include('partials.contact-balk')
        
    	@yield('content')	

        @include('partials.footer')


        <script src="../js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

    </body>



</html>
