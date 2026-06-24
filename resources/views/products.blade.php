@extends('layouts.app')

@section('title', 'Products')
@section('meta_description', 'Welcome to our Products Page')
@section('meta_keywords', 'home, Avark Products')

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
</style>

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
    <div class=" container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Products for you..</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="index.html">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li> Products </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
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
                    <a href="{{route('kiosk-management-system')}}">
                        <img src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                    </a>
                </div>
                <div class="content">
                    <h3 class="title"> <a href="{{route('kiosk-management-system')}}"> KIOSK Management System </a> </h3>
                </div>
            </div>


            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('feedback-management')}}">
                    <img src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title"> <a href="{{route('digital-signage-solutions')}}"> Digital Signage Solutions </a> </h3>
                </div>
            </div>

            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('digital-signage-solutions')}}">
                    <img src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title">  <a href="{{route('feedback-management')}}"> Feedback Management </a></h3>
                </div>
            </div>

            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('ark-cloud-cast')}}">
                    <img src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title">  <a href="{{route('ark-cloud-cast')}}"> ARK Cloud Cast </a> </h3>
                </div>
            </div>



            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('hms')}}">
                    <img src="assets/imgs/icon/ai-features-icon-1.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title">  <a href="{{route('hms')}}"> Advance Hospital Management System </a> </h3>
                </div>
            </div>



            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('inventory-stock management')}}">
                    <img src="assets/imgs/icon/ai-features-icon-6.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title">  <a href="{{route('inventory-stock management')}}"> Inventory or Stock Management System </a> </h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('pathology-diagnostic-management')}}">
                    <img src="assets/imgs/icon/ai-features-icon-3.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title">  <a href="{{route('pathology-diagnostic-management')}}"> Pathology & Diagnostic Management System </a> </h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('white-label-practice-management')}}">
                    <img src="assets/imgs/icon/ai-features-icon-4.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title"> <a href="{{route('white-label-practice-management')}}"> White Label Practice Management Application </a> </h3>
                </div>
            </div>
            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('dialysis-management')}}">
                    <img src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title">  <a href="{{route('dialysis-management')}}"> Dialysis Management System </a> </h3>
                </div>
            </div>

            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('enterprise-support-management')}}">
                    <img src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title">  <a href="{{route('enterprise-support-management')}}"> Enterprise Support Management System </a> </h3>
                </div>
            </div>

            <!-- <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <div class="icon">
                    <img src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                </div>
                <div class="content">
                    <h3 class="title">Business Marketing Tool </h3>
                </div>
            </div> -->

            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('opd-management-system')}}">
                    <img src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title">  <a href="{{route('opd-management-system')}}"> OPD Management System  </a></h3>
                </div>
            </div>

            <div class="ai-features-2__item aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <div class="icon">
                     <a href="{{route('industrial-asset-management')}}">
                    <img src="assets/imgs/icon/ai-features-icon-5.png" alt="icon">
                     </a>
                </div>
                <div class="content">
                    <h3 class="title"> <a href="{{route('industrial-asset-management')}}"> Industrial Asset Management System </a> </h3>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="our-integrations__area section-spacing-120 rr-bg-gray">
    <div class="container rr-container-1350">
        <div class="our-integrations__top">
            <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left.png"
                        alt="image">Our Integrations <img class="right-shape" src="assets/imgs/home-3/shape/shape-right.png"
                        alt="image"></h2>
                <h2 class="title rr-title-anim-1">Powerful & Scalable Business Solutions</h2>
                <p class="desc">Explore our advanced products designed to streamline operations, improve efficiency, and drive business growth.</p>
            </div>
        </div>
        <div class="our-integrations__wrapper">
            <div class="our-integrations__border tx-center d-none d-lg-block">
                <img src="assets/imgs/home-3/shape/border-shape-3_01.png" alt="border not found">
            </div>
            <div class="our-integrations__brand">
                <div class="our-integrations__item item_1">
                    <img src="assets/imgs/home-3/brand/brand-7.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_2">
                    <img src="assets/imgs/home-3/brand/brand-8.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_3">
                    <img src="assets/imgs/home-3/brand/brand-9.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_4">
                    <img src="assets/imgs/home-3/brand/brand-10.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_5">
                    <img src="assets/imgs/home-3/brand/brand-11.png" alt="logo not found">
                </div>
                <div class="our-integrations__item item_6">
                    <img src="assets/imgs/home-3/brand/brand-12.png" alt="logo not found">
                </div>
            </div>
            <div class="our-integrations__btn">
                <a href="service.html" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Get a Free Consultation</span>
                        <span class="text-two">Get a Free Consultation</span>
                    </span>
                </a>
            </div>

        </div>
    </div>
</section>

<section class="testimonial-section__area">
    <div class="testimonial-section__wrapper section-spacing-120">
        <div class="testimonial-section__shape">
            <img src="assets/imgs/home-3/shape/testi-3-shape.png" alt="shape not found">
        </div>
        <div class="container rr-container-1350 p-relative">
            <div class="testimonial-section__author d-none d-xxl-block">
                <div class="about-3__author">
                    <ul>
                        <li><img src="assets/imgs/home-3/about/author.png" alt="image"></li>
                        <li><img src="assets/imgs/home-3/about/author-2.png" alt="image"></li>
                        <li><img src="assets/imgs/home-3/about/author-3.png" alt="image"></li>
                        <li class="plus-icon"><i class="fa-solid fa-plus"></i></li>
                    </ul>

                    <div class="text">
                        <p>300+ People Already Joined</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-7 offset-xxl-5">
                    <div class="testimonial-section__top">
                        <div class="section-title-3__wrapper">
                            <h2 class="sub-title white"><img class="left-shape"
                                    src="assets/imgs/home-3/shape/shape-left-white.png" alt="image">Testimonials</h2>
                            <h2 class="title rr-title-anim-1 white">What Our Customers Say</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section__wrap">
                <div class="swiper testimonial-section__active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-section__item">
                                <div class="testimonial-section__thumb">
                                    <img src="assets/imgs/home-1/testimonial/kptestimonails01.png" alt="image not found">
                                </div>
                                <div class="testimonial-section__content">
                                    <p class="testimonial-section__dec">"This CRM has transformed how we manage campaigns. Simple,
                                        effective, and a game-changer for our CRM team’s
                                        productivity."</p>
                                    <div class="testimonial-section__admin">
                                        <div class="info">
                                            <h3 class="name">Sarah Johnson</h3>
                                            <p class="position">Marketing Manager, Growthly</p>
                                        </div>
                                        <div class="quote">
                                            <img src="assets/imgs/home-3/testimonial/testimonial-quote.png" alt="quote not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-section__item">
                                <div class="testimonial-section__thumb">
                                    <img src="assets/imgs/home-1/testimonial/kptestimonails02.png" alt="image not found">
                                </div>
                                <div class="testimonial-section__content">
                                    <p class="testimonial-section__dec">"This CRM has transformed how we manage campaigns. Simple,
                                        effective, and a game-changer for our CRM team’s
                                        productivity."</p>
                                    <div class="testimonial-section__admin">
                                        <div class="info">
                                            <h3 class="name">Sarah Johnson</h3>
                                            <p class="position">Marketing Manager, Growthly</p>
                                        </div>
                                        <div class="quote">
                                            <img src="assets/imgs/home-3/testimonial/testimonial-quote.png" alt="quote not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-section__button">
                <div class="testimonial-section__arrow testimonial-section__arrow-prev"><i
                        class="fa-regular fa-angle-left"></i></div>
                <div class="testimonial-section__arrow testimonial-section__arrow-next"><i
                        class="fa-regular fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section__area section-spacing-120">
    <div class="container rr-container-1350">
        <div class="cta-section__wrapper" data-background="assets/imgs/home-3/shape/cta-3-bg.png">
            <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title white"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left-white.png"
                        alt="image">Connect With Us <img class="right-shape"
                        src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
                <h2 class="title rr-title-anim-1 white">Experience Our Product in Action</h2>
                <p class="cta-section__dec">Transform Your Business with Smart Technology</p>
            </div>
            <div class="cta-section__btn">
                <a href="#" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">view our demo</span>
                        <span class="text-two">view our demo</span>
                    </span>
                </a>
                <a href="contact.html" class="rr-btn rr-btn-3">
                    <span class="btn-wrap">
                        <span class="text-one">Request Free Consultation</span>
                        <span class="text-two">Request Free Consultation</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection