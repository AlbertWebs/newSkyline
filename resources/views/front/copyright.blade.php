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



 <!-- Start Blog Details Area -->
 <div class="it-blog-details-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="panel-body">
                    This website and its content is copyright of www.skylinepublicrelations.com - © www.skylinepublicrelations.com 2022. All rights reserved. Any redistribution or reproduction of part or all of the contents in any form is prohibited other than the following:<br>

                    You may print or download to a local hard disk extracts for your personal and non-commercial use only you may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material
                    <br>
                    You may not, except with our express written permission, distribute or commercially exploit the content. Nor may you transmit it or store it in any other website or other form of electronic retrieval system.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details Area -->



@endsection
