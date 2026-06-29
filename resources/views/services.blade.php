@extends('layouts.app')

@section('title', 'Services')
@section('meta_description', 'Welcome to our homepage')
@section('meta_keywords', 'home, laravel website')

@section('content')

 <!-- breadcrumb-section -->
        <section class="breadcrumb-section__area ">
          <div class=" container rr-container-1900">
            <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
              <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Service</h3>
                <ul class="breadcrumb-section__page">
                  <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                  <li> Service</li>
                </ul>
              </div>
            </div>
            <div class="breadcrumb-section__border"></div>
          </div>
        </section>


        <div class="service-2__area section-spacing">
          <div class="container rr-container-1350">
            <div class="section-title-3__wrapper tx-center">
              <h2 class="sub-title"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left.png"
                  alt="image">IT Solutions for Every Business<img class="right-shape" src="assets/imgs/home-3/shape/shape-right.png"
                  alt="image"></h2>
              <h2 class="title rr-title-anim-1">Digital Solutions That Scale</h2>
            </div>

            <div class="row  mb-minus-30">
              <div class="col-md-4 col-sm-6">
                <div class="service-2__item">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-08.png" alt="image">
                  </div>
                  <h2 class="title">ERP System Development</h2>
                  <p>Streamline operations, manage resources efficiently, and gain real-time business insights with our scalable ERP solutions.</p>
                  <a href="{{ route('erp-system') }}">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="service-2__item">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-09.png" alt="image">
                  </div>
                  <h2 class="title">CRM Solutions </h2>
                  <p>Improve customer relationships, automate sales processes, and boost engagement with intelligent CRM systems.</p>
                  <a href="{{ route('crm-solutions') }}">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="service-2__item">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-10.png" alt="image">
                  </div>
                  <h2 class="title">Custom Software Development</h2>
                  <p>Tailor-made software solutions designed specifically to match your business workflows and operational requirements.</p>
                  <a href="{{ route('custom-software-development') }}">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="service-2__item">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-08.png" alt="image">
                  </div>
                  <h2 class="title">Web Application Development</h2>
                  <p>Secure, responsive, and high-performance web platforms built using modern technologies for scalable growth.</p>
                  <a href="{{ route('web-application-development') }}">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="service-2__item">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-09.png" alt="image">
                  </div>
                  <h2 class="title">Mobile App Development</h2>
                  <p>User-friendly Android & iOS applications that enhance customer experience and expand your digital reach.</p>
                  <a href="{{ route('mobile-app-development') }}">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="service-2__item">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-10.png" alt="image">
                  </div>
                  <h2 class="title">Cloud & Data Migration</h2>
                  <p>Smooth and secure migration of legacy systems and business data to modern cloud-based infrastructure.</p>
                  <a href="{{ route('cloud-and-data-migration') }}">MORE DETAILS</a>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="service-2__item">
                  <div class="icon">
                    <img src="assets/imgs/icon/icon-10.png" alt="image">
                  </div>
                  <h2 class="title">Enterprise Integration Services</h2>
                  <p>Seamlessly integrate ERP, CRM, third-party tools, and APIs into one unified digital ecosystem.</p>
                  <a href="{{ route('enterprise-integration-services') }}">MORE DETAILS</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section class="our-integrations__area section-spacing-120 rr-bg-gray">
          <div class="container rr-container-1350">
            <div class="our-integrations__top">
              <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left.png"
                    alt="image">Our Integrations <img class="right-shape" src="assets/imgs/home-3/shape/shape-right.png"
                    alt="image"></h2>
                <h2 class="title rr-title-anim-1">Seamless System Connectivity</h2>
                <p class="desc">Integrate multiple business applications into one smooth and efficient workflow.</p>
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
                <a href="{{ route('contact-us') }}" class="rr-btn">
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
                    <li><img src="{{ asset('assets/imgs/home-1/testimonial/author-1.jpg') }}" alt="image"></li>
                    <li><img src="{{ asset('assets/imgs/home-1/testimonial/author-2.jpg') }}" alt="image"></li>
                    <li><img src="{{ asset('assets/imgs/home-1/testimonial/author-3.jpg') }}" alt="image"></li>
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
                          <img src="{{ asset('assets/imgs/home-1/testimonial/kptestimonails01.png') }}" alt="image not found">
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
                          <img src="{{ asset('assets/imgs/home-1/testimonial/kptestimonails02.png') }}" alt="image not found">
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

        <section class="pricing-plans-3__area section-spacing-120" style="display: none;">
          <div class="container rr-container-1350">
            <div class="pricing-plans-3__top">
              <div class="section-title-3__wrapper">
                <h2 class="sub-title"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left.png"
                    alt="image">Pricing Plans</h2>
                <h2 class="title rr-title-anim-1">Flexible Plans, Maximum Value</h2>
              </div>
              <div class="pricing-plans-3__right">
                <div class="pricing-plans-3__toggle-button">
                  <span class="pricing-plans-3__toggler active" id="Monthly">monthly</span>
                  <label class="pricing-plans-3__toggle">
                    <input type="checkbox" id="checkbox" onclick="check()">
                    <span class="switcher toggle"></span>
                  </label>
                  <span class="pricing-plans-3__toggler" id="Annually">yearly</span>
                </div>
              </div>
            </div>
            <div class="row mb-minus-30">
              <div class="col-lg-6">
                <div class="pricing-plans-3__card mb-30">
                  <div class="pricing-plans-3__wrap">
                    <div class="pricing-plans-3__content">
                      <h3 class="pricing-plans-3__title">Professional Plan</h3>
                      <p class="pricing-plans-3__dec">Advanced CRM Tools with automation, insights, and priority
                        support."</p>
                      <div class="pricing-plans-3__price">
                        <h2 data-Annually="$<span>29</span> <span>/yearly</span>"
                          data-Monthly="$<span>19</span> <span>/month</span>">
                          $<span>19</span> <span>/month</span>
                        </h2>
                      </div>
                    </div>
                    <ul class="pricing-plans-3__list">
                      <li><i class="fa-regular fa-angles-right"></i> 07 Users</li>
                      <li><i class="fa-regular fa-angles-right"></i> Basic CRM Features</li>
                      <li><i class="fa-regular fa-angles-right"></i> Sales Automation</li>
                      <li><i class="fa-regular fa-angles-right"></i> Advanced CRM</li>
                      <li><i class="fa-regular fa-angles-right"></i> Standard Support</li>
                    </ul>
                  </div>
                  <div class="pricing-plans-3__btn">
                    <a href="{{ route('contact-us') }}" class="rr-btn">
                      <span class="btn-wrap">
                        <span class="text-one">Contact Sales</span>
                        <span class="text-two">Contact Sales</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="pricing-plans-3__card mb-30">
                  <div class="pricing-plans-3__wrap">
                    <div class="pricing-plans-3__content">
                      <h3 class="pricing-plans-3__title">Enterprise Plan</h3>
                      <p class="pricing-plans-3__dec">Advanced CRM Tools with automation, insights, and priority
                        support."</p>
                      <div class="pricing-plans-3__price">
                        <h2 data-Annually="$<span>79</span> <span>/yearly</span>"
                          data-Monthly="$<span>49</span> <span>/month</span>">
                          $<span>49</span> <span>/month</span>
                        </h2>
                      </div>
                    </div>
                    <ul class="pricing-plans-3__list">
                      <li><i class="fa-regular fa-angles-right"></i> 10 Users</li>
                      <li><i class="fa-regular fa-angles-right"></i> Sales Automation</li>
                      <li><i class="fa-regular fa-angles-right"></i> Full Customization</li>
                      <li><i class="fa-regular fa-angles-right"></i> Integrations</li>
                      <li><i class="fa-regular fa-angles-right"></i> Dedicated Account Manager</li>
                    </ul>
                  </div>
                  <div class="pricing-plans-3__btn">
                    <a href="{{ route('contact-us') }}" class="rr-btn">
                      <span class="btn-wrap">
                        <span class="text-one">Contact Sales</span>
                        <span class="text-two">Contact Sales</span>
                      </span>
                    </a>
                  </div>
                </div>
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
                <h2 class="title rr-title-anim-1 white">Freedom Without Commitments.</h2>
                <p class="cta-section__dec">Start your 30-day free trial. Cancel anytime.</p>
              </div>
              <div class="cta-section__btn">
                <a href="{{ route('contact-us') }}" class="rr-btn">
                  <span class="btn-wrap">
                    <span class="text-one">view our demo</span>
                    <span class="text-two">view our demo</span>
                  </span>
                </a>
                <a href="{{ route('contact-us') }}" class="rr-btn rr-btn-3">
                  <span class="btn-wrap">
                    <span class="text-one">start free trial now</span>
                    <span class="text-two">start free trial now</span>
                  </span>
                </a>
              </div>
              <div class="cta-section__list">
                <ul>
                  <li><i class="fa-regular fa-angles-right"></i> 14-day free trial</li>
                  <li><i class="fa-regular fa-angles-right"></i> No credit card required</li>
                </ul>
              </div>
            </div>
          </div>
        </section>


@endsection