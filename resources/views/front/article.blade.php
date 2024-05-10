@extends('front.master-pages')

@section('content')
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>{{$title}}</h1>
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
@foreach ($Blog as $blog)
 <!-- Start Blog Details Area -->
 <div class="it-blog-details-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="it-blog-details-desc">
                    <div class="blog-details-image">
                        <img style="width:100%" src="{{url('/')}}/uploads/blog/{{$blog->image}}" alt="image">

                        <div class="tag">
                            {{-- <b>10</b> --}}
                            <span><?php echo  date("d", strtotime($blog->created_at)); ?> <?php echo  date("M", strtotime($blog->created_at)); ?> <?php echo  date("Y", strtotime($blog->created_at)); ?></span>
                        </div>
                    </div>
                    <div class="blog-details-content">
                        <ul class="entry-meta">
                            <li><i class='bx bx-user'></i> By <a href="#">Ebby Bright</a></li>
                            <li>/</li>
                            <li><i class='bx bx-message-rounded-dots'></i> No comment</li>
                        </ul>
                        <h3>{{$blog->title}}</h3>
                        <p>
                            {!!html_entity_decode($blog->content)!!}
                        </p>

                        <div class="tag-and-share-content d-flex justify-content-between align-items-center">
                            <ul class="tag-list">
                                <li>
                                    <span><i class='bx bxs-purchase-tag'></i></span>
                                </li>
                                <li><a href="#">PR,</a></li>
                                <li><a href="#">Communication,</a></li>
                                <li><a href="#">Digital Marketng</a></li>
                            </ul>
                            <ul class="share-list">
                                <li>
                                    <span>Share:</span>
                                </li>
                                <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-leave-form">
                        <h3>Leave A Reply</h3>
                        <p>Your email address will not be published.</p>

                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="Comment here..." spellcheck="false" autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn">Post A Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details Area -->
@endforeach


@endsection
