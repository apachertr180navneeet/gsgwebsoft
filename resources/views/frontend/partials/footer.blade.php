<div class="footer-area-wrapper black-bg">
    <div class="footer-area section-space--ptb_80">
        <div class="container">
            <div class="row footer-widget-wrapper border-bottom">
                <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20 text-white">Company</h6>
                    <ul class="footer-widget__list">
                        <li><a href="{{ route('front.about') }}" class="hover-style-link text-white">About us</a></li>
                        <li><a href="{{ route('front.services') }}" class="hover-style-link text-white">Our services</a></li>
                        <li><a href="{{ route('front.contact') }}" class="hover-style-link text-white">Contact</a></li>
                        <li><a href="{{ route('front.contact') }}" class="hover-style-link text-white">Book a consultation</a></li>
                    </ul>

                    <ul class="list ht-social-networks solid-rounded-icon mt-25">
                        <li class="item">
                            <a href="#" aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary text-white">
                                <i class="fab fa-twitter social-link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary text-white">
                                <i class="fab fa-facebook-f social-link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary text-white">
                                <i class="fab fa-instagram social-link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" aria-label="LinkedIn" class="social-link hint--bounce hint--top hint--primary text-white">
                                <i class="fab fa-linkedin social-link-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20 text-white">IT Services</h6>
                    <ul class="footer-widget__list">
                        <li><a href="{{ route('front.services') }}" class="hover-style-link text-white">Managed IT</a></li>
                        <li><a href="{{ route('front.services') }}" class="hover-style-link text-white">IT Support</a></li>
                        <li><a href="{{ route('front.services') }}" class="hover-style-link text-white">IT Consultancy</a></li>
                        <li><a href="{{ route('front.services') }}" class="hover-style-link text-white">Cloud Computing</a></li>
                        <li><a href="{{ route('front.services') }}" class="hover-style-link text-white">Cyber Security</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20 text-white">Quick links</h6>
                    <ul class="footer-widget__list">
                        <li><a href="{{ route('front.home') }}" class="hover-style-link text-white">Home</a></li>
                        <li><a href="{{ route('front.about') }}" class="hover-style-link text-white">Why choose us</a></li>
                        <li><a href="{{ route('front.services') }}" class="hover-style-link text-white">Solutions</a></li>
                        <li><a href="{{ route('front.contact') }}" class="hover-style-link text-white">Where to find us</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20 text-white">Support</h6>
                    <ul class="footer-widget__list">
                        <li><a href="{{ route('front.contact') }}" class="hover-style-link text-white">Forum support</a></li>
                        <li><a href="{{ route('front.contact') }}" class="hover-style-link text-white">Help & FAQ</a></li>
                        <li><a href="{{ route('front.contact') }}" class="hover-style-link text-white">Contact us</a></li>
                        <li><a href="{{ route('front.contact') }}" class="hover-style-link text-white">Pricing and plans</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <div class="footer-widget__title section-space--mb_50"></div>
                    <ul class="footer-widget__list">
                        <li>
                            <a href="{{ route('front.contact') }}" class="image_btn" aria-label="Google play button">
                                <img class="img-fluid" src="{{ asset('frontend/images/icons/aeroland-button-google-play.webp') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.contact') }}" class="image_btn" aria-label="App store button">
                                <img class="img-fluid" src="{{ asset('frontend/images/icons/aeroland-button-app-store.webp') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area section-space--pb_30 small-mt__30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <div class="footer-widget__logo mb-30">
                        <img src="{{ asset('frontend/images/logo/gsglogo167.png') }}" class="img-fluid" alt="Mitech footer logo">
                    </div>
                    <span class="copyright-text text-white">&copy; {{ date('Y') }} Mitech. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
</div>
