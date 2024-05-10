@extends('front.master-pages')

@section('content')
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Contact Us</h1>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Contact Info Area -->
<section class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class='bx bx-map'></i>
                    </div>
                    <div class="icon">
                        <i class='bx bx-map'></i>
                    </div>
                    <h3>Our Address</h3>
                    <p>Chalbi Condominiums, Ring Road, Kilimani, Suite 5c</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class='bx bx-phone-call'></i>
                    </div>
                    <div class="icon">
                        <i class='bx bx-phone-call'></i>
                    </div>
                    <h3>Contact</h3>
                    <p>Mobile: <a href="+254 (71) 076 0015">+254 (71) 076 0015</a></p>
                    <p>E-mail:
                        <a href="mailto:info@skylinepublicrelations.com">
                          <span >info@skylinepublicrelations.com</span>
                        </a>
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-info-box">
                    <div class="back-icon">
                        <i class='bx bx-time-five'></i>
                    </div>
                    <div class="icon">
                        <i class='bx bx-time-five'></i>
                    </div>
                    <h3>Hours of Operation</h3>
                    <p>Monday - Friday: 09:00 - 20:00</p>
                    <p>Sunday & Saturday: 10:30 - 22:00</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Get in Touch</span>
            <h2>Ready to Get Started?<span class="overlay"></span></h2>
            <p>Your email address will not be published. Required fields are marked *</p>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="contact-image" data-tilt>
                    <img src="{{asset('theme/assets/img/contact.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Map Area -->
<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4083624.737387345!2d37.1692338!3d-1.7699422!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4db5b96cfd8edf59%3A0xc3075faccb42dd3!2sSkyline%20Public%20Relations%20and%20Corporate%20Communications%20Agency!5e0!3m2!1sen!2ske!4v1714389731253!5m2!1sen!2ske"></iframe>

</div>
<!-- End Map Area -->
@endsection
