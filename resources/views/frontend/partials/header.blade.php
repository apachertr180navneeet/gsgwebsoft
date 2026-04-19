<div class="header-area header-area--default">
    <div class="header-bottom-wrap header-sticky">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header default-menu-style position-relative">
                        <div class="header__logo">
                            <a href="{{ route('front.home') }}">
                                <img
                                    src="{{ asset('frontend/images/logo/gsglogo320.png') }}"
                                    aria-label="Mitech Logo"
                                    class="img-fluid"
                                    alt="Mitech logo"
                                >
                            </a>
                        </div>

                        <div class="header-midle-box">
                            <div class="header-bottom-wrap d-md-block d-none">
                                <div class="header-bottom-inner">
                                    <div class="header-bottom-left-wrap">
                                        <div class="header__navigation d-none d-xl-block">
                                            <nav class="navigation-menu primary--menu">
                                                <ul>
                                                    <li><a href="{{ route('front.home') }}"><span>Home</span></a></li>
                                                    <li><a href="#about"><span>About</span></a></li>
                                                    <li><a href="#services"><span>Services</span></a></li>
                                                    <li><a href="#contact"><span>Contact</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-right-box">
                            <div class="header-right-inner" id="hidden-icon-wrapper">
                                <div class="header-button ms-4">
                                    <a href="#contact" class="ht-btn ht-btn-md">Get Consultation</a>
                                </div>
                                <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
