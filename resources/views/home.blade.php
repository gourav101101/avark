@extends('layouts.app')

@section('title', 'Smart Healthcare & Enterprise Solutions')
@section('meta_description', 'Avark provides cutting-edge Hospital Management Systems (HMS), ERP, CRM, and digital transformation solutions to empower modern businesses and healthcare institutions.')
@section('meta_keywords', 'Avark, Hospital Management System, ERP, CRM, Digital Healthcare, Custom Software Development, India')
@section('og_title', 'Avark Healthcare & Enterprise Technology')

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

    .hero__media .shape-1 {
        width: 465px;
        max-width: 100%;
        height: auto;
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
                            src="{{ asset('assets/imgs/home-1/hero/new3-kp01.png') }}" alt="image">

                        <img class="shape-2 shape-animaiton1" src="{{ asset('assets/imgs/home-1/hero/shape-2.png') }}" alt="">
                        <img class="shape-3 shape-animaiton1" src="{{ asset('assets/imgs/home-1/hero/kp03.png') }}" alt="">
                        <img class="shape-4 shape-animaiton1" src="{{ asset('assets/imgs/home-1/hero/kp02.png') }}" alt="">
                        <img class="shape-5" src="{{ asset('assets/imgs/home-1/hero/card3.png') }}" alt="">
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

                            <p>Trusted by 10,000+ Users Across the World</p>
                        </div>

                        <h1 class="title rr-title-anim-2">
                            Transform Your Hospital with ARK Hospital Management Software
                        </h1>

                        <p class="desc">
                            Avark Healthcare Technology Pvt. Ltd. is a healthcare-focused technology company committed to helping hospitals, clinics, and healthcare organizations operate smarter, faster, and more efficiently.
                        </p>

                        <div class="hero__content-wrap">
                            <a href="{{ route('contact-us') }}" class="rr-btn-green">
                                <span class="btn-wrap">
                                    <span class="text-one">Book a Demo</span>
                                    <span class="text-two">Book a Demo</span>
                                </span>
                            </a>

                            <a href="{{ route('products') }}" class="rr-btn-green green-2">
                                <span class="btn-wrap">
                                    <span class="text-one">Explore Our Products</span>
                                    <span class="text-two">Explore Our Products</span>
                                </span>
                            </a>
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
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/erp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('erp-system') }}">ERP System Development</a></h3>
                        <p class="desc">Streamline operations, manage resources efficiently, and gain real-time business insights with our scalable ERP solutions.</p>
                        <span class="service">Service _ 01</span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/crm-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('crm-solutions') }}">CRM Solutions</a></h3>
                        <p class="desc">Improve customer relationships, automate sales processes, and boost engagement with intelligent CRM systems.</p>
                        <span class="service">Service _ 02</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/CustomSoftwareDevelopment-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('custom-software-development') }}">Custom Software Development</a></h3>
                        <p class="desc">Tailor-made software solutions designed specifically to match your business workflows and operational requirements.</p>
                        <span class="service">Service _ 04</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/WebApplicationDevelopment-kp.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('web-application-development') }}">Web Application Development</a></h3>
                        <p class="desc">Secure, responsive, and high-performance web platforms built using modern technologies for scalable growth.</p>
                        <span class="service">Service _ 05</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/mobile-development.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('mobile-app-development') }}">Mobile App Development</a></h3>
                        <p class="desc">User-friendly Android & iOS applications that enhance customer experience and expand your digital reach.</p>
                        <span class="service">Service _ 06</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/cloud-computing-kpm.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a></h3>
                        <p class="desc">Smooth and secure migration of legacy systems and business data to modern cloud-based infrastructure.</p>
                        <span class="service">Service _ 07</span>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="service__item">
                        <span class="icon"><img loading="lazy" src="assets/imgs/home-1/service/digital-transformation-kpm.png" alt="image"></span>
                        <h3 class="title"><a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services</a></h3>
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

<section class="brand-1 section-spacing-top-100">
    <div class="container rr-container-1350">
        <div class="section-title__wrapper">
            <h2 class="title rr-title-anim-1">Our Partners</h2>
        </div>
        <div class="swiper brand-1__active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/makd.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/bigrock.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/amazonwebservices.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/oracle.png" alt="image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-1__item">
                        <img loading="lazy" src="assets/imgs/home-1/brand/emegh-logo.png" alt="eMEGH Partner">
                    </div>
                </div>
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep.png" alt="image">-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="swiper-slide">-->
                <!--    <div class="brand-1__item">-->
                <!--        <img loading="lazy" src="assets/imgs/home-1/brand/kuldeep1.png" alt="image">-->
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
                            <h2 class="sub-title">About Us — Who We Are</h2>
                            <h2 class="title rr-title-anim-1">Transforming Healthcare Through Technology Since 2019</h2>
                            <p class="desc">Avark Healthcare Technology Pvt. Ltd. is a healthcare-focused technology company committed to helping hospitals, clinics, and healthcare organizations operate smarter, faster, and more efficiently. Our integrated digital platform empowers healthcare providers to replace fragmented processes with a centralized, intelligent, and data-driven system.</p>

                            <a href="{{ route('products') }}" class="rr-btn-green">
                                <span class="btn-wrap">
                                    <span class="text-one">Discover More</span>
                                    <span class="text-two">Discover More</span>
                                </span>
                            </a>
                        </div>
                        <div class="features-1__shape-1 shape-animaiton1" data-aos="fade-down-left" data-aos-duration="900">
                            <img loading="lazy" src="assets/imgs/home-1/features/hand-shape-kuldeep.png" alt="image">
                        </div>
                        <div class="features-1__shape-2 rotate"><img loading="lazy" src="assets/imgs/home-1/features/line-shape.png"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="features-1__wrapper">
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="500">
                        <span><img loading="lazy" src="assets/imgs/home-1/features/icon-1.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Healthcare-Focused Solution</h2>
                            <p>Designed exclusively for hospitals, clinics, and healthcare organizations with workflows that match real-world hospital operations.</p>
                        </div>
                    </div>
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="700">
                        <span><img loading="lazy" src="assets/imgs/home-1/features/icon-2.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Centralized Patient Records</h2>
                            <p>Doctors and staff can access patient information quickly and securely from anywhere.</p>
                        </div>
                    </div>
                    <div class="features-1__item" data-aos="fade-up" data-aos-duration="900">
                        <span><img loading="lazy" src="assets/imgs/home-1/features/icon-3.png" alt="image"></span>
                        <div class="text">
                            <h2 class="title">Integration Across Departments</h2>
                            <p>Pharmacy, laboratory, radiology, HR, inventory, wards, and billing operate on a unified platform.</p>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('hms')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('hms')}}">Advance Hospital Management System</a></h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('inventory-stock-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('inventory-stock-management')}}">Inventory or Stock Management System</a></h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('pathology-diagnostic-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-3.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management System</a></h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('white-label-practice-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-4.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a></h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('dialysis-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('dialysis-management')}}">Dialysis Management System</a></h3>
                </div>
            </div>


            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900" style="cursor: pointer;" onclick="window.location.href='{{route('enterprise-support-management')}}'">
                <div class="icon">
                    <img loading="lazy" src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title"><a href="{{route('enterprise-support-management')}}">Enterprise Support Management System</a></h3>
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
                            <h2 class="sub-title has--green" data-aos="fade-up" data-aos-duration="500">Why Choose ARK?
                            </h2>
                            <h3 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Future-Ready Hospital Technology</h3>
                            <p class="desc" data-aos="fade-up" data-aos-duration="900">ARK HIMS combines intelligent automation, real-time analytics, cloud technology, mobility, and seamless integrations to help healthcare organizations stay ahead in an evolving digital healthcare landscape. Designed to scale with your growth, ARK HIMS empowers hospitals to deliver better patient outcomes, optimize operations, and embrace the future of connected healthcare.</p>

                            <a href="{{ route('contact-us') }}" class="rr-btn-green has--drk-gren" data-aos="fade-up"
                                data-aos-duration="900">
                                <span class="btn-wrap">
                                    <span class="text-one">Book a Demo</span>
                                    <span class="text-two">Book a Demo</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-us__media" data-aos="fade-up" data-aos-duration="900">
                        <img loading="lazy" class="image-1" src="assets/imgs/home-1/choose-us/KPM-Choose02.png" alt="image">
                        <img loading="lazy" class="image-2" src="assets/imgs/home-1/choose-us/KPM-Choose01.png" alt="image">
                        <!-- <img loading="lazy" class="image-3" src="assets/imgs/home-1/choose-us/choose-3.png" alt="image"> -->
                        <img loading="lazy" class="image-4" src="assets/imgs/home-1/choose-us/icon-1.png" alt="image">
                        <img loading="lazy" class="image-5" src="assets/imgs/home-1/choose-us/icon-2.png" alt="image">

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
                        <div class="choose-us__item" data-aos="fade-right" data-aos-duration="900" style="height: 100%;">
                            <h2 class="title"><span class="icon"><img loading="lazy" src="assets/imgs/home-1/choose-us/icon-3.png"
                                        alt="image"></span><a href="{{ route('contact-us') }}">Faster Patient Care</a></h2>
                            <p>Reduce waiting times and improve patient satisfaction through streamlined workflows.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-up" data-aos-duration="900" style="height: 100%;">
                            <h2 class="title"><span class="icon"><img loading="lazy" src="assets/imgs/home-1/choose-us/icon-4.png"
                                        alt="image"></span><a href="{{ route('contact-us') }}">Built for Quality & Compliance</a></h2>
                            <p>Support accreditation and quality initiatives with NABH-Ready workflows, ABHA integration, clinical documentation, and compliance monitoring.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="choose-us__item" data-aos="fade-left" data-aos-duration="900" style="height: 100%;">
                            <h2 class="title"><span class="icon"><img loading="lazy" src="assets/imgs/home-1/choose-us/icon-5.png"
                                        alt="image"></span><a href="{{ route('contact-us') }}">Multi-Location Support</a></h2>
                            <p>Manage multiple hospitals, clinics, or branches from a single platform with centralized reporting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="testimonial">
    <div class="testimonial__inner section-spacing rr-pos-rel">
        <div class="shape-1"><img loading="lazy" src="assets/imgs/home-1/testimonial/shape.png" alt="image"></div>
        <div class="container rr-container-1350">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial__content" data-aos="fade-right" data-aos-duration="900">
                        <div class="section-title__wrapper ">
                            <h2 class="sub-title has--green">Testimonials</h2>
                            <h2 class="title rr-title-anim-1">What Our Clients Say</h2>
                        </div>

                        <div class="testimonial__author">
                            <ul>
                                <li><img loading="lazy" src="assets/imgs/home-1/testimonial/author-1.jpg" alt="image"></li>
                                <li><img loading="lazy" src="assets/imgs/home-1/testimonial/author-2.jpg" alt="image"></li>
                                <li><img loading="lazy" src="assets/imgs/home-1/testimonial/author-3.jpg" alt="image"></li>
                                <li><i class="fa-solid fa-plus"></i></li>
                            </ul>

                            <h3 class="active">10,000+ Active
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
                            <div class="logo"><img loading="lazy" src="assets/imgs/home-1/testimonial/logo.png" alt="image"></div>
                            <p class="desc">“ARK HIMS has transformed our hospital operations. Patient registration, billing, pharmacy, and laboratory processes are now faster and more accurate. The real-time dashboard helps management make informed decisions every day.”</p>
                            <div class="testimonial__info">
                                <div class="testimonial__info__media">
                                    <img loading="lazy" src="assets/imgs/home-1/testimonial/author-4.jpg" alt="image">
                                </div>
                                <div class="testimonial__info__content">
                                    <h2 class="title">Hospital Administrator</h2>
                                    <span class="sub-title">Multi-Specialty Hospital</span>
                                </div>
                            </div>
                            <div class="shape"><img loading="lazy" src="assets/imgs/home-1/testimonial/quite.png" alt="image"></div>
                        </div>
                        <div class="testimonial__item item-2" data-index="1">
                            <div class="logo"><img loading="lazy" src="assets/imgs/home-1/testimonial/logo.png" alt="image"></div>
                            <p class="desc">“On the Windows talking painted pasture yet its express parties use. Sure last
                                upon he same as knew next. Of believed or diverted no.”</p>
                            <div class="testimonial__info">
                                <div class="testimonial__info__media">
                                    <img loading="lazy" src="assets/imgs/home-1/testimonial/author-4.jpg" alt="image">
                                </div>
                                <div class="testimonial__info__content">
                                    <h2 class="title">Kevin Martin</h2>
                                    <span class="sub-title">Web Designer</span>
                                </div>
                            </div>
                            <div class="shape"><img loading="lazy" src="assets/imgs/home-1/testimonial/quite.png" alt="image"></div>
                        </div>
                        <div class="testimonial__item item-3" data-index="2">
                            <div class="logo"><img loading="lazy" src="assets/imgs/home-1/testimonial/logo.png" alt="image"></div>
                            <p class="desc">“On the Windows talking painted pasture yet its express parties use. Sure last
                                upon he same as knew next. Of believed or diverted no.”</p>
                            <div class="testimonial__info">
                                <div class="testimonial__info__media">
                                    <img loading="lazy" src="assets/imgs/home-1/testimonial/author-4.jpg" alt="image">
                                </div>
                                <div class="testimonial__info__content">
                                    <h2 class="title">Kevin Martin</h2>
                                    <span class="sub-title">Web Designer</span>
                                </div>
                            </div>
                            <div class="shape"><img loading="lazy" src="assets/imgs/home-1/testimonial/quite.png" alt="image"></div>
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
                    <img loading="lazy" class="shape-1" src="assets/imgs/home-1/technology/kuldeep01.png" alt="image">
                    <!-- <img loading="lazy" class="shape-2" src="assets/imgs/home-1/technology/shape-2.png" alt="image"> -->
                    <div class="section-title__wrapper ">
                        <h2 class="sub-title">Healthcare Operations Powered Every Day</h2>
                        <h2 class="title rr-title-anim-1 color-white">Future-Ready Hospital Technology</h2>


                        <p class="decs">ARK HIMS combines intelligent automation, real-time analytics, cloud technology, mobility, and seamless integrations to help healthcare organizations stay ahead in an evolving digital healthcare landscape.
                        </p>
                    </div>

                    <a href="{{ route('contact-us') }}" class="rr-btn-green">
                        <span class="btn-wrap">
                            <span class="text-one">Book a Demo</span>
                            <span class="text-two">Book a Demo</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="900">
                <div class="technology__wrapper" data-background="assets/imgs/home-1/technology/bg-2.png">

                    <h2 class="title">Secure, Scalable & Future Ready</h2>
                    <div class="client-capsule-wrapper-box" data-t-throwable-scene="true">
                        <div class="client-capsule-wrapper">
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s1.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s2.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s3.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s4.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s5.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s6.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s7.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s8.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s9.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s10.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s11.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s12.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s13.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s14.png" alt="image">
                                </span>
                            </p>
                            <p data-t-throwable-el="">
                                <span class="client-box ">
                                    <img loading="lazy" src="assets/imgs/home-1/technology/kuldeep/s15.png" alt="image">
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
                        <h2 class="sub-title"><span><img loading="lazy" src="assets/imgs/icon/massage.png" alt="image"></span>Support &
                            Help</h2>
                        <h2 class="title rr-title-anim-1">Got Questions? We’ve Got Answers </h2>
                        <p class="desc">Find clear answers to common questions about ARK Hospital Management Software, Inventory Management, Pathology & Diagnostic solutions — covering features, pricing, security, and implementation.</p>

                        <a href="{{ route('contact-us') }}" class="rr-btn-green">
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
