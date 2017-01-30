<!DOCTYPE html>
<html class="side-header">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Peru Traditional Archery Academy</title>

    <meta name="keywords" content="peru traditional archery academy" />
    <meta name="description" content="Peru Traditional Archery Academy">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ elixir('css/theme.css') }}">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ elixir('css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

    @yield('contenido_header')

</head>
<body>

    <div class="body">

        <header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": false, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
            <div class="header-body">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-logo">
                                <a href="/">
                                    <img alt="Peru Traditional Archery Academy" width="185" data-sticky-width="82" data-sticky-top="33" src="/imagenes/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-nav">
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                        <nav>
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="active"><a href="/">Inicio</a></li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#">
                                                        Nosotros
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Nuestra Academia</a></li>
                                                        <li><a href="#">Instructores</a></li>
                                                        <li><a href="#">Instructores de Apoyo</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#">
                                                        Galería
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Fotos</a></li>
                                                        <li><a href="#">Videos</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="/">Contacto</a></li>
                                                <li><a href="/">Blog</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <ul class="header-social-icons social-icons hidden-xs hidden-sm">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-icons-youtube"><a href="http://www.twitter.com/" target="_blank" title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">
            @yield('contenido_body')
        </div>

        <footer class="short" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Sobre Peru Traditional Archery Academy</h4>
                        <p>Nuestro compromiso, es formar Arqueros Tradicionales asegurandoles un sano esparcimiento, diversión y relajación, formandolos para ser capaces de competir a nivel nacional e internacional, en los  torneos que se llevan a cabo en el Perú y en los diferentes continentes, como Europa, Asia y América.</p>
                        <hr class="light">
                    </div>
                    <div class="col-md-6">
                        <h5 class="mb-sm">Contactanos</h5>
                        <span class="phone">999612323</span>
                        <p class="mb-none">Dirección: Club de la FAP Fundo Odría - Monterrico - Surco</p>
                        <p class="mb-none">Dirección: Centro de Esparcimiento del Jockey Club del Perù - Monterrico - Surco</p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© Copyright 2017. Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/common/common.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validation.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/vide.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    @yield('contenido_footer')

</body>
</html>