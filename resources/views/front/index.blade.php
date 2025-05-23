@extends('front.master')

@section('content')

 <!-- Start Main Banner Area -->
 <section class="banner-wrapper-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="banner-wrapper-content">
                    <div class="content">
                        <span class="sub-title" style="color:#ffffff">
                            Corporate Branding Beyond Africa
                        </span>
                        <h1>We Are Skyline Group</h1>
                        <p>
                            Skyline Group is a premier global advisory and consultancy firm dedicated to empowering businesses in Africa. We are catalysts for transformative change dedicated to elevating business in Africa through Strategic communication and PR,visionary leadership and sustainable strategies. We leverage our global networks, business intelligence, and comprehensive market insights to guide our partners towards unparalleled success.
                        </p>
                        <div class="btn-box">
                            <div class="d-flex align-items-center">
                                <a href="contact.html" class="default-btn">Get Started</a>
                                <!-- <a href="https://www.youtube.com/watch?v=Y5KCDWi7h9o" class="video-btn popup-youtube"><i class="flaticon-play-button"></i> Watch Video</a> -->
                                &nbsp; &nbsp; &nbsp;
                                <a href="tel:+254 (71) 076 0015" class="video-btn" style="font-size:20px; color:#ffffff"><i class='bx bxs-phone-call'></i> +254 (71) 076 0015</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="main-banner-image">
                    <img src="{{asset('theme/assets/img/ICI-Career-in-Public-Relations-and-Media.jpg')}}" alt="image">
                    <div class="divider"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="shape1"><img src="{{asset('theme/assets/img/shape/shape1.png')}}" alt="image"></div>
</section>
<!-- End Main Banner Area -->


 <!-- Start Main Banner Area -->
{{-- <section class="main-banner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-content">
                    <span class="sub-title">
                        Corporate Branding Beyond Africa
                    </span>
                    <h1>We Are Skyline Group</h1>
                    <p>
                        Skyline Group is a premier global advisory and consultancy firm dedicated to empowering businesses in Africa. We are catalysts for transformative change dedicated to elevating business in Africa through Strategic communication and PR,visionary leadership and sustainable strategies. We leverage our global networks, business intelligence, and comprehensive market insights to guide our partners towards unparalleled success.
                    </p>
                    <div class="btn-box">
                        <div class="d-flex align-items-center">
                            <a href="contact.html" class="default-btn">Get Started</a>
                            <a href="tel:+254 (71) 076 0015" class="video-btn" style="font-size:20px"><i class='bx bxs-phone-call'></i> +254 (71) 076 0015</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="main-banner-image">
                    <img src="{{asset('theme/assets/img/ICI-Career-in-Public-Relations-and-Media.jpg')}}" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="{{asset('theme/assets/img/shape/shape1.png')}}" alt="image"></div>
</section> --}}
<!-- End Main Banner Area -->



 <!-- Start Dibiz Case Studies Area -->
 <div class="dibiz-case-studies-area-without-color ptb-100">
    <div class="container">
        <div class="section-title with-gradient-color">
            <!-- <span class="sub-title">What We Do</span> -->
            <h2>What We Do</h2>
        </div>

        <div class="row justify-content-center">
            <?php
               $Services = DB::table('services')->get();
            ?>
            @foreach ($Services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="dibiz-case-studies-card with-style-two wow animate__animated animate__fadeInUp" data-wow-delay="{{$service->id}}00ms" data-wow-duration="{{$service->id}}000ms">
                    <a href="single-portfolio.html"><img style="min-height:416px" src="{{url('/')}}/uploads/services/{{$service->image}}" alt="image"></a>

                    <div class="content">
                        <h3>
                            <a href="{{url('/')}}/our-services/{{$service->slung}}">{{$service->title}}</a>
                        </h3>
                        <div class="icon">
                            <a href="{{url('/')}}/our-services/{{$service->slung}}"><i class="flaticon-next-button"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>

    <div class="dibiz-case-studies-bottom-text">
        <a href="{{url('/')}}/our-services">Learn More</a>
    </div>
</div>
<!-- End Dibiz Case Studies Area -->

  <!-- Start Dibiz What We Do Area -->
<div class="dibiz-what-we-do-area bg-F7F8FF">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="dibiz-what-we-do-content wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <span>About Us</span>
                    <h3>Where Communication Meets the Horizon: Skyline Group</h3>
                    <p>
                        <div>
                            Skyline PR Group is a full-service Pan-African Integrated Marketing Communications (IMC)
                            and Creative Agency offering a full spectrum of services in Strategic Communication, Public
                            Relations, AI Driven Digital communication, Customer-centric marketing solutions, and
                            Creative Communication. Our mission is to empower businesses and brands across the
                            continent by delivering impactful PR strategies, innovative creative solutions, and tailored
                            marketing campaigns, all grounded in sustainable leadership principles.
                          </div>



                    </p>

                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="flaticon-plus"></i>
                                Our Vision
                            </a>

                            <div class="accordion-content show">
                                <p>
                                    To be a premier global advisory and consultancy firm, empowering businesses across Africa by
                                    2035. We drive transformative change through strategic communication and public relations,
                                    business development and visionary leadership, delivering sustainable solutions that elevate and
                                    strengthen African enterprises.
                                </p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="flaticon-plus"></i>
                                Our Mission
                            </a>

                            <div class="accordion-content">
                                <p>
                                    To empower African businesses by driving transformative change and fostering sustainable
                                    growth through innovative communication strategies, business development and visionary
                                    leadership.
                                </p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="flaticon-plus"></i>
                                Our Values
                            </a>

                            <div class="accordion-content">
                                <p>
                                    <!--  -->
                                    <ul>
                                        <li>Empowerment</li>
                                        <li>Sustainability</li>
                                        <li>Passion</li>
                                        <li>Transformative Change</li>
                                        <li>Innovation and Entrepreneurship</li>
                                        <li>Integrity</li>
                                        <li>Collaboration</li>
                                        <li>Excellence</li>
                                        <li>Continuous Learning</li>
                                        <li>Customer-Centricity</li>
                                    </ul>

                                    <!--  -->
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="dibiz-what-we-do-image wow animate__animated animate__fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Dibiz What We Do Area -->


<!-- Start Dibiz Overview Area -->
<!-- <div class="dibiz-overview-area pt-100 pb-100">
    <div class="container-fluid">
        <div class="overview-animate-text">
            <span>Corporate Branding <strong>Beyond</strong> Africa&nbsp;</span>
        </div>
    </div>

    <svg style="display:none;">
        <defs>
            <filter id="stroke-text">
                <feMorphology radius="1" operator="dilate"></feMorphology>
                <feComposite operator="xor" in="SourceGraphic"/>
            </filter>
        </defs>
    </svg>
</div> -->
<!-- End Dibiz Overview Area -->

   <!-- Start Dibiz Solutions Area -->
<div class="dibiz-solutions-area ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="dibiz-solutions-image">
                    <img class="border-radius" src="{{asset('theme/assets/img/pexels-pixabay-265087.jpg')}}" alt="image">

                    <a href="https://www.youtube.com/watch?v=PWvPbGWVRrU" class="video-btn popup-youtube">
                        <i class="flaticon-play-button"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="dibiz-solutions-content">
                    <span>DIGITAL MARKETING</span>
                    <h3>Creative Solutions Outstanding Results</h3>
                    <p>
                        Skyline Creative Solutions is your premier partner for unlocking unparalleled results. With a blend of creativity and strategic thinking, we craft solutions that transcend expectations and deliver outstanding outcomes. Our team is dedicated to innovation, pushing boundaries to ensure your message resonates with impact. From conceptualization to execution, we're committed to elevating your brand to new heights and achieving success beyond measure.
                    </p>

                    <!-- <div class="solutions-inner-content">
                        <h4>Our Solutions</h4>
                        <p>Where challenges become canvases for innovation. We don't just solve problems; we reimagine them with artistry and ingenuity. From mundane concepts to captivating narratives, we craft solutions that defy expectations. With us, every problem is an opportunity to redefine the extraordinary.</p>
                    </div>
                    <div class="solutions-inner-content color-two">
                        <h4>Results</h4>
                        <p>Outstanding Results are our hallmark. We're dedicated to surpassing expectations at every turn, crafting strategies that propel you beyond mediocrity. With unwavering commitment, we transform aspirations into achievements, setting new standards of success with every endeavor.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dibiz Solutions Area -->






<!-- Start Dibiz Partner Area -->
<section class="dibiz-partner-area-with-color pt-100 pb-75">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <a href="#"><img src="https://skylinepublicrelations.com/theme/img/LRI-Secondary-Horz-Color-Mobile.png" alt="image"></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="https://skylinepublicrelations.com/theme/img/IMG-20220816-WA0003-removebg-preview.png" alt="image"></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <a href="#"><img src="https://skylinepublicrelations.com/theme/img/IMG-20220816-WA0004-removebg-preview.png" alt="image"></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                    <a href="#"><img src="https://skylinepublicrelations.com/theme/img/image-removebg-preview-5.png" alt="image"></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <a href="#"><img style="width:130px;" src="https://findafundi.com/wp-content/uploads/2023/10/Logo-1.png" alt="image"></a>
                </div>
            </div>





            {{--  --}}
            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="{{url('/')}}/uploads/clients/BK-Brandmark-2-Lead.png" alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="{{url('/')}}/uploads/clients/ELI_logoHorz_onblue crop.png" alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="{{url('/')}}/uploads/clients/imsk-kenya-logo-e1693146781864-120x134.png" alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="{{url('/')}}/uploads/clients/Business-For-Life-Logo-Transparent.png" alt="image"></a>
                </div>
            </div>


            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="{{url('/')}}/uploads/clients/Indutry-banner.jpg" alt="image"></a>
                </div>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="{{url('/')}}/uploads/clients/logo.webp" alt="image"></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="{{url('/')}}/uploads/clients/LogoWebRetina.png" alt="image"></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 col-sm-4 col-md-4">
                <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <a href="#"><img src="{{url('/')}}/uploads/clients/WMLogo.png" alt="image"></a>
                </div>
            </div>





        </div>
    </div>
    </section>
    <!-- End  Dibiz Partner Area -->



<!-- Start Dibiz Blog Area -->
<div class="dibiz-blog-area pt-100 pb-75">
<div class="container">
    <div class="section-title with-gradient-color">
        <span class="sub-title">OUR BLOG</span>
        <h2>Our Insight Hub: </h2>
        <p>Your Destination for In-Depth Articles, Thought-Provoking Essays, and Expert Commentary</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="dibiz-blog-card with-border-radius wow animate__animated animate__fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                <div class="blog-image">
                    <a href="single-blog-1.html"><img style="min-height:300px" src="{{asset('theme/assets/img/pexels-christina-morillo.jpg')}}" alt="image"></a>
                </div>
                <div class="blog-content">
                    <div class="blog-info d-flex align-items-center">

                        <div class="info">
                            <h5>Ebby Bright Addai</h5>
                        </div>
                        <div class="info-date">
                            <span><i class='bx bxs-calendar'></i> January 20, 2024</span>
                        </div>
                    </div>
                    <h3>
                        <a href="single-blog-1.html">Strategic Pr Campaigns: Fueling Business Growth Through Effective Communication</a>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="dibiz-blog-card with-border-radius wow animate__animated animate__fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                <div class="blog-image">
                    <a href="single-blog-1.html"><img style="min-height:300px" src="https://skylinepublicrelations.com/uploads/services/PUBLIC-RELATIONS-08.jpg" alt="image"></a>
                </div>
                <div class="blog-content">
                    <div class="blog-info d-flex align-items-center">

                        <div class="info">
                            <h5>Ebby Bright Addai</h5>
                        </div>
                        <div class="info-date">
                            <span><i class='bx bxs-calendar'></i> January 20, 2024</span>
                        </div>
                    </div>
                    <h3>
                        <a href="single-blog-1.html">Skyrocket Your Business Growth: Harnessing The Power Of Influencer Public Relation</a>
                    </h3>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="dibiz-blog-card with-border-radius wow animate__animated animate__fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                <div class="blog-image">
                    <a href="single-blog-1.html"><img style="min-height:300px" src="https://skylinepublicrelations.com/uploads/services/RFI_Course_image_1200x1200.jpg" alt="image"></a>
                </div>
                <div class="blog-content">
                    <div class="blog-info d-flex align-items-center">

                        <div class="info">
                            <h5>Ebby Bright Addai</h5>
                        </div>
                        <div class="info-date">
                            <span><i class='bx bxs-calendar'></i> January 20, 2024</span>
                        </div>
                    </div>
                    <h3>
                        <a href="single-blog-1.html">The Symbiotic Dance Of Market Research And Public Relations: A Recipe For Business Success</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Dibiz Blog Area -->



@endsection
