@extends('front.master-pages')

@section('content')
<!-- Start Page Title Area -->
<section class="page-title-area page-banner-area" style="background-image: url('{{url('/')}}/theme/assets/img/ICI-Career-in-Public-Relations-and-Media.jpg');
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
            <h1>Sectors</h1>
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




 <!-- Start Dibiz Case Studies Area -->
 <div class="dibiz-case-studies-area-without-color ptb-100">
    <div class="container">


        <div class="row justify-content-center">
            <?php
               $Services = DB::table('sectors')->get();
            ?>
            @foreach ($Services as $service)
            <div class="col-lg-3 col-md-6">
                <div class="dibiz-case-studies-card with-style-two wow animate__animated animate__fadeInUp" data-wow-delay="{{$service->id}}0ms" data-wow-duration="{{$service->id}}00ms">
                    <a href="#"><img src="{{url('/')}}/uploads/sectors/{{$service->image}}" alt="image"></a>

                    <div class="content">
                        <h3>
                            <a href="{{url('/')}}/sectors/{{$service->slung}}">{{$service->title}}</a>
                        </h3>

                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>


</div>
<!-- End Dibiz Case Studies Area -->

@endsection
