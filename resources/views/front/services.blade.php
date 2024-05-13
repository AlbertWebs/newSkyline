@extends('front.master-pages')

@section('content')
@foreach ($Service  as $services )
<!-- Start Page Title Area -->
<section class="page-title-area page-banner-area" style="background-image: url('{{url('/')}}/uploads/services/{{$services->image}}');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        z-index: 1;
        /* padding-top: 120px;
        padding-bottom: 120px; */
        ">
    <div class="container">
        <div class="page-title-content">
            <h1>{{$title}}</h1>
        </div>
    </div>

    <div class="shape2"><img src="{{asset('theme/assets/img/shape/shape2.png')}}" alt="image"></div>
    {{-- <div class="shape3"><img src="{{asset('theme/assets/img/shape/shape3.png')}}" alt="image"></div>
    <div class="shape5"><img src="{{asset('theme/assets/img/shape/shape5.png')}}" alt="image"></div>
    <div class="shape6"><img src="{{asset('theme/assets/img/shape/shape6.png')}}" alt="image"></div>
    <div class="shape7"><img src="{{asset('theme/assets/img/shape/shape7.png')}}" alt="image"></div>
    <div class="shape8"><img src="{{asset('theme/assets/img/shape/shape8.png')}}" alt="image"></div> --}}
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- End Page Title Area -->



    <!-- Start Overview Area -->
    <section class="overview-area ptb-100">
        <div class="container">
            <div class="blog-details-content">
                <div class="overview-content">
                    <div class="content">
                        <h3>{{$title}}</h3>
                        <p>
                            {!!html_entity_decode($services->content)!!}
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End Overview Area -->
    <section class="overview-area ptb-100 bg-f9f9f9">
        <center>
            <div class="dibiz-solutions-content">
            <h3>Our Solutions</h3>
            </div>
        </center>
            <!-- Start Dibiz Case Studies Area -->
            <div class="dibiz-case-studies-area-without-color">

                <div class="container">
                    <div class="row justify-content-center">

                        <?php
                        $Solutions = DB::table('solutions')->where('service_id',$services->id)->get(); $counter = 1;
                        ?>
                        @foreach ($Solutions as $solutions)
                        <div class="col-lg-3 col-md-6">
                            <div class="dibiz-case-studies-card with-style-two wow animate__animated animate__fadeInUp" data-wow-delay="{{$counter}}00ms" data-wow-duration="{{$counter}}00ms">
                                <a href="single-portfolio.html"><img src="{{url('/')}}/uploads/services/solutions/{{$solutions->image}}" alt="image"></a>
                                <div class="content">
                                    <h3 class="font-16">
                                        <a  class="font-16" href="{{url('/')}}/our-services/solutions/{{$solutions->slung}}">{{$solutions->title}}</a>
                                    </h3>

                                </div>
                            </div>
                        </div>
                        <?php $counter = $counter+1 ?>
                        @endforeach



                    </div>
                </div>
            </div>

    </section>
<!-- End Dibiz Case Studies Area -->





    <!-- Start Project Start Area -->
    <section class="project-start-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="project-start-image">
                        <img src="https://templates.envytheme.com/dibiz/default/assets/img/project-start1.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="project-start-content">
                        <span class="sub-title">Get Started</span>
                        <h2>Engage Us? </h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p> --}}
                        <a href="{{url('/')}}/contact-us" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape2"><img src="{{asset('theme/assets/img/shape/shape2.png')}}" alt="image"></div>
        <div class="shape3"><img src="{{asset('theme/assets/img/shape/shape3.png')}}" alt="image"></div>
        <div class="shape5"><img src="{{asset('theme/assets/img/shape/shape5.png')}}" alt="image"></div>
        <div class="shape6"><img src="{{asset('theme/assets/img/shape/shape6.png')}}" alt="image"></div>
        <div class="shape7"><img src="{{asset('theme/assets/img/shape/shape7.png')}}" alt="image"></div>
        <div class="shape13"><img src="{{asset('theme/assets/img/shape/shape13.png')}}" alt="image"></div>
    </section>
    <!-- End Project Start Area -->
@endforeach

@endsection
