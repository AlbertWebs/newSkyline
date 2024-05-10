
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/dark.css')}}">
        <link rel="stylesheet" href="{{asset('theme/assets/css/responsive.css')}}">
        <link rel="icon" type="image/png" href="{{asset('theme/assets/img/favicon.png')}}">
        <!-- SEO -->
        <title>Skyline PR - Public Relations Firm In Kenya | Digital Marketing | Skyline Pr And Consultancy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Corporate Branding and Management, Advocacy Communications, Brand Communication and Publicity, Media Relations,  public relations training and education and More">
        <link rel="canonical" href="skylinepublicrelations.com"/>

        <meta property="og:description" content="Corporate Branding and Management, Advocacy Communications, Brand Communication and Publicity, Media Relations, public relations training and education and More" />
        <meta property="og:title" content="Skyline Pr And Consultancy - Public Relations Firm In Kenya | Digital Marketing" />
        <meta property="og:type" content="articles" />
        <meta property="og:url" content="skylinepublicrelations.com" />
        <meta property="og:image" content="https://skylinepublicrelations.com/uploads/logo/skylineLogo.png')}}" />

        <meta name="twitter:title" content="Skyline Pr And Consultancy - Public Relations Firm In Kenya | Digital Marketing" />
        <meta name="twitter:site" content="@skylinePr" />
        <meta name="google-site-verification" content="oybQVWDBZuuEWNr0zgCeOMqzZMX4nQit_qtAKk6OHBE" />
        <!-- SEO -->
    </head>
    <body>

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-color-white">
            <div class="dibiz-responsive-nav">
                <div class="container">
                    <div class="dibiz-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img width="126" src="{{asset('theme/assets/img/logo/Skyline-white-logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dibiz-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img width="166" src="{{asset('theme/assets/img/logo/Skyline-white-logo.png')}}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                           @include('front.menu')

                            <div class="others-option d-flex align-items-center">


                                <div class="option-item">
                                    <div class="search-box">
                                        <i class="flaticon-search"></i>
                                    </div>
                                </div>


                                <div class="option-item">
                                    <div class="switch-box">
                                        <label id="switch" class="switch">
                                            <input type="checkbox" onchange="toggleTheme()" id="slider">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option justify-content-center d-flex align-items-center">


                                <div class="option-item">
                                    <div class="search-box">
                                        <i class="flaticon-search"></i>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="switch-box">
                                        <label id="switch" class="switch">
                                            <input type="checkbox" onchange="toggleTheme()" id="slider">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->




        <!-- Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>

                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->


    @yield('content')

    <!--  -->
    @include('front.footer')
    <!--  -->

    <!-- Start Footer Area -->
    <!-- <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <a href="index.html" class="logo">
                            <img src="{{asset('theme/assets/img/logo/Skyline-white-logo.png')}}" alt="logo">
                        </a>
                        <p>
                            Skyline public relations agency is a top leading public relations and corporate branding consultancy firm that focuses on positioning organizations, individuals’ , brands and businesses in the corporate world. We believe in creating compelling stories that are impossible to forget.
                        </p>

                        <ul class="social-link">
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget pl-2">
                        <h3>Resources</h3>

                        <ul class="footer-links-list">
                            <li><a href="#">Coporate PR</a></li>
                            <li><a href="contact.html">Sports PR</a></li>
                            <li><a href="services-1.html">Entertainment PR</a></li>
                            <li><a href="faq.html">PR Academy for Entrepreneurs</a></li>
                            <li><a href="blog-1.html">Blog</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Address</h3>

                        <ul class="footer-contact-info">
                            <li><i class='bx bx-map'></i>Chalbi Condominiums, Ring Road, Kilimani, Suite 5c</li>
                            <li><i class='bx bx-phone-call'></i><a href="tel:+254 (71) 076 0015">+254 (71) 076 0015</a></li>
                            <li><i class='bx bx-envelope'></i>
                                    <a href="">
                                        <span>info@skylinepublicrelations.com</span>
                                    </a>
                            </li>
                            <li><i class='bx bxs-inbox'></i><a href="tel:+557854578964">+55 785 4578964</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p>© Skyline Group Limited All Rights Reserved | Powered By <a href="https://designekta.com/" target="_blank">Designekta Studios</a></p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li><a href="privacy-policy.html">CSR</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-of-service.html">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape16"><img src="{{asset('theme/assets/img/shape/shape16.png')}}" alt="image"></div>
    </footer> -->
    <!-- End Footer Area -->

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Links of JS files -->
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/appear.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/fancybox.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/meanmenu.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/nice-select.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/sticky-sidebar.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('theme/assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('theme/assets/js/ajaxchimp.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer')}}"></script>
        <script src="{{asset('theme/assets/js/main.js')}}"></script>
    </body>
</html>

