<html>






<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Steak House (02) </title>

    <!-- stylesheets of Bootstrap  css -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">

    <!-- Animate Css -->
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}">

    <!-- Libarary of font Awesome -->
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">

    <!-- Hover Css -->
    <link rel="stylesheet" href="{{asset("css/hover-min.css")}}">

    <!-- Small Slider -->
    <link rel="stylesheet" href="{{asset("css/flexslider.css")}}">

    <!-- For Vido -->
    <link rel="stylesheet" href="{{asset("css/YouTubePopUp.css")}}">

    <!-- Fancybox For images -->
    <link rel="stylesheet" href="{{asset("css/jquery.fancybox.min.css")}}">

    <!-- My Style CSS -->
    <link rel="stylesheet" href="{{asset("css/style.css")}}">

    <!-- My Media CSS -->
    <link rel="stylesheet" href="{{asset("css/media.css")}}">


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>


    <script src="{{asset("js/html5shiv.min.js")}}"></script>
    <script src="{{asset("js/respond.min.js")}}">  </script>

    <!-- ----------------------------------------------------------- -->

</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">




<!-- ------------------------------------------Start Home section-------------------------------------------- -->


<section id="home" class="Slide_Show text-center">

    <!-- Start and End overlay -->
    <div class="gradient-overlay"></div>

    <!-- Start container -->
    <div class="container">

        <!-- Start row -->
        <div class="row">

            <!-- start txt -->
            <div class="col-md-offset-2 col-md-8 col-sm-12 txt">
                <h1 class="wow fadeInUp" data-wow-delay="0.6s">Steak House</h1>
                <p class="wow fadeInUp lead" data-wow-delay="1.0s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>

                <a href="#feature" class="wow fadeInUp btn btn-default hvr-bounce-to-top" data-wow-delay="1.3s">Discover Now</a>
            </div>
            <!-- End txt -->

        </div>
        <!-- End row -->

    </div>
    <!-- End Container -->

</section>
<!-- ------------------------------------------End Home section-------------------------------------------- -->


<!-- ------------------------------------------ Start Navbar ----------------------------------------------- -->

<nav class="navbar navbar-default">

    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#">Steak House</a>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-right">

                <li class="active">
                    <a href="#home"> Home <span class="sr-only">(current)</span> </a>
                </li>

                <li><a href="#Features">Features</a></li>

                <li><a href="#About">About</a></li>

                <li><a href="#Menu">Menu</a></li>

                <li><a href="#Team">Team</a></li>

                <li> <a href="#my-Gallery">Gallery</a> </li>

                <li> <a href="#Contact">Contact</a> </li>

            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>


@yield('content')


<section class="footer text-center">

    <div class="container">
        <div class="row">
            <p>Copyright &copy; 2016 Steak House Company - Designed by
                <a href="https://www.facebook.com/said.oraby.75" target="_blank"> El Sayed Oraby </a>
            </p>
        </div>
    </div>

</section>

<!-- -------------------------------------End Section Footer------------------------------------------------- -->

<a href="#" class="scrollToTop"> <i class="fa fa-angle-up" aria-hidden="true"></i> </a>

<!-- -------------------------------- Start Section Loading ------------------------------------------------- -->
<section class="loading-overlay">

    <div class="loading-overlay-content">
        <h1 class="text-center heading">You Are Welcom In My Website</h1>
    </div>

    <div class="spinner"></div>

</section>


<!-- -------------------------------- End Section Loading ------------------------------------------------- -->


<!-- -------------------------------------------------------------------------------------------------- -->


<script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>

<!-- bootstrap js -->
<script src="{{asset("js/bootstrap.min.js")}}"></script>

<!-- Slide Show images #Home  -->
<script src="{{asset("js/jquery.backstretch.min.js")}}"></script>

<!-- Small Slider -->
<script src="{{asset("js/jquery.flexslider-min.js")}}"></script>

<!-- YouTubePopUp plugin -->
<script src="{{asset("js/YouTubePopUp.jquery.js")}}"></script>

<!-- fancybox plugin -->
<script src="{{asset("js/jquery.fancybox.min.js")}}"></script>



<!-- nicescroll plugin -->
<script src="{{asset("js/jquery.nicescroll.min.js")}}"></script>

<script src="{{asset("js/wow.min.js")}}"></script>

<script>
    new WOW().init();
</script>

<!-- Java Script Code -->
<script src="{{asset("js/myCode.js")}}"></script>
</body>

</html>