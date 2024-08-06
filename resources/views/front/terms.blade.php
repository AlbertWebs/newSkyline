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
                <div class="it-blog-details-desc">

                    <div class="blog-details-content">

                       <!-- panels Starts -->
                       <div class="panels panels-default">
                        <!-- panels Heading Starts -->
                        <div class="panels-heading">
                            <h4 class="panels-title">
                                <a data-toggle="collapse-one" data-parent="#accordion" href="#collapse-one1">
                                    Introduction
                                </a>
                            </h4>
                        </div>
                        <!-- panels Heading Ends -->
                        <!-- panels Content Starts -->
                        <div id="collapse-one1" class="panels-collapse-one collapse-one in">
                            <div class="panels-body">
                                It is highly recommended that you read these Terms and Conditions carefully before using the skylinepublicrelations.com website operated by Skyline Public Relations.. Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service. By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms and Conditions agreement for Skyline Public Relations. has been created by skylinepublicrelations.com
                            </div>
                        </div>
                        <!-- panels Content Starts -->
                    </div>
                    <!-- panels Ends -->
                    <!-- panels Starts -->
                    <div class="panels panels-default">
                        <!-- panels Heading Starts -->
                        <div class="panels-heading">
                            <h4 class="panels-title">
                                <a class="collapse-oned" data-toggle="collapse-one" data-parent="#accordion" href="#collapse-one2">
                                    Links To Other Web Sites
                                </a>
                            </h4>
                        </div>
                        <!-- panels Heading Ends -->
                        <!-- panels Content Starts -->
                        <div id="collapse-one2" class="panels-collapse-one collapse-one">
                            <div class="panels-body">
                                Our Service may contain links to third-party web sites or services that are not owned or controlled by Skyline Public Relations.. www.skylinepublicrelations.com has no control over and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that www.skylinepublicrelations.com shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services. We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.It is highly recommended that you read these Terms and Conditions carefully before using the skylinepublicrelations.com website operated by Skyline Public Relations.. Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service. By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms and Conditions agreement for Skyline Public Relations. has been created by skylinepublicrelations.com
                            </div>
                        </div>
                        <!-- panels Content Starts -->
                    </div>
                    <!-- panels Ends -->
                    <!-- panels Starts -->
                    <div class="panels panels-default">
                        <!-- panels Heading Starts -->
                        <div class="panels-heading">
                            <h4 class="panels-title">
                                <a class="collapse-oned" data-toggle="collapse-one" data-parent="#accordion" href="#collapse-one3">
                                   Changes
                                </a>
                            </h4>
                        </div>
                        <!-- panels Heading Ends -->
                        <!-- panels Content Starts -->
                        <div id="collapse-one3" class="panels-collapse-one collapse-one">
                            <div class="panels-body">
                                We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion. By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.
                            </div>
                        </div>
                        <!-- panels Content Starts -->
                    </div>
                    <!-- panels Ends -->
                    <!-- panels Starts -->
                    <div class="panels panels-default">
                        <!-- panels Heading Starts -->
                        <div class="panels-heading">
                            <h4 class="panels-title">
                                <a class="collapse-oned" data-toggle="collapse-one" data-parent="#accordion" href="#collapse-one4">
                                    Contact
                                </a>
                            </h4>
                        </div>
                        <!-- panels Heading Ends -->
                        <!-- panels Content Starts -->
                        <div id="collapse-one4" class="panels-collapse-one collapse-one">
                            <div class="panels-body">If you have any questions about these Terms, please contact us through info@skylinepublicrelations.com</div>
                        </div>
                        <!-- panels Content Starts -->
                    </div>
                    <!-- panels Ends -->


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Details Area -->



@endsection
