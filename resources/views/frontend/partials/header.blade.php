<style>
    /* HEADER */
    .header-area {
        background: #fff;
        padding: 10px 0;
    }

    /* MENU */
    .navigation-menu ul {
        list-style: none;
    }

    .navigation-menu ul li a {
        text-decoration: none;
        font-weight: 500;
        color: #333;
    }

    /* BUTTON */
    .ht-btn {
        background: #3b6ff5;
        color: #fff;
        padding: 10px 18px;
        border-radius: 6px;
        text-decoration: none;
    }

    /* MOBILE TOGGLE ICON */
    .mobile-navigation-icon {
        width: 30px;
        height: 20px;
        position: relative;
        cursor: pointer;
    }

    .mobile-navigation-icon i,
    .mobile-navigation-icon i::before,
    .mobile-navigation-icon i::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        background-color: #000;
        left: 0;
        transition: 0.3s;
    }

    .mobile-navigation-icon i {
        top: 50%;
        transform: translateY(-50%);
    }

    .mobile-navigation-icon i::before {
        top: -8px;
    }

    .mobile-navigation-icon i::after {
        bottom: -8px;
    }

    /* MOBILE MENU */
    .mobile-menu {
        position: fixed;
        top: 0;
        right: -100%;
        width: 250px;
        height: 100%;
        background: #fff;
        box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        transition: 0.3s;
        z-index: 9999;
    }

    .mobile-menu.active {
        right: 0;
    }

    .mobile-menu ul {
        list-style: none;
        padding: 0;
    }

    .mobile-menu ul li {
        margin-bottom: 15px;
    }

    .mobile-menu ul li a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
    }
</style>

<div class="header-area header-area--default">
    <div class="header-bottom-wrap header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">

                <!-- LOGO -->
                <div class="col-6 col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('front.home') }}">
                            <img src="{{ asset('frontend/images/logo/gsglogo320.png') }}" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                </div>

                <!-- DESKTOP MENU -->
                <div class="col-lg-8 d-none d-xl-block">
                    <nav class="navigation-menu text-center">
                        <ul class="menu d-flex justify-content-center gap-4 m-0">
                            <li><a href="{{ route('front.home') }}">Home</a></li>
                            <li><a href="{{ route('front.about') }}">About Us</a></li>
                            <li><a href="{{ route('front.services') }}">Services</a></li>
                            <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-6 col-lg-2 text-end">
                    <div class="header-right-box d-flex justify-content-end align-items-center">

                        <!-- BUTTON -->
                        <div class="header-button d-none d-md-block">
                            <a href="{{ route('front.contact') }}" class="ht-btn">Get Consultation</a>
                        </div>

                        <!-- MOBILE TOGGLE -->
                        <div class="mobile-navigation-icon d-xl-none ms-3" id="mobile-menu-trigger">
                            <i></i>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobile-menu">
    <ul>
        <li><a href="{{ route('front.home') }}">Home</a></li>
        <li><a href="{{ route('front.about') }}">About Us</a></li>
        <li><a href="{{ route('front.services') }}">Services</a></li>
        <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
    </ul>
</div>
