@extends('front.master-pages')

@section('content')
@foreach ($Solutions as $solutions)


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
            <h1>{{$solutions->title}}</h1>
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
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="content">
                                <br><br>
                                <h3>{{$solutions->title}}</h3>

                                <p>
                                    {!!html_entity_decode($solutions->content)!!}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">

                                <img src="{{asset('theme/assets/img/ICI-Career-in-Public-Relations-and-Media.jpg')}}" alt="image">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endforeach

@endsection
