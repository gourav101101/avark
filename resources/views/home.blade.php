@extends('layouts.app')

@section('content')


<style>
    .ai-features-2__item .icon {
        background: linear-gradient(90deg, #d0fc9c 0%, #198754 100%);
    }

    .ai-features-2__item:hover {
        background: linear-gradient(90deg, #d0fc9c 0%, #a0ea71 100%);
    }

    .ai-features-2__item .content .title {
        font-size: 18px;
    }
    
    .brand-1__item img{
        width: 120px;
    }
</style>

<section class="hero">
    <div class="hero__inner" data-background="{{ asset('assets/imgs/home-1/hero/bg.png') }}">
        <img class="shape-6" src="{{ asset('assets/imgs/home-1/hero/shape.png') }}" alt="image">

        <div class="container rr-container-1350">
            <div class="row">

                <div class="col-xl-6">
                    <div class="hero__media">
                        <img class="shape-1" data-aos="zoom-in" data-aos-duration="900"
                            src="{{ asset('assets/imgs/home-1/hero/kp01.png') }}" alt="image">

                        <img class="shape-2 shape-animaiton1" src="{{ asset('assets/imgs/home-1/hero/shape-2.png') }}" alt="">
                        <img class="shape-3 shape-animaiton1" src="{{ asset('assets/imgs/home-1/hero/kp03.png') }}" alt="">
                        <img class="shape-4 shape-animaiton1" src="{{ asset('assets/imgs/home-1/hero/kp02.png') }}" alt="">
                        <img class="shape-5 shape-animaiton1" src="{{ asset('assets/imgs/home-1/hero/card.png') }}" alt="">
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="hero__content" data-aos="fade-right" data-aos-duration="900">

                        <div class="hero__content__author">
                            <ul>
                                <li><img src="{{ asset('assets/imgs/home-1/hero/author-1.png') }}" alt=""></li>
                                <li><img src="{{ asset('assets/imgs/home-1/hero/author-2.png') }}" alt=""></li>
                                <li><img src="{{ asset('assets/imgs/home-1/hero/author-3.png') }}" alt=""></li>
                            </ul>

                            <p>Building the Future of Business Technology</p>
                        </div>

                        <h1 class="title rr-title-anim-2">
                            Build Smart Digital Solutions for Modern Businesses
                        </h1>

                        <p class="desc">
                            We empower organizations with innovative software, ERP systems, CRM solutions, and enterprise technology that streamline operations, enhance productivity, and drive scalable business growth.
                        </p>

                        <div class="hero__content-wrap">
                            <a href="{{ url('contact') }}" class="rr-btn-green">
                                <span class="btn-wrap">
                                    <span class="text-one">Get a Free Consultation</span>
                                    <span class="text-two">Get a Free Consultation</span>
                                </span>
                            </a>

                            <a href="{{ url('service') }}" class="rr-btn-green green-2">
                                <span class="btn-wrap">
                                    <span class="text-one">Explore Our Solutions</span>
                                    <span class="text-two">Explore Our Solutions</span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="brand-1 section-spacing-top-100">
    <div class="container rr-container-1350">
        <div class="section-title__wrapper">
            <h2 class="title rr-title-anim-1">Trusted Technology Partner for Growing Businesses</h2>
        </div>
        <div class="swiper brand-1__active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img src="assets/imgs/home-1/brand/makd.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img src="assets/imgs/home-1/brand/bigrock.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img src="assets/imgs/home-1/brand/amazonwebservices.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img src="assets/imgs/home-1/brand/oracle.png" alt="image">
                    </div>
                </div>
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</section>

<section class="features-1 section-spacing-top-120 rr-ov-hidden">
    <div class="container rr-container-1350">
        <div class="row">
            <div class="col-xl-8">
                <div class="features-1">
                    <div class="features-1__content" data-aos="fade-right" data-aos-duration="900">
                        <div class="section-title__wrapper">
                            <h2 class="sub-title">Avark Digital Systems</h2>
                            <h2 class="title rr-title-anim-1">Transforming Operations with Intelligent Technology</h2>
                            <p class="desc">From enterprise software to custom development, Avark builds smart digital ecosystems that automate workflows, improve efficiency, and empower businesses to scale confidently.</p>

                            <a href="about.html" class="rr-btn-green">
                                <span class="btn-wrap">
                                    <span class="text-one">Discover More</span>
                                    <span class="text-two">Discover More</span>
                                </span>
                            </a>
                        </div>
                        <div class="features-1__shape-1 shape-animaiton1" data-aos="fade-down-left" data-aos-duration="900">
                            <img src="assets/imgs/home-1/features/hand-shape-kuldeep.png" alt="image">
                        </div>
                        <div class="features-1__shape-2 rotate"><img src="assets/imgs/home-1/features/line-shape.png"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="features-1__wrapper">
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="500">
                        <span><img src="assets/imgs/home-1/features/icon-1.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Advanced Technology</h2>
                            <p>Built with secure, scalable, and performance-driven architecture.</p>
                        </div>
                    </div>
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="700">
                        <span><img src="assets/imgs/home-1/features/icon-2.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Enterprise-Ready Systems</h2>
                            <p>Designed to support multi-location, multi-user, and growing businesses.</p>
                        </div>
                    </div>
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="900">
                        <span><img src="assets/imgs/home-1/features/icon-3.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Custom & Flexible Solutions</h2>
                            <p>ERP, CRM, Web, Mobile, and tailor-made software as per your business needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service rr-bg-gray section-spacing rr-ov-hidden">
    <div class="container rr-container-1350">
        <div class="section-title__wrapper text-center" data-aos="fade-up" data-aos-duration="700">
            <h2 class="sub-title">Our Technology Services</h2>
            <h2 class="title rr-title-anim-1">One Platform, Complete Business Solutions</h2>
        </div>
        <div class="swiper service-slide__active" data-aos="fade-up" data-aos-duration="900">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img src="assets/imgs/home-1/service/erp.png" alt="image"></span>
                        <h3 class="title"><a href="service-details.html">ERP System Development</a></h3>
                        <p class="desc">Streamline operations, manage resources efficiently, and gain real-time business insights with our scalable ERP solutions.</p>
                        <span class="service">Service _ 01</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img src="assets/imgs/home-1/service/crm-kp.png" alt="image"></span>
                        <h3 class="title"><a href="service-details.html">CRM Solutions</a></h3>
                        <p class="desc">Improve customer relationships, automate sales processes, and boost engagement with intelligent CRM systems.</p>
                        <span class="service">Service _ 02</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img src="assets/imgs/home-1/service/CustomSoftwareDevelopment-kp.png" alt="image"></span>
                        <h3 class="title"><a href="service-details.html">Custom Software Development</a></h3>
                        <p class="desc">Tailor-made software solutions designed specifically to match your business workflows and operational requirements.</p>
                        <span class="service">Service _ 04</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img src="assets/imgs/home-1/service/WebApplicationDevelopment-kp.png" alt="image"></span>
                        <h3 class="title"><a href="service-details.html">Web Application Development</a></h3>
                        <p class="desc">Secure, responsive, and high-performance web platforms built using modern technologies for scalable growth.</p>
                        <span class="service">Service _ 05</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img src="assets/imgs/home-1/service/mobile-development.png" alt="image"></span>
                        <h3 class="title"><a href="service-details.html">Mobile App Development</a></h3>
                        <p class="desc">User-friendly Android & iOS applications that enhance customer experience and expand your digital reach.</p>
                        <span class="service">Service _ 06</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img src="assets/imgs/home-1/service/cloud-computing-kpm.png" alt="image"></span>
                        <h3 class="title"><a href="service-details.html">Cloud & Data Migration</a></h3>
                        <p class="desc">Smooth and secure migration of legacy systems and business data to modern cloud-based infrastructure.</p>
                        <span class="service">Service _ 07</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img src="assets/imgs/home-1/service/digital-transformation-kpm.png" alt="image"></span>
                        <h3 class="title"><a href="service-details.html">Enterprise Integration Services</a></h3>
                        <p class="desc">Seamlessly integrate ERP, CRM, third-party tools, and APIs into one unified digital ecosystem.</p>
                        <span class="service">Service _ 08</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="service__arrow">
            <button class="service__arrow-prev"> <i class="fa-solid fa-angle-left"></i></button>
            <div class="service-pagination"></div>
            <button class="service__arrow-next"><i class="fa-solid fa-angle-right"></i></button>

        </div>
    </div>
</section>

<section class="ai-features-2 section-spacing fade-wrapper">
    <div class="container rr-container-1350">
        <div class="section-title__wrapper text-center" data-aos="fade-up" data-aos-duration="700">
            <h2 class="sub-title"> Our Products </h2>
            <h2 class="title rr-title-anim-1"> Intelligent Products Built for Business Growth </h2>
        </div>
        <div class="ai-features-2__wrapper fade-top">
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                <div class="icon">
                    <img src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title">Advance Hospital Management System</h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <div class="icon">
                    <img src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title">Inventory or Stock Management System</h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
                <div class="icon">
                    <img src="assets/imgs/icon/ai-features-icon-3.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title">Pathology & Diagnostic Management System </h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                <div class="icon">
                    <img src="assets/imgs/icon/ai-features-icon-4.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title">White Label Practice Management Application </h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <div class="icon">
                    <img src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title">Dialysis Management System </h3>
                </div>
            </div>


            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
                <div class="icon">
                    <img src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title">Real-time data on <br> latest topics</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="choose-us">
    <div class="choose-us__inner section-spacing">
        <div class="container rr-container-1350">
            <div class="row">
                <div class="col-xl-6">
                    <div class="choose-us__content">
                        <div class="section-title__wrapper">
                            <h2 class="sub-title has--green" data-aos="fade-up" data-aos-duration="500">Smarter Way to Run Your Business
                            </h2>
                            <h3 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Powering Growth with Intelligent Technology</h3>
                            <p class="desc" data-aos="fade-up" data-aos-duration="900">Avark delivers secure, scalable, and high-performance software solutions designed to streamline operations, enhance productivity, and accelerate digital transformation. From ERP and CRM systems to custom enterprise applications, we help businesses operate smarter and grow with confidence.</p>

                            <a href="contact.html" class="rr-btn-green has--drk-gren" data-aos="fade-up"
                                data-aos-duration="900">
                                <span class="btn-wrap">
                                    <span class="text-one">Get a Free Consultation</span>
                                    <span class="text-two">Get a Free Consultation</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-us__media" data-aos="fade-up" data-aos-duration="900">
                        <img class="image-1" src="assets/imgs/home-1/choose-us/KPM-Choose02.png" alt="image">
                        <img class="image-2" src="assets/imgs/home-1/choose-us/KPM-Choose01.png" alt="image">
                        <!-- <img class="image-3" src="assets/imgs/home-1/choose-us/choose-3.png" alt="image"> -->
                        <img class="image-4" src="assets/imgs/home-1/choose-us/icon-1.png" alt="image">
                        <img class="image-5" src="assets/imgs/home-1/choose-us/icon-2.png" alt="image">

                        <div class="rotation-container">
                            <div class="ring ring1"></div>
                            <div class="ring ring2"></div>
                            <div class="ring ring3"></div>
                            <div class="dot"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="choose-us__wrapper">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-right" data-aos-duration="900">
                            <h2 class="title"><span class="icon"><img src="assets/imgs/home-1/choose-us/icon-3.png"
                                        alt="image"></span><a href="contact.html">High-Performance Systems</a></h2>
                            <p> Optimized software solutions built for speed, reliability, and seamless business operations.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-up" data-aos-duration="900">
                            <h2 class="title"><span class="icon"><img src="assets/imgs/home-1/choose-us/icon-4.png"
                                        alt="image"></span><a href="contact.html">Enterprise-Grade Security</a></h2>
                            <p> Advanced architecture and data protection standards to ensure complete system integrity.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-left" data-aos-duration="900">
                            <h2 class="title"><span class="icon"><img src="assets/imgs/home-1/choose-us/icon-5.png"
                                        alt="image"></span><a href="contact.html">Trusted Technology Partner</a></h2>
                            <p> Businesses rely on Avark for scalable ERP, CRM, and custom software solutions that deliver measurable results. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="control-plan section-spacing-top-120" style="display: none;">
    <div class="container rr-container-1350">
        <div class="row">
            <div class="col-xl-3">
                <div class="control-plan__left" data-aos="fade-right" data-aos-duration="900">
                    <div class="control-plan__left-icon">
                        <h2 class="title">We mentioned your business on Instagram </h2>
                        <a href="https://www.facebook.com/"><i class="fa-solid fa-s"></i></a>
                        <img class="line-1" src="assets/imgs/home-1/control-plan/line-1.png" alt="image">
                    </div>

                    <div class="control-plan__left-icon icon-2">
                        <img class="dot-shape" src="assets/imgs/home-1/control-plan/dot-shape.png" alt="image">
                        <a href="https://x.com/"><i class="fa-brands fa-x-twitter"></i></a>
                        <img class="line-2" src="assets/imgs/home-1/control-plan/line-2.png" alt="image">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="section-title__wrapper text-center" data-aos="fade-up" data-aos-duration="700">
                    <h2 class="sub-title">Client Testimonials</h2>
                    <h2 class="title rr-title-anim-1">Trusted by Businesses Across Industries</h2>
                </div>
                <div class="control-plan__wrapper" data-aos="fade-up" data-aos-duration="900">
                    <div class="control-plan__item">
                        <h6 class=""> Enterprise-Grade <br> Security </h6>
                        <p>Advanced protection to safeguard business data.</p>
                    </div>
                    <div class="control-plan__item">
                        <h6 class="">Scalable & Customizable Systems </h6>
                        <p> Solutions designed to grow with your business. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="control-plan__right" data-aos="fade-left" data-aos-duration="900">

                    <div class="control-plan__right-icon icon-3">
                        <img class="dot-shape" src="assets/imgs/home-1/control-plan/dot-shape.png" alt="image">
                        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                        <img class="line-3" src="assets/imgs/home-1/control-plan/line-3.png" alt="image">
                    </div>

                    <div class="control-plan__right-icon has--4">
                        <h2 class="title">We metioned your business on facebook</h2>
                        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                        <img class="line-4" src="assets/imgs/home-1/control-plan/line-4.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="media" data-aos="fade-up" data-aos-duration="900">
            <img src="assets/imgs/home-1/control-plan/control-plan.png" alt="image ">

            <!-- Elfsight Google Reviews | Untitled Google Reviews
            <script src="https://elfsightcdn.com/platform.js" async></script>
            <div class="elfsight-app-d82de514-8f7a-4d93-84b9-0fbf2ea30114" data-elfsight-app-lazy></div> -->

        </div>
    </div>
</section>

<!-- pricing__area start -->
<section class="pricing rr-bg-gray section-spacing" style="display: none;">
    <div class="container rr-container-1350">
        <div class="pricing__wrapper">
            <div class="pricing__card " data-aos="fade-right" data-aos-duration="900">
                <h3 class="pricing__card__title"> Industrial Inventory Management System </h3>
                <div class="pricing__card__price">
                    <h2 data-Monthly="<span>$49</span> <span>/per month</span>"
                        data-Annually="<span>$100</span> <span>/per yearly</span>">
                        <span> ₹6,999 </span> <span>/per month</span>
                    </h2>
                </div>
                <div class="pricing__body">
                    <ul>
                        <li><span><i class="fa-solid fa-check"></i></span>Stock & Warehouse Management</li>
                        <li><span><i class="fa-solid fa-check"></i></span>Real-Time Inventory Tracking </li>
                        <li><span><i class="fa-solid fa-check"></i></span>Multi-User Access </li>
                        <li><span><i class="fa-solid fa-check"></i></span>Reporting & Analytics </li>
                        <li><span><i class="fa-solid fa-check"></i></span>Email Support </li>
                    </ul>
                </div>
                <div class="pricing__price__btn">
                    <a href="contact.html" class="rr-btn-green">
                        <span class="btn-wrap">
                            <span class="text-one">Request Demo</span>
                            <span class="text-two">Request Demo</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="pricing__card" data-aos="fade-up" data-aos-duration="900">
                <h3 class="pricing__card__title">ERP System</h3>
                <div class="pricing__card__price ">
                    <h2 data-Monthly="<span>$49</span> <span>/per month</span>"
                        data-Annually="<span>$100</span> <span>/per yearly</span>">
                        <span>₹12,999</span> <span>/per month</span>
                    </h2>
                </div>
                <div class="pricing__body">
                    <ul>
                        <li><span><i class="fa-solid fa-check"></i></span> Finance & Accounts Module</li>
                        <li><span><i class="fa-solid fa-check"></i></span>HR & Payroll Management</li>
                        <li><span><i class="fa-solid fa-check"></i></span>Sales & Purchase Management</li>
                        <li><span><i class="fa-solid fa-check"></i></span>Advanced Reports & Dashboard</li>
                        <li><span><i class="fa-solid fa-check"></i></span>Role-Based Access Control</li>
                    </ul>
                </div>
                <div class="pricing__price__btn">
                    <a href="contact.html" class="rr-btn-green">
                        <span class="btn-wrap">
                            <span class="text-one">Get ERP Demo</span>
                            <span class="text-two">Get ERP Demo</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="pricing__content" data-aos="fade-left" data-aos-duration="900">
                <div class="section-title__wrapper">
                    <h2 class="sub-title">Product Pricing Plans</h2>
                    <h2 class="title rr-title-anim-1">Flexible Pricing for Powerful Business Solutions</h2>
                    <p class="desc">Choose the right software solution based on your business size and operational needs. Scalable, secure, and performance-driven systems built for growth.</p>
                </div>
                <div class="pricing__toggle-button ">
                    <span class="pricing__toggler" id="Monthly">monthly</span>
                    <label class="pricing__toggle">
                        <input type="checkbox" id="checkbox" onclick="check()">
                        <span class="switcher toggle"></span>
                    </label>
                    <span class="pricing__toggler" id="Annually">yearly</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing__area start -->

<section class="testimonial">
    <div class="testimonial__inner section-spacing rr-pos-rel">
        <div class="shape-1"><img src="assets/imgs/home-1/testimonial/shape.png" alt="image"></div>
        <div class="container rr-container-1350">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__content" data-aos="fade-right" data-aos-duration="900">
                        <div class="section-title__wrapper ">
                            <h2 class="sub-title has--green">Testimonials</h2>
                            <h2 class="title rr-title-anim-1">Why Businesses Trust Avark</h2>
                        </div>

                        <div class="testimonial__author">
                            <ul>
                                <li><img src="assets/imgs/home-1/testimonial/author-1.jpg" alt="image"></li>
                                <li><img src="assets/imgs/home-1/testimonial/author-2.jpg" alt="image"></li>
                                <li><img src="assets/imgs/home-1/testimonial/author-3.jpg" alt="image"></li>
                                <li><i class="fa-solid fa-plus"></i></li>
                            </ul>

                            <h3 class="active">669k+ Active
                                users world-wide</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-duration="900">

                    <div class=" testimonial-slide__active" id="slideContainer">
                        <div class="arrow__wrapper">

                            <button class="arrow-btn prev" onclick="changeSlide(-1)">
                                <i class="fa-solid fa-angle-up"></i>
                            </button>

                            <button class="arrow-btn next" onclick="changeSlide(1)">
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                        </div>
                        <div class="testimonial__item" data-index="0">
                            <div class="logo"><img src="assets/imgs/home-1/testimonial/logo.png" alt="image"></div>
                            <p class="desc">“The Inventory Management System helped us gain complete stock visibility and reduce manual errors.
                                The support team is highly professional and responsive.”</p>
                            <div class="testimonial__info">
                                <div class="testimonial__info__media">
                                    <img src="assets/imgs/home-1/testimonial/author-4.jpg" alt="image">
                                </div>
                                <div class="testimonial__info__content">
                                    <h2 class="title">Anita Verma</h2>
                                    <span class="sub-title">Supply Chain Head</span>
                                </div>
                            </div>
                            <div class="shape"><img src="assets/imgs/home-1/testimonial/quite.png" alt="image"></div>
                        </div>
                        <div class="testimonial__item item-2" data-index="1">
                            <div class="logo"><img src="assets/imgs/home-1/testimonial/logo.png" alt="image"></div>
                            <p class="desc">“On the Windows talking painted pasture yet its express parties use. Sure last
                                upon he same as knew next. Of believed or diverted no.”</p>
                            <div class="testimonial__info">
                                <div class="testimonial__info__media">
                                    <img src="assets/imgs/home-1/testimonial/author-4.jpg" alt="image">
                                </div>
                                <div class="testimonial__info__content">
                                    <h2 class="title">Kevin Martin</h2>
                                    <span class="sub-title">Web Designer</span>
                                </div>
                            </div>
                            <div class="shape"><img src="assets/imgs/home-1/testimonial/quite.png" alt="image"></div>
                        </div>
                        <div class="testimonial__item item-3" data-index="2">
                            <div class="logo"><img src="assets/imgs/home-1/testimonial/logo.png" alt="image"></div>
                            <p class="desc">“On the Windows talking painted pasture yet its express parties use. Sure last
                                upon he same as knew next. Of believed or diverted no.”</p>
                            <div class="testimonial__info">
                                <div class="testimonial__info__media">
                                    <img src="assets/imgs/home-1/testimonial/author-4.jpg" alt="image">
                                </div>
                                <div class="testimonial__info__content">
                                    <h2 class="title">Kevin Martin</h2>
                                    <span class="sub-title">Web Designer</span>
                                </div>
                            </div>
                            <div class="shape"><img src="assets/imgs/home-1/testimonial/quite.png" alt="image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="technology section-spacing">
    <div class="container rr-container-1350">
        <div class="row">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900">
                <div class="technology__card" data-background="assets/imgs/home-1/technology/bg.png">
                    <img class="shape-1" src="assets/imgs/home-1/technology/kuldeep01.png" alt="image">
                    <!-- <img class="shape-2" src="assets/imgs/home-1/technology/shape-2.png" alt="image"> -->
                    <div class="section-title__wrapper ">
                        <h2 class="sub-title">Technology That Powers Modern Enterprises</h2>
                        <h2 class="title rr-title-anim-1 color-white">Secure. Scalable. Performance-Driven. </h2>

                        <p class="decs">Avark leverages modern, scalable, and secure technologies to build high-performance ERP systems,
                            inventory management solutions, and enterprise software that drive efficiency, automation, and business growth.
                        </p>
                    </div>

                    <a href="contact.html" class="rr-btn-green">
                        <span class="btn-wrap">
                            <span class="text-one">Get a Free Consultation</span>
                            <span class="text-two">Get a Free Consultation</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="900">
                <div class="technology__wrapper" data-background="assets/imgs/home-1/technology/bg-2.png">

                    <h2 class="title">Scalable Technology Architecture</h2>
                    <div class="client-capsule-wrapper-box" data-t-throwable-scene="true">
                        <div class="client-capsule-wrapper">
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s1.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s2.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s3.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s4.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s5.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s6.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s7.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s8.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s9.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s10.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s11.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s12.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s13.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s14.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img src="assets/imgs/home-1/technology/kuldeep/s15.png" alt="image">
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq rr-bg-gray section-spacing rr-ov-hidde">
    <div class="container rr-container-1350">
        <div class="row">
            <div class="col-lg-5">
                <div class="faq__content" data-aos="fade-right" data-aos-duration="500">
                    <div class="section-title__wrapper">
                        <h2 class="sub-title"><span><img src="assets/imgs/icon/massage.png" alt="image"></span>Support &
                            Help</h2>
                        <h2 class="title rr-title-anim-1">Got Questions? We’ve Got Answers </h2>
                        <p class="desc">Find clear answers to common questions about Avark’s ERP, Inventory Management, and PACS solutions — covering features, pricing, security, and implementation.</p>

                        <a href="contact.html" class="rr-btn-green">
                            <span class="btn-wrap">
                                <span class="text-one">CONTACT US</span>
                                <span class="text-two">CONTACT US</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="accordion" id="accordionExample">
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="500">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="question">
                                    What is Avark and what solutions does it offer?
                                </div>
                            </div>
                        </div>
                        <div id="collapseOne" class="global-accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Avark is a technology company providing enterprise software products such as ERP Systems, Industrial Inventory Management Systems, and PACS Integration Solutions designed to streamline business operations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="600">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="question">
                                    Are Avark’s software solutions secure?
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="global-accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Yes. Our systems are built with enterprise-grade security standards, role-based access control, and secure data architecture to ensure complete protection of business information.</p>
                            </div>
                        </div>
                    </div>
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="question">
                                    Can the software be customized as per business needs? </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="global-accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Absolutely. Avark products are scalable and customizable to match your specific workflows, industry requirements, and operational structure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="800">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="question">
                                    Does Avark provide implementation and support?
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="global-accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Yes. We offer complete implementation assistance, onboarding support, training, and ongoing technical support to ensure smooth operations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="900">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <div class="question">
                                    Is pricing fixed or flexible?
                                </div>
                            </div>
                        </div>
                        <div id="collapseFive" class="global-accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Pricing depends on the product, number of users, modules required, and deployment model. We offer flexible plans tailored to your business needs.</p>
                            </div>
                        </div>
                    </div>

                    <div class="global-accordion-item" data-aos="fade-up" data-aos-duration="900">
                        <div class="global-accordion-header">
                            <div class="global-accordion-button collapsed style" data-bs-toggle="collapse" role="group"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <div class="question">
                                    Can Avark software integrate with existing systems?
                                </div>
                            </div>
                        </div>
                        <div id="collapseSix" class="global-accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="global-accordion-body style">
                                <p>Yes. Our solutions support API-based integrations and can be connected with third-party tools, accounting systems, and other enterprise platforms.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


@endsection