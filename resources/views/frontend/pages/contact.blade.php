@extends('frontend.layouts.app')

@section('title', 'Contact Us | GSG WebSoft')

@section('content')

<!--====================  Contact Section Start  ====================-->
<div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6">
                <div class="conact-us-wrap-one mb-30">

                    <h3 class="heading">
                        Let’s build your <br>
                        <span class="text-color-primary">digital solution</span> together
                    </h3>

                    <div class="sub-heading">
                        Get in touch with us for Inventory ERP, School Management (SMS ERP), Udhar ERP, 
                        Website Development, and Mobile Apps. <br><br>
                        We usually respond within <strong>24 hours</strong>.
                    </div>

                    <!-- Contact Quick Info -->
                    <div class="mt-4">
                        <p><i class="fas fa-phone text-primary me-2"></i> +91 9829507344</p>
                        <p><i class="fas fa-envelope text-primary me-2"></i> gsgwebsoft@gmail.com</p>
                    </div>

                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact-form-wrap shadow p-4 rounded bg-white">

                    <form id="contact-form" action="#" method="post">
                        <div class="contact-form">

                            <div class="contact-input">
                                <div class="contact-inner">
                                    <input name="con_name" type="text" placeholder="Your Name *" required>
                                </div>
                                <div class="contact-inner">
                                    <input name="con_email" type="email" placeholder="Your Email *" required>
                                </div>
                            </div>

                            <div class="contact-inner">
                                <input name="con_subject" type="text" placeholder="Subject" required>
                            </div>

                            <div class="contact-inner contact-message">
                                <textarea name="con_message" placeholder="Tell us about your requirement..." required></textarea>
                            </div>

                            <div class="submit-btn mt-20">
                                <button class="ht-btn ht-btn-md" type="submit">
                                    Send Message
                                </button>
                                <p class="form-messege"></p>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!--====================  Contact Section End  ====================-->


<!--====================  Contact Info Cards ====================-->
<div class="contact-us-info-wrappaer section-space--pb_100">
    <div class="container">
        <div class="row text-center">

            <!-- Phone -->
            <div class="col-lg-4 col-md-6">
                <div class="conact-info-wrap mt-30 p-4 shadow rounded bg-white">
                    <div class="icon mb-3"><i class="fas fa-phone fa-2x text-primary"></i></div>
                    <h5 class="heading mb-2">Call Us</h5>
                    <p><a href="tel:+919829507344">+91 9829507344</a></p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-lg-4 col-md-6">
                <div class="conact-info-wrap mt-30 p-4 shadow rounded bg-white">
                    <div class="icon mb-3"><i class="fas fa-envelope fa-2x text-primary"></i></div>
                    <h5 class="heading mb-2">Email Us</h5>
                    <p><a href="mailto:gsgwebsoft@gmail.com">gsgwebsoft@gmail.com</a></p>
                </div>
            </div>

            <!-- Services -->
            <div class="col-lg-4 col-md-6">
                <div class="conact-info-wrap mt-30 p-4 shadow rounded bg-white">
                    <div class="icon mb-3"><i class="fas fa-cogs fa-2x text-primary"></i></div>
                    <h5 class="heading mb-2">Our Services</h5>
                    <p>ERP Solutions, Websites, Mobile Apps</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!--====================  Contact Info End ====================-->


<!--========== CTA Section ============-->
<div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xl-8 col-lg-7">
                <div class="cta-content md-text-center">
                    <h3 class="heading">
                        Transform your business with 
                        <span class="text-color-primary">smart ERP solutions</span>
                    </h3>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <div class="cta-button-group--two text-center">
                    <a href="tel:+919829507344" class="btn btn--white btn-one">
                        <i class="fas fa-phone me-2"></i> Call Now
                    </a>
                    <a href="#contact-form" class="btn btn--secondary btn-two">
                        <i class="fas fa-paper-plane me-2"></i> Get Quote
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!--========== CTA End ============-->

@endsection