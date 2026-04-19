@extends('frontend.layouts.app')
@section('title', 'GSG Web Soft | About Us')
@section('content')
    <style>
        .service-icon {
            width: 80px;
            height: 80px;
            background: #f4f7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .service-icon i {
            font-size: 35px;
            color: #2d6cdf;
        }

        .ht-box-images:hover .service-icon {
            background: #2d6cdf;
        }

        .ht-box-images:hover .service-icon i {
            color: #fff;
        }
        .fun-fact__count.counter {
            color: #fff !important;
        }
        h6.fun-fact__text {
            color: #fff;
        }
    </style>
    <div class="about-banner-wrap banner-space about-us-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="about-banner-content text-center">

                        <!-- Small Tagline -->
                        <h6 class="text-white mb-10">Welcome to GSG Websoft</h6>

                        <!-- Main Heading -->
                        <h1 class="mb-15 text-white">
                            Smart Digital Solutions for Your Business Growth
                        </h1>

                        <!-- Description -->
                        <h5 class="font-weight--normal text-white">
                            GSG Websoft delivers powerful web development, software solutions,
                            SMS ERP systems, and digital services to help businesses grow,
                            automate processes, and achieve success in the digital world.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-large-images-wrapper  Start =============-->
    <div class="feature-large-images-wrapper section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20">Our company</h6>
                        <h3 class="heading">
                            Delivering smart ERP, web & mobile solutions <br />
                            to accelerate your <span class="text-color-primary">business success</span>
                        </h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="cybersecurity-about-box section-space--pb_70">
                <div class="row">
                    <div class="col-lg-4 offset-lg-1">
                        <div class="modern-number-01">
                            <h2 class="heading me-5"><span class="mark-text">10</span>Years’ Experience in IT</h2>
                            <h6 class="heading mt-30">More About Our Success Stories</h6>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <div class="cybersecurity-about-text">
                            <div class="text">
                                At GSG WebSoft, we provide end-to-end IT solutions including web development, mobile
                                applications, and customized ERP systems. Our expertise in Inventory Management, School
                                Management (SMS ERP), and Learning Management Systems (LMS) helps businesses and
                                institutions automate processes, enhance efficiency, and achieve digital transformation with
                                reliable and scalable technology.
                            </div>
                            <div class="button-text">
                                <a href="#" class="btn-text">
                                    Discover now
                                    <span class="button-icon ml-1">
                                        <i class="fas fa-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="feature-images__six">
                        <div class="row">

                            <!-- Inventory ERP -->
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-images style-06 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fas fa-boxes"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">Inventory ERP</h5>
                                            <div class="text">
                                                Manage stock, purchases, sales, and reports efficiently with our smart
                                                Inventory ERP system.
                                            </div>
                                            <a href="#" class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- School Management -->
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-images style-06 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fas fa-school"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">School ERP</h5>
                                            <div class="text">
                                                Complete school management system to handle students, fees, attendance,
                                                exams, and communication.
                                            </div>
                                            <a href="#" class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Udhar ERP -->
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-images style-06 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">Udhar ERP</h5>
                                            <div class="text">
                                                Track customer credit, manage udhar accounts, and monitor payments easily
                                                with our Udhar ERP system.
                                            </div>
                                            <a href="#" class="box-images-arrow">
                                                <span class="button-text">Discover now</span>
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_60">
                        Smart solutions to simplify your business operations.
                        <a href="#contact">Get started today!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-large-images-wrapper  End =============-->

    <!--========= About Resources Wrapper Start ===========-->
    <div class="about-resources-wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="resources-left-box">
                        <div class="resources-inner">

                            <h6 class="sub-title mb-20">Our Solutions</h6>

                            <h3 class="heading">
                                Explore our powerful
                                <span class="text-color-primary">ERP & Software Solutions</span>
                            </h3>

                            <div class="text mt-3">
                                Discover how GSG WebSoft helps businesses and schools manage operations with
                                Inventory ERP, School Management (SMS ERP), and Udhar ERP systems.
                            </div>

                            <div class="button mt-30">
                                <a href="#contact" class="ht-btn ht-btn-md">
                                    Get Free Demo
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="resources-right-box">
                        <div class="resources-right-inner text-center">
                            <div class="resources-images">
                                <img class="img-fluid" src="{{ asset('frontend/images/hero/home-reputable-success.webp') }}"
                                    alt="GSG WebSoft ERP Solutions" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--========= About Resources Wrapper End ===========-->
    <!--========= About Delivering Wrapper Start ===========-->
    <div class="about-delivering-wrapper section-space--ptb_100">
        <div class="container">

            <!-- Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_20">
                        <h3 class="heading">
                            We deliver smart & reliable <br />
                            <span class="text-color-primary">digital solutions</span> for your business.
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Left Side -->
                <div class="col-lg-6">
                    <div class="delivering-optimal-wrap">

                        <!-- Inventory ERP -->
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Inventory ERP Solutions</h5>
                                <div class="desc">
                                    Manage stock, sales, purchases, and reports efficiently with our powerful Inventory ERP
                                    designed for business automation.
                                </div>
                            </div>
                        </div>

                        <!-- School Management -->
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">School Management (SMS ERP)</h5>
                                <div class="desc">
                                    Simplify school operations with features like student management, fees, attendance,
                                    exams, and real-time communication.
                                </div>
                            </div>
                        </div>

                        <!-- Udhar ERP -->
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Udhar ERP System</h5>
                                <div class="desc">
                                    Easily manage customer credit (udhar), track payments, and maintain clear financial
                                    records with our smart solution.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-lg-6">
                    <div class="delivering-optimal-wrap">

                        <!-- Website Development -->
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Website Development</h5>
                                <div class="desc">
                                    We create modern, responsive, and high-performance websites to build your online
                                    presence and grow your business.
                                </div>
                            </div>
                        </div>

                        <!-- Mobile App -->
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Android App Development</h5>
                                <div class="desc">
                                    Build scalable and user-friendly mobile applications to connect with your customers
                                    anytime, anywhere.
                                </div>
                            </div>
                        </div>

                        <!-- Custom Software -->
                        <div class="list-item">
                            <div class="marker"></div>
                            <div class="title-wrap">
                                <h5 class="title">Custom Software Solutions</h5>
                                <div class="desc">
                                    We develop tailored software solutions based on your business needs to improve
                                    efficiency and productivity.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--========= About Delivering Wrapper End ===========-->
    <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
        <div class="container">
            <div class="row text-center">

                <div class="col-md-4">
                    <div class="fun-fact--four">
                        <div class="icon mb-2"><i class="far fa-smile-beam"></i></div>
                        <div class="fun-fact__count counter">30</div>
                        <h6 class="fun-fact__text">Happy Clients</h6>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fun-fact--four">
                        <div class="icon mb-2"><i class="far fa-folder"></i></div>
                        <div class="fun-fact__count counter">40</div>
                        <h6 class="fun-fact__text">Products</h6>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fun-fact--four">
                        <div class="icon mb-2"><i class="far fa-user"></i></div>
                        <div class="fun-fact__count counter">10</div>
                        <h6 class="fun-fact__text">Years of Experience</h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--=========== fun fact Wrapper End ==========-->
    <!--====================  testimonial section ====================-->
    <div class="testimonial-slider-area section-space--pt_100 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Heading -->
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20">Testimonials</h6>
                        <h3 class="heading">
                            What our clients say about 
                            <span class="text-color-primary">GSG WebSoft</span>
                        </h3>
                    </div>

                    <div class="testimonial-slider">
                        <div class="swiper-container testimonial-slider__container">
                            <div class="swiper-wrapper testimonial-slider__wrapper">

                                <!-- Testimonial 1 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__one wow move-up">
                                        <div class="testimonial-slider--info">

                                            <div class="testimonial-slider__media">
                                                <img src="{{ asset('frontend/images/testimonial/user1.png') }}"
                                                    class="img-fluid" alt="" />
                                            </div>

                                            <div class="testimonial-slider__author">
                                                <div class="testimonial-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="name">Rohit Sharma</h6>
                                                    <span class="designation">Business Owner</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider__text">
                                            GSG WebSoft’s Inventory ERP has completely streamlined our stock and billing process. It’s simple, fast, and very reliable.
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 2 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__one wow move-up">
                                        <div class="testimonial-slider--info">

                                            <div class="testimonial-slider__media">
                                                <img src="{{ asset('frontend/images/testimonial/user2.png') }}"
                                                    class="img-fluid" alt="" />
                                            </div>

                                            <div class="testimonial-slider__author">
                                                <div class="testimonial-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="name">Neha Verma</h6>
                                                    <span class="designation">School Administrator</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider__text">
                                            The School Management (SMS ERP) system is very helpful. Managing students, fees, and attendance has become much easier.
                                        </div>
                                    </div>
                                </div>

                                <!-- Testimonial 3 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__one wow move-up">
                                        <div class="testimonial-slider--info">

                                            <div class="testimonial-slider__media">
                                                <img src="{{ asset('frontend/images/testimonial/user3.png') }}"
                                                    class="img-fluid" alt="" />
                                            </div>

                                            <div class="testimonial-slider__author">
                                                <div class="testimonial-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="name">Amit Jain</h6>
                                                    <span class="designation">Retail Shop Owner</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider__text">
                                            Udhar ERP is a game changer for tracking customer credits. Now I can manage all payments and balances easily.
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial section  ====================-->
    <!--============ Contact Us Area Start =================-->
    <div class="contact-us-area infotechno-contact-us-bg section-space--pt_100">
        <div class="container">
            <div class="row align-items-center">

                <!-- Image -->
                <div class="col-lg-7">
                    <div class="image">
                        <img class="img-fluid"
                            src="{{ asset('frontend/images/hero/home-reputable-success.webp') }}"
                            alt="GSG WebSoft">
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4 ms-auto">
                    <div class="contact-info style-two text-left">

                        <!-- Rating -->
                        <div class="contact-info-title-wrap text-center">
                            <h3 class="heading mb-10">4.9/5.0</h3>

                            <div class="ht-star-rating lg-style">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>

                            <p class="sub-text">
                                Trusted by 30+ clients for ERP & software solutions
                            </p>
                        </div>

                        <!-- Contact List -->
                        <div class="contact-list-item">

                            <!-- Phone -->
                            <a href="tel:+919829507344" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Call us now</h6>
                                            <div class="text">+91 9829507344</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <!-- Email -->
                            <a href="mailto:gsgwebsoft@gmail.com" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Email us</h6>
                                            <div class="text">gsgwebsoft@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--============ Contact Us Area End =================-->
@endsection
