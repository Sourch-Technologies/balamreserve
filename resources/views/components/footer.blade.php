<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>Balam Investments, LLC.
                                <br> 410 SE 16th Court #214
                                <br>
                                Fort Lauderdale, FL 33316</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+1 (305) 457 9962</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>info@thebalamreserve.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('assets/images/Logo/logo.svg') }}" class="img-fluid" alt="logo"></a>
                        </div>

                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="https://www.facebook.com/thebalamescape/"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="https://www.linkedin.com/in/hart-porsch-24799630/"><i class="fab fa-linkedin linkedin-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('netzero') }}">Netzero-commitment</a></li>
                            <li><a href="{{ asset('location') }}">Location</a></li>
                            <li><a href="{{ route('whybelize') }}">Why Belize</a></li>
                            <li><a href="{{ route('sustainibility') }}">Sustainibility</a></li>
                            <li><a href="{{ route('villas') }}">Villas</a></li>
                            <li><a href="{{ route('subdivision') }}">Subdivision</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('contact') }} ">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    {{-- <div class="footer-widget"> --}}
                        <img src="{{ asset('assets/images/Logo/varena_new.png') }}" alt="">
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                {{-- <div class="col-12"> --}}
                    <div class="copyright-text text-center">
                        <p>Copyright &copy; Balam Reserve, All Right Reserved</p>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</footer>
