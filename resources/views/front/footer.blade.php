 <!-- Start Footer Area -->
 <footer class="footer-area ds-footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <a href="index.html" class="logo">
                        <img src="{{asset('theme/assets/img/logo/Skyline-white-logo.png')}}" alt="logo">
                    </a>
                    <p>
                        Skyline public relations agency is a top leading public relations and corporate branding consultancy firm that focuses on positioning organizations, individuals’ , brands and businesses in the corporate world. We believe in creating compelling stories that are impossible to forget.
                    </p>
                    <ul class="social-link">
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3>Resources</h3>

                    <ul class="footer-links-list">
                        <li><a href="#">Coporate PR</a></li>
                        <li><a href="#">Sports PR</a></li>
                        <li><a href="#">Entertainment PR</a></li>
                        <li><a href="#">PR Academy for Entrepreneurs</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3>Sectors</h3>
                    <?php
                        $Sectors = DB::table('sectors')->inRandomOrder()->limit('6')->get(); $counter = 1;
                    ?>
                    <ul class="footer-links-list">
                        @foreach ($Sectors as $sector)
                        <li><a href="#">{{$sector->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3>Support</h3>

                    <ul class="footer-links-list">
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms & uses</a></li>
                        <li><a href="#">Support center</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget ps-5">
                    <h3>Address</h3>

                        <ul class="footer-contact-info">
                            <li><i class='bx bx-map'></i>Chalbi Condominiums, Ring Road, Kilimani, Suite 5c</li>
                            <li><i class='bx bx-phone-call'></i><a href="tel:+254 (71) 076 0015">+254 (71) 076 0015</a></li>
                            <li><i class='bx bx-envelope'></i>
                                    <a href="">
                                        <span>info@skylinepublicrelations.com</span>
                                    </a>
                            </li>
                            <li><i class='bx bxs-inbox'></i><a href="tel:+254 (71) 076 0015">+254 (71) 076 0015</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-area">
        <p>© Skyline Group Limited All Rights Reserved
            {{-- | Powered By <a href="https://designekta.com/" target="_blank">Designekta Studios</a> --}}
        </p>
    </div>
    <div class="shape16"><img src="{{asset('theme/assets/img/shape/shape16.png')}}" alt="image"></div>
</footer>
<!-- End Footer Area -->
