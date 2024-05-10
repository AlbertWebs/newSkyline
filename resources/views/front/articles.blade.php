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


<section class="blog-area bg-f9f9f9 ptb-100">
    <div class="container">
        <div class="row">
            @foreach ($Blog as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="image">
                        <a href="{{url('/')}}/articles/{{$blog->slung}}" class="d-block">
                            <img src="{{url('/')}}/uploads/blog/{{$blog->image}}" alt="image">
                        </a>
                    </div>

                    <div class="content">
                        <h3 style="min-height:115px;"><a href="{{url('/')}}/articles/{{$blog->slung}}">{{$blog->title}}</a></h3>
                        <div class="d-flex align-items-center">
                            <img src="https://skylinepublicrelations.com/uploads/team/team.jpg" alt="image">
                            <div class="info">
                                <h5>Ebby Bright</h5>
                                <span> <?php echo  date("d", strtotime($blog->created_at)); ?> <?php echo  date("M", strtotime($blog->created_at)); ?> <?php echo  date("Y", strtotime($blog->created_at)); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



            <div class="col-lg-12 col-md-12">
                <div class="pagination-area text-center">
                    <a href="#" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>
                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
@endsection
