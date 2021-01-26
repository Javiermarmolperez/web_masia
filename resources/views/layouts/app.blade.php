<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>Masia Can Cruz Category Flat Bootstrap Responsive Website Template | Home :: W3layouts</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Tropical Resorts a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


    <link rel="stylesheet" href="css/bootstrap.min.css"	type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" 		type="text/css" media="all">
    <link rel="stylesheet" href="css/animate.css" 		type="text/css" media="all">



    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,900,700" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css">


</head>

<body>
<div class="flex-center position-ref full-height">


    <div class="header agileits w3layouts" id="home">


        <nav class="navbar navbar-default w3l aits wow bounceInUp agileits w3layouts">
            <div class="container">

                <div class="navbar-header agileits w3layouts">
                    <button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only agileits w3layouts">Toggle navigation</span>
                        <span class="icon-bar w3l"></span>
                        <span class="icon-bar aits"></span>
                        <span class="icon-bar w3laits"></span>
                    </button>
                    <a class="navbar-brand agileits w3layouts" href="http://127.0.0.1:8000">Masia Can Cruz</a>
                </div>

                <div id="navbar" class="navbar-collapse agileits w3layouts navbar-right collapse">
                    <ul class="nav agileits w3layouts navbar-nav">
                        <li><a href="{{route ('rooms')}}">Habitaciones</a></li>
                        <li><a href="{{route ('gallery')}}">Galeria</a></li>
                        <li><a href="{{route ('booking')}}">Reservas</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>


    <div class="footer agileits w3layouts">
        <div class="container">

            <div class="col-md-6 col-sm-6 agileits w3layouts footer-grids">
                <div class="col-md-4 col-sm-4 footer-grid agileits w3layouts footer-grid-3 wow fadeInUp">
                    <ul class="agileits w3layouts">
                        <li class="agileits w3layouts"><a href="about.html">Nosotros</a></li>
                        <li class="agileits w3layouts"><a href="{{route ('cuisine')}}">Cocina Ecologica</a></li>
                        <li class="agileits w3layouts"><a href="#">Proyecto</a></li>
                        <li class="agileits w3layouts"><a href="#">Comunidad</a></li>
                        <li class="agileits w3layouts"><a href="#">Contacto</a></li>
                        <li class="agileits w3layouts"><a href="{{ url('/home') }}">Administrador</a></li>

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 col-sm-6 footer-grids agileits w3layouts social wow fadeInUp">
                <ul class="social-icons">
                    <li class="agileits w3layouts"><a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fcan-plans.com%2F&t=" class="facebook agileits w3layouts" title="Facebook"></a></li>
                    <li class="agileits w3layouts"><a href="https://twitter.com/intent/tweet?via=wordpressdotcom&url=https%3A%2F%2Fcan-plans.com%2F" class="twitter agileits w3layouts" title="Twiter"></a></li>
                    <li class="agileits w3layouts"><a href="#" class="instagram agileits w3layouts" title="Instagram"></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>


    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Animate.CSS-JavaScript -->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //Animate.CSS-JavaScript -->

    <!-- Slider-JavaScript -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider1, #slider2, #slider3, #slider4").responsiveSlides({
                auto: true,
                nav: true,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <!-- //Slider-JavaScript -->

    <!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
    <script type="text/javascript">
        $(document).ready(function() {
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 100,
                easingType: 'linear'
            };
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <a href="#" id="toTop" class="agileits w3layouts" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
    <!-- //Slide-To-Top JavaScript -->

    <!-- Smooth-Scrolling-JavaScript -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll, .navbar li a, .footer li a").click(function(event){
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
</body>
</html>
