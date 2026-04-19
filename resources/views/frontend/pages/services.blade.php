@extends('frontend.layouts.app')

@section('title', 'GSG Web Soft | Services')

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
            margin: 0 auto;
            transition: 0.3s;
        }

        .service-icon i {
            font-size: 30px;
            color: #2d6cdf;
        }

        .ht-box-images:hover .service-icon {
            background: #2d6cdf;
        }

        .ht-box-images:hover .service-icon i {
            color: #fff;
        }

        .ht-box-images {
            height: 100%;
            display: flex;
        }

        .image-box-wrap {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding: 30px 20px;
            background: #fff;
            border-radius: 10px;
            transition: 0.3s;
        }

        .ht-box-images:hover .image-box-wrap {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .image-box-wrap {
            min-height: 260px;
        }

        .image-box-wrap .content {
            text-align: center;
        }
    </style>
    <div class="feature-images-wrapper section-space--ptb_100">
        <div class="container">

            <!-- Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center">
                        <h3 class="heading">
                            Our powerful solutions for your <br>
                            <span class="text-color-primary">business growth & automation</span>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="feature-images__one">
                        <div class="row d-flex align-items-stretch">

                            <!-- Inventory ERP -->
                            <div class="col-lg-4 col-md-6 wow move-up mt-2 mb-2">
                                <div class="ht-box-images style-01 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fas fa-boxes"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">Inventory ERP</h5>
                                            <div class="text">
                                                Manage stock, sales, purchases, and reports efficiently with our smart
                                                Inventory ERP system.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- School Management -->
                            <div class="col-lg-4 col-md-6 wow move-up mt-2 mb-2">
                                <div class="ht-box-images style-01 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fas fa-school"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">School Management (SMS ERP)</h5>
                                            <div class="text">
                                                Complete school management solution for students, fees, attendance, exams,
                                                and communication.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Udhar ERP -->
                            <div class="col-lg-4 col-md-6 wow move-up mt-2 mb-2">
                                <div class="ht-box-images style-01 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fas fa-hand-holding-usd"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">Udhar ERP</h5>
                                            <div class="text">
                                                Track customer credit, manage udhar accounts, and monitor payments easily.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Website Development -->
                            <div class="col-lg-4 col-md-6 wow move-up mt-2 mb-2">
                                <div class="ht-box-images style-01 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fas fa-laptop-code"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">Website Development</h5>
                                            <div class="text">
                                                Modern, responsive, and high-performance websites to grow your online
                                                presence.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Android App -->
                            <div class="col-lg-4 col-md-6 wow move-up mt-2 mb-2">
                                <div class="ht-box-images style-01 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fab fa-android"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">Android App Development</h5>
                                            <div class="text">
                                                Build scalable and user-friendly mobile applications for your business.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Custom Software -->
                            <div class="col-lg-4 col-md-6 wow move-up mt-2 mb-2">
                                <div class="ht-box-images style-01 text-center">
                                    <div class="image-box-wrap">

                                        <div class="service-icon mb-3">
                                            <i class="fas fa-cogs"></i>
                                        </div>

                                        <div class="content">
                                            <h5 class="heading">Custom Software</h5>
                                            <div class="text">
                                                Tailored ERP and business software solutions to improve efficiency and
                                                productivity.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_80">
                        Smart IT solutions to simplify your business.
                        <a href="#contact">Get started today!</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->
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
