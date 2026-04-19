@extends('frontend.layouts.app')

@section('title', 'GSG Web Soft | Home')

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
    </style>
    <div class="modern-it-company-top-area" id="home">
        <!--============ Modern IT Company Hero Start ============-->
        <div class="modern-it-company-hero">
            <div class="container">
                <div class="row align-items-center">

                    <div class="modern-it-company-hero-image">
                        <img src="{{ asset('frontend/images/hero/home-reputable-success.webp') }}" class="img-fluid"
                            alt="GSG WebSoft">
                    </div>

                    <div class="col-lg-10 col-md-10">
                        <div class="modern-it-company-hero-text wow move-up section-space--pt_150">

                            <h1 class="heading">
                                Build Smart Solutions with
                                <mark class="text-color-primary">GSG WebSoft</mark>
                            </h1>

                            <h6 class="sort-dec">
                                We provide powerful Website Development, Android Applications, and Custom ERP Solutions
                                to grow your business digitally.
                            </h6>

                            <div class="book-box">
                                <div class="image">
                                    <img src="{{ asset('frontend/images/icons/green-curve-arrow.webp') }}" class="img-fluid"
                                        alt="">
                                </div>

                                <h5 class="book-text font-weight--bold mb-15">
                                    Get started today with scalable solutions like Inventory ERP, SMS ERP, and LMS ERP
                                    tailored for your business needs.
                                </h5>
                            </div>

                            <div class="modern-it-company-form-wrap">
                                <form id="contact-form" action="#" method="post">

                                    <div class="modern-it-company-contact-form-hero">
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="contact-inner">
                                                    <input name="con_email" type="email" placeholder="Enter your email *">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="contact-select">
                                                    <div class="form-item contact-inner">
                                                        <span class="inquiry">
                                                            <select id="Visiting" name="Visiting">
                                                                <option disabled selected>Select Service</option>
                                                                <option value="Website Development">Website Development
                                                                </option>
                                                                <option value="Android App Development">Android App
                                                                    Development</option>
                                                                <option value="Inventory ERP">Inventory ERP</option>
                                                                <option value="SMS ERP">SMS ERP</option>
                                                                <option value="LMS ERP">LMS ERP</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="button-wrap">
                                                    <button type="submit" class="ht-btn ht-btn-md ht-btn-full">
                                                        Get Free Consultation
                                                    </button>
                                                    <p class="form-messege"></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--============ Modern It Company Hero End ============-->
    </div>

    <!--=========== fun fact Wrapper Start ==========-->
    <div class="fun-fact-wrapper bg-gray section-space--pb_30 section-space--pt_60">
        <div class="container">
            <div class="row">

                <!-- Happy Clients -->
                <div class="col-md-4 col-sm-6">
                    <div class="fun-fact--four text-center">
                        <div class="icon">
                            <i class="far fa-smile-beam"></i>
                        </div>
                        <div class="fun-fact-text">
                            <div class="fun-fact__count counter">30</div>
                            <h6 class="fun-fact__text">Happy Clients</h6>
                        </div>
                    </div>
                </div>

                <!-- Products -->
                <div class="col-md-4 col-sm-6">
                    <div class="fun-fact--four text-center">
                        <div class="icon">
                            <i class="far fa-folder"></i>
                        </div>
                        <div class="fun-fact-text">
                            <div class="fun-fact__count counter">40</div>
                            <h6 class="fun-fact__text">Products</h6>
                        </div>
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-4 col-sm-6">
                    <div class="fun-fact--four text-center">
                        <div class="icon">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="fun-fact-text">
                            <div class="fun-fact__count counter">10</div>
                            <h6 class="fun-fact__text">Years of Experience</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--=========== fun fact Wrapper End ==========-->

    <!--===========  Feature Images Wrapper Start =============-->
    <div class="feature-images-wrapper bg-gradient section-space--ptb_100" id="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h2 class="heading">
                            Our Professional <br>
                            <span class="text-color-primary">IT Services & Solutions</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="image-l-r-box">
                <div class="row">
                    <div class="col image-box-area">
                        <div class="row image-box-boder-box">

                            <!-- Website Development -->
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="service-icon">
                                            <i class="fas fa-laptop-code"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Website Development</h6>
                                            <div class="text">
                                                We create modern, responsive, and high-performance websites tailored to your
                                                business needs.
                                            </div>
                                            <div class="more-arrow-link">
                                                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Android App Development -->
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="service-icon">
                                            <i class="fab fa-android"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Android App Development</h6>
                                            <div class="text">
                                                Build scalable and user-friendly Android applications to grow your mobile
                                                presence.
                                            </div>
                                            <div class="more-arrow-link">
                                                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Inventory ERP -->
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="service-icon">
                                            <i class="fas fa-boxes"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Inventory ERP</h6>
                                            <div class="text">
                                                Manage stock, orders, and business operations efficiently with our Inventory
                                                ERP system.
                                            </div>
                                            <div class="more-arrow-link">
                                                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- SMS ERP -->
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="service-icon">
                                            <i class="fas fa-school"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">SMS ERP (School Management System)</h6>
                                            <div class="text">
                                                Advanced school management software to manage students, fees, attendance,
                                                exams, and administration easily.
                                            </div>
                                            <div class="more-arrow-link">
                                                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- LMS ERP -->
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="service-icon">
                                            <i class="fas fa-book-open"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">LMS ERP</h6>
                                            <div class="text">
                                                Smart learning management system for schools, institutes, and training
                                                centers.
                                            </div>
                                            <div class="more-arrow-link">
                                                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Custom Software -->
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="service-icon">
                                            <i class="fas fa-cogs"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Custom Software Development</h6>
                                            <div class="text">
                                                We build custom ERP and business software solutions tailored to your
                                                requirements.
                                            </div>
                                            <div class="more-arrow-link">
                                                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="talk-message-box-wrapper section-space--mt_80 small-mt__60">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="talk-message-box">
                            <div class="message-icon">
                                <i class="far fa-comment-alt"></i>
                            </div>
                            <div class="talk-message-box-content">
                                <h6 class="heading">
                                    Let’s build your digital solution with GSG WebSoft 🚀
                                </h6>
                                <a href="#contact" class="ht-btn ht-btn-sm">Let's talk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--===========  Feature Images Wrapper End =============-->

    <!--===========  Projects wrapper Start =============-->
    <div class="projects-wrapper section-space--pb_100" id="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h2 class="heading">We stand out for some reasons.</h2>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="projects-wrap swiper-container projects-slider__three">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="http://shrilalitrealestate.com/" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend/images/projects/project1.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                Modern Real Estate Platform for Property Management & Client Engagement
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="https://dsprojectsltd.co.uk/" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend/images/projects/project2.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                International Construction Project with Advanced Planning & Execution
                                                Systems
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend/images/projects/project3.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                Smart Business Solutions with ERP Integration for Efficient Operations
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid"
                                                src="{{ asset('frontend/images/projects/project4.png') }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                Stocksathi is a Laravel-based inventory and business management system that
                                                streamlines stock, sales, purchases, and analytics through a centralized
                                                dashboard.
                                            </h5>

                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-black swiper-pagination-project mt_20">
                        </div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_40">
                        Never underestimate your potentials.
                        <a href="#">
                            It all started here.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  Projects wrapper End =============-->

    <!--====================  Contact us Section Start ====================-->
    <div class="contact-us-section-wrappaer processing-contact-us-bg section-space--ptb_120" id="contact">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading text-white">
                            Need help with your business software or digital solutions?
                        </h3>

                        <div class="sub-heading text-white">
                            Connect with our expert team for customized ERP, SMS solutions,
                            and school management systems.<br>
                            We provide smart, scalable, and reliable IT services to grow your business.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-info-two text-center">
                        <div class="icon">
                            <span class="fas fa-phone"></span>
                        </div>

                        <h6 class="heading font-weight--reguler">Talk to our experts</h6>

                        <h2 class="call-us">
                            <a href="tel:+919829507344">+91 9829507344</a>
                        </h2>

                        <div class="contact-us-button mt-20">
                            <a href="#contact" class="btn btn--secondary">Get Free Consultation</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--====================  Contact us Section End  ====================-->

    <!--==================== Who We Work Area Start ====================-->
    <div class="claim-to-excel-area section-space--ptb_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h2 class="heading">Who We Work With</h2>
                        <p class="text mt-3">We collaborate with a wide range of clients to deliver smart digital
                            solutions.</p>
                    </div>
                    <!-- section-title-wrap End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="claim-grid-group">

                        <!-- 01 -->
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-one">
                                <div class="icon">
                                    <span class="icon-basic-case"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">01</h6>
                                    <h5 class="heading">Businesses</h5>
                                    <p class="text">We help small and medium businesses streamline operations with custom
                                        software and ERP solutions.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 02 -->
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-two">
                                <div class="icon">
                                    <span class="icon-basic-lightbulb"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">02</h6>
                                    <h5 class="heading">Startups</h5>
                                    <p class="text">From idea to execution, we support startups with scalable technology
                                        and innovative digital products.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 03 -->
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-three">
                                <div class="icon">
                                    <span class="icon-basic-book"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">03</h6>
                                    <h5 class="heading">Schools & Institutes</h5>
                                    <p class="text">We provide school management systems and SMS ERP solutions to
                                        simplify administration and communication.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 04 -->
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-four">
                                <div class="icon">
                                    <span class="icon-basic-world"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">04</h6>
                                    <h5 class="heading">Enterprises</h5>
                                    <p class="text">We deliver robust enterprise-grade solutions tailored to complex
                                        workflows and large-scale operations.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 05 -->
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-five">
                                <div class="icon">
                                    <span class="icon-basic-user"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">05</h6>
                                    <h5 class="heading">Individuals</h5>
                                    <p class="text">We also work with individuals for custom projects, personal apps, and
                                        digital solutions.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="row row--10">
                <div class="col-lg-8">
                    <div class="success-stories-wrap mt-40">
                        <div class="modern-number-01 me-5">
                            <h2 class="heading"><span class="mark-text">10+</span></h2>
                            <p>YEARS EXPERIENCE</p>
                        </div>
                        <div class="content">
                            <h4 class="heading mb-20">Trusted by clients <br> across industries</h4>
                            <a href="#contact" class="ht-btn ht-btn-md">
                                <i class="far fa-comment-alt me-2"></i> Let's talk
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="modern-it-newsletters-wrap text-center mt-40">
                        <div class="section-title">
                            <h6 class="heading mb-30">Stay updated with our latest solutions & insights.</h6>
                        </div>
                        <form action="#">
                            <div class="contact-inner">
                                <input name="con_email" type="email" placeholder="Your e-mail">
                            </div>
                            <div class="button-wrap mb-15">
                                <a href="#" class="ht-btn ht-btn-md ht-btn-full">Subscribe</a>
                            </div>
                            <p>Join our growing community.</p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--==================== Who We Work Area End ====================-->
@endsection
