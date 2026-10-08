@extends('frontend.layouts.app')

@section('title', 'GSG Web Soft | Home')

@section('content')

<style>
    :root {
        --primary-color: #2d6cdf;
        --dark-color: #0b1c39;
    }

    body {
        color: #333;
    }

    .heading {
        color: var(--dark-color);
        font-weight: 700;
    }

    .text-color-primary {
        color: var(--primary-color);
    }

    .btn-primary {
        background: var(--primary-color);
        border: none;
    }

    .btn-primary:hover {
        background: #1b4fc1;
    }

    /* HERO */
    .modern-it-company-hero {
        padding: 100px 0;
    }

    /* SERVICES */
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
        font-size: 32px;
        color: var(--primary-color);
    }

    .ht-box-images {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        transition: 0.3s;
    }

    .ht-box-images:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    .ht-box-images:hover .service-icon {
        background: var(--primary-color);
    }

    .ht-box-images:hover .service-icon i {
        color: #fff;
    }

    /* MOBILE */
    @media (max-width: 768px) {
        .heading {
            font-size: 28px;
        }

        .modern-it-company-hero {
            text-align: center;
        }
    }
    .headingtest{
        color: #2d6cdf;
    }
</style>

<!-- HERO -->
<div class="modern-it-company-top-area" id="home">
    <div class="modern-it-company-hero">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT -->
                <div class="col-lg-6">
                    <h1 class="heading">
                        Build Smart Solutions with 
                        <span class="text-color-primary">GSG WebSoft</span>
                    </h1>

                    <p class="mt-3">
                        We build websites, Android apps, and ERP systems that help businesses grow faster.
                    </p>

                    <a href="#contact" class="btn btn-primary mt-3">
                        Get Free Consultation
                    </a>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('frontend/images/hero/home-reputable-success.webp') }}" 
                         class="img-fluid" alt="GSG WebSoft">
                </div>

            </div>
        </div>
    </div>
</div>

<!-- FUN FACT -->
<div class="fun-fact-wrapper bg-gray section-space--pb_30 section-space--pt_60">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-4">
                <h2>30+</h2>
                <p>Happy Clients</p>
            </div>

            <div class="col-md-4">
                <h2>40+</h2>
                <p>Projects</p>
            </div>

            <div class="col-md-4">
                <h2>10+</h2>
                <p>Years Experience</p>
            </div>

        </div>
    </div>
</div>

<!-- SERVICES -->
<div class="feature-images-wrapper section-space--ptb_100" id="services">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="heading">
                Our <span class="text-color-primary">IT Services</span>
            </h2>
        </div>

        <div class="row">

            <!-- SERVICE -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="ht-box-images text-center">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h5>Website Development</h5>
                    <p>Fast, responsive & SEO-friendly websites to grow your business.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="ht-box-images text-center">
                    <div class="service-icon">
                        <i class="fab fa-android"></i>
                    </div>
                    <h5>Android Apps</h5>
                    <p>Scalable mobile apps with modern UI & performance.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="ht-box-images text-center">
                    <div class="service-icon">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <h5>Inventory ERP</h5>
                    <p>Manage stock, billing & reports efficiently.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="ht-box-images text-center">
                    <div class="service-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <h5>School ERP</h5>
                    <p>Attendance, fees, exams & SMS system.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="ht-box-images text-center">
                    <div class="service-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h5>LMS System</h5>
                    <p>Online learning platform for institutes.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="ht-box-images text-center">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h5>Custom Software</h5>
                    <p>Tailored ERP & business automation tools.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- PROJECTS -->
<div class="projects-wrapper section-space--pb_100">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="heading">Our Projects</h2>
        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <img src="{{ asset('frontend/images/projects/project1.png') }}" class="img-fluid">
            </div>

            <div class="col-md-4 mb-4">
                <img src="{{ asset('frontend/images/projects/project2.png') }}" class="img-fluid">
            </div>

            <div class="col-md-4 mb-4">
                <img src="{{ asset('frontend/images/projects/project3.png') }}" class="img-fluid">
            </div>

        </div>
    </div>
</div>

<!-- CONTACT -->
<div class="contact-us-section-wrappaer section-space--ptb_120 bg-dark text-white" id="contact">
    <div class="container text-center">

        <h3 class="headingtest">Let's Build Your Next Project 🚀</h3>

        <p class="mt-3">
            Call us or connect for ERP, apps & website solutions.
        </p>

        <h2>
            <a href="tel:+919829507344" class="text-white">+91 9829507344</a>
        </h2>

        <a href="#" class="btn btn-primary mt-3">Contact Now</a>

    </div>
</div>

@endsection