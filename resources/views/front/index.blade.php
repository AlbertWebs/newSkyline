@extends('front.master')

@section('content')
 <!-- Start Main Banner Area -->
 <section class="main-banner-area">
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
                            <!-- <a href="https://www.youtube.com/watch?v=Y5KCDWi7h9o" class="video-btn popup-youtube"><i class="flaticon-play-button"></i> Watch Video</a> -->
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
    <!-- <div class="shape2"><img src="{{asset('theme/assets/img/shape/shape2.png')}}" alt="image"></div>
    <div class="shape3"><img src="{{asset('theme/assets/img/shape/shape3.png')}}" alt="image"></div> -->
    <div class="shape4"><img src="{{asset('theme/assets/img/shape/shape4.png')}}" alt="image"></div>
    <!-- <div class="shape5"><img src="{{asset('theme/assets/img/shape/shape5.png')}}" alt="image"></div>
    <div class="shape6"><img src="{{asset('theme/assets/img/shape/shape6.png')}}" alt="image"></div>
    <div class="shape7"><img src="{{asset('theme/assets/img/shape/shape7.png')}}" alt="image"></div>
    <div class="shape8"><img src="{{asset('theme/assets/img/shape/shape8.png')}}" alt="image"></div> -->
</section>
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
                    <a href="single-portfolio.html"><img src="{{url('/')}}/uploads/services/{{$service->image}}" alt="image"></a>

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
                        At Skyline Group, we empower through innovative communication strategies, driven by sustainability, passion, and transformative change. Our core values of integrity, collaboration, and excellence guide us towards continuous learning and customer-centricity, shaping narratives for positive impact.
                    </p>

                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="flaticon-plus"></i>
                                Our Vision
                            </a>

                            <div class="accordion-content show">
                                <p>To be a premier global advisory and consultancy firm dedicated to empowering businesses in
                                    Africa by 2035. We serve as catalysts for transformative change, committed to elevating
                                    businesses in Africa through strategic communication and PR, visionary leadership, and
                                    sustainable strategies</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="flaticon-plus"></i>
                                Our Mission
                            </a>

                            <div class="accordion-content">
                                <p>
                                    Our Mission is to empower businesses in Africa, driving transformative change and fostering
                                     sustainable growth through strategic communication and visionary leadership.
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






<!-- Start Dibiz Clients Area -->
<div class="dibiz-clients-area bg-F7F8FF ptb-100">
    <div class="container">
        <div class="section-title with-gradient-color">
            <span class="sub-title">TESTIMONIALS</span>
            <h2>What Our Clients Are Saying?</h2>
        </div>

        <div class="dibiz-clients-slides owl-carousel owl-theme">
            <div class="dibiz-clients-card wow animate__animated animate__fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                <div class="client-info">
                    <!-- <img src="{{asset('theme/assets/img/more-home/clients/clients-1.png')}}" alt="image"> -->
                    <div class="title">
                        <h3>Director</h3>
                        <span>Nairobi Bespoke Tailoring</span>
                    </div>
                </div>
                <p>“Working with Skyline PR has been a game-changer for our fashion brand's positioning in the market. Their strategic insight and creative approach have not only elevated our brand image but also significantly improved our market presence. The team's deep understanding of the fashion industry, combined with their relentless dedication, has resulted in a brand positioning that truly resonates with our target audience. Skyline PR has not only met but exceeded our expectations, and we couldn't be happier with the results. They have become an indispensable partner in our journey towards fashion excellence.”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
            </div>

            <div class="dibiz-clients-card wow animate__animated animate__fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                <div class="client-info">
                    <!-- <img src="{{asset('theme/assets/img/more-home/clients/clients-2.png')}}" alt="image"> -->
                    <div class="title">
                        <h3>Director</h3>
                        <span>Ascend Tech House</span>
                    </div>
                </div>
                <p>“Skyline PR has been an invaluable partner in helping our IT company establish a distinctive brand positioning in a crowded marketplace. Their strategic expertise, coupled with a deep understanding of our industry, has allowed us to craft a unique identity that truly resonates with our target audience. The team at Skyline PR is not just a service provider; they are trusted advisors who go above and beyond to ensure our brand stands out and thrives. Thanks to their unwavering support, our company has achieved remarkable success in a short span of time, and we couldn't be happier with the results .”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
            </div>

            <div class="dibiz-clients-card wow animate__animated animate__fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                <div class="client-info">
                    <!-- <img src="{{asset('theme/assets/img/more-home/clients/clients-3.png')}}" alt="image"> -->
                    <div class="title">
                        <h3>INVESTMENT FIRM DIRECTOR</h3>
                        <span>Redmark</span>
                    </div>
                </div>
                <p>“Skyline Public Relations has helped the client boost their brand visibility and online presence. The service provider suggests good ideas, preempts issues, and charges the client reasonably. Moreover, they are always available and promptly respond to the client's queries and concerns.They are quick and prompt in responding to items and assignments requiring their input”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Dibiz Clients Area -->







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



        <div class="col-lg-2 col-6 col-sm-4 col-md-4">
            <div class="dibiz-partner-item wow animate__animated animate__fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                <a href="#"><img src="{{asset('theme/assets/img/WMLogo.png')}}" alt="image"></a>
            </div>
        </div>



    </div>
</div>
</section>
<!-- End  Dibiz Partner Area -->
@endsection
