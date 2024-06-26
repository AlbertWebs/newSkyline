<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>{{$title}} | Skyline Pr And Consultancy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Corporate Branding and Management, Advocacy Communications, Brand Communication and Publicity, Media Relations,
            public relations training and education and More">
    <link rel="canonical" href="skylinepublicrelations.com"/>
    <meta property="og:description" content="Corporate Branding and Management, Advocacy Communications, Brand Communication and Publicity, Media Relations,
            public relations training and education and More" />
    <meta property="og:title" content="Skyline Pr And Consultancy - Public Relations Firm In Kenya | Digital Marketing" />
    <meta property="og:type" content="articles" />
    <meta property="og:url" content="skylinepublicrelations.com" />
    <meta property="og:image" content="{{url('/')}}/uploads/logo/skylineLogo.png" />
    <meta name="twitter:title" content="Skyline Pr And Consultancy - Public Relations Firm In Kenya | Digital Marketing" />
    <meta name="twitter:site" content="@skylinePr" />
    <meta name="google-site-verification" content="oybQVWDBZuuEWNr0zgCeOMqzZMX4nQit_qtAKk6OHBE" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KEQ3SGRJ9K"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-KEQ3SGRJ9K');
    </script>

    <!-- Favicon -->
    @include('favicon')

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/skins/yellow.css')}}" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/js/plugins/revolution/css/settings.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/js/plugins/revolution/css/layers.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/js/plugins/revolution/css/navigation.css')}}" />


    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('theme/css/skins/yellow.css')}}" />


    <!-- Template JS Files -->
    <script src="{{asset('theme/js/modernizr.js')}}"></script>
    <style>
        @media (max-width: 767px) {
            .about-right-side{
                display:none;
            }

            .tp-caption{
                    max-width:600px !important;
                    word-wrap: break-word;
            }

            .NotGeneric-SubTitle span{
                /* max-width:200px !important; */
                text-align:center !important;
                font-size:25px !important;
                line-height: 40px;
                padding: 100px !important;
                margin: 20px !important;
            }
        }
    </style>


</head>

<body class="double-diagonals dark">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="{{url('/')}}/uploads/logo/skylineLogo.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar">
                    <!-- Logo Starts -->
                    <div class="logo">
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="{{url('/')}}">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light" src="{{url('/')}}/uploads/logo/skylineLogoNew.png" alt="logo-light" />
                            <!-- Logo White Ends -->
                            <!-- Logo Black Starts -->
                            <img id="logo-dark" class="logo-dark" src="{{url('/')}}/uploads/logo/skylineLogoNew.png" alt="logo-dark" />
                            <!-- Logo Black Ends -->
                        </a>
                    </div>
                    <!-- Logo Ends -->
					<!-- Toggle Icon for Mobile Starts -->
					<button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span id="icon-toggler">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</span>
					</button>
					<!-- Toggle Icon for Mobile Ends -->
					<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Main Menu Starts -->
						@include('front.menu')
						<!-- Main Menu Ends -->
					</div>
					<!-- Search Input Starts -->
					<div class="site-search hidden-xs">
						<div class="search-container">
							<input id="search-input" type="text" placeholder="type your keyword and hit enter ...">
							<span class="close">×</span>
						</div>
					</div>
					<!-- Search Input Ends -->
                    <!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>
        <!-- Header Ends -->
        @yield('content')
        <!-- Footer Section Starts -->
        <footer class="footer top-logos">
            <!-- Footer Top Area Starts -->
            <div class="container top-footer">
                <div class="row">
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Skyline Pr And Consultancy</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                <li><a href="{{url('/')}}/center-of-excellence">Center of Excellence</a></li>
								<li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Quick Links</h4>
                        <div class="menu">
                            <ul>
								<li><a href="{{url('/')}}/contact-us">Contact</a></li>
                                <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                                <li><a href="{{url('/')}}/terms-and-conditions">Terms of Services</a></li>
                                <li><a href="{{url('/')}}/copyright">Copyright Statement</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <h4>Contact US</h4>
                        <div class="menu">
                            <ul>
                                <li><span><i class="fa fa-envelope-open"></i> <small>info@skylinepublicrelations.com</small></span></li>
                                <li><span><i class="fa fa-phone"></i> 0710760015,0710266638,</span></li>
                                <li><span><i class="fa fa-map-marker"></i> Chalbi Condominiums, Cotton Avenue, Kilimani, Nairobi</span></li>
                                <li><span><i class="fa fa-clock-o"></i> mon-fri 08am &#x21FE; 05pm</span></li>

                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                            <p>
                                Skyline public relations agency is a top leading public relations and corporate branding consultancy firm that focuses on positioning organizations, individuals’ , brands and businesses in the corporate world. We believe in creating compelling stories that are impossible to forget.
                            </p>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                        <!-- Social Media Links Starts -->
                        <div class="social-icons">
                            <ul class="social">
                                <li>
                                    <a class="twitter" href="https://twitter.com/pr_skyline" title="twitter"></a>
                                </li>
                                <li>
                                    <a class="facebook" href="https://www.facebook.com/skylinepragency/" title="facebook"></a>
                                </li>
                                <li>
                                    <a class="google" href="#" title="google"></a>
                                </li>
                                <li>
                                    <a class="instagram" href="https://www.instagram.com/skylinepublicrelations/" title="instagram"></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="https://www.linkedin.com/company/skyline-public-relations-agency/" title="linkedin"></a>
                                </li>
                                <li>
                                    <a class="youtube" href="#" title="youtube"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Media Links Ends -->
                    </div>
                    <!-- Footer Widget Ends -->
                </div>
                <!-- Footer Bottom Area Starts -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center">Copyright © {{date('Y')}} Skyline Pr And Consultancy All Rights Reserved | Powered By <a href="https://designekta.com" target="_blank">Designekta Studios</a></p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom Area Ends -->
            </div>
            <!-- Footer Top Area Ends -->

        </footer>
        <!-- Footer Section Ends -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{asset('theme/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('theme/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.filterizr.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.magnific-popup.min.js')}}"></script>

    <!-- Revolution Slider Main JS Files -->
    <script src="{{asset('theme/js/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Revolution Slider Extensions -->

    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('theme/js/styleswitcher.js')}}"></script>

    <!-- Main JS Initialization File -->
    <script src="{{asset('theme/js/custom.js')}}"></script>

</body>

</html>
