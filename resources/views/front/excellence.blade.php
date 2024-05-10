@extends('front.master-pages')

@section('content')
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Our Services</h1>
        </div>
    </div>

    <div class="shape2"><img src="{{asset('theme/assets/img/shape/shape2.png')}}" alt="image"></div>
    {{-- <div class="shape3"><img src="assets/img/shape/shape3.png" alt="image"></div>
    <div class="shape5"><img src="assets/img/shape/shape5.png" alt="image"></div>
    <div class="shape6"><img src="assets/img/shape/shape6.png" alt="image"></div>
    <div class="shape7"><img src="assets/img/shape/shape7.png" alt="image"></div>
    <div class="shape8"><img src="assets/img/shape/shape8.png" alt="image"></div> --}}
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- End Page Title Area -->



        <!-- Start Case Study Area -->
        <div class="case-study-area pt-100 pb-75">
            <div class="container">
                <div class="startup-it-agency-title">
                    <span>What We Do</span>
                    <h2>Check our Services & Recent Works</h2>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur nod adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn dolore magna labore.</p> --}}
                </div>


                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="dibiz-case-studies-card with-style-two wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                            <a href="single-portfolio.html"><img src="{{asset('theme/assets/img/Pr-Marketing-Communication.jpg')}}" alt="image"></a>

                            <div class="content">
                                <h3>
                                    <a href="#">Pr & Marketing Communication</a>
                                </h3>
                                <div class="icon">
                                    <a href="#"><i class="flaticon-next-button"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="dibiz-case-studies-card with-style-two wow animate__animated animate__fadeInUp" data-wow-delay="250ms" data-wow-duration="1000ms">
                            <a href="single-portfolio.html"><img src="{{asset('theme/assets/img/Business-Consulting.jpg')}}" alt="image"></a>

                            <div class="content">
                                <h3>
                                    <a href="#">Business Consulting And Advisory Services</a>
                                </h3>
                                <div class="icon">
                                    <a href="#"><i class="flaticon-next-button"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="dibiz-case-studies-card with-style-two wow animate__animated animate__fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                            <a href="single-portfolio.html"><img src="{{asset('theme/assets/img/Communication-Sustainable-Leadership.jpg')}}" alt="image"></a>

                            <div class="content">
                                <h3>
                                    <a href="#">Communication & Sustainable Leadership</a>
                                </h3>
                                <div class="icon">
                                    <a href="#"><i class="flaticon-next-button"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                {{--  --}}

                <hr>


                <div class="row justify-content-center">
                    <?php $Services = DB::table('services')->where('pr','1')->get(); $counter = 1; ?>
                    @foreach ($Services as $Ser)
                    @if($counter == 4 || $counter ==5)
                    <div class="col-lg-6 col-md-6">
                    @else
                    <div class="col-lg-4 col-md-6">
                    @endif
                        <div class="case-study-card">
                            <div class="case-study-image">
                                <a href="#"><img src="{{url('/')}}/uploads/services/{{$Ser->image}}" alt="image"></a>
                            </div>
                            <div class="case-study-content">
                                {{-- <span>{{$Ser->title}}</span> --}}
                                <h3>
                                    <a href="#">{{$Ser->title}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php $counter = $counter+1 ?>
                    @endforeach


                </div>


            </div>
        </div>
        <!-- End Case Study Area -->
@endsection
