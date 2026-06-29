@extends('layouts.app')

@section('title', 'ERP System Development')
@section('meta_description', 'ERP System Development')
@section('meta_keywords', 'home, ERP System Development')

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
                  <li> ERP System Development</li>
                </ul>
              </div>
            </div>
            <div class="breadcrumb-section__border"></div>
          </div>
        </section>


        <section class="service-details section-spacing">
          <div class="container rr-container-1350">
            <div class="service-details__top">
              <div class="media" data-aos="zoom-in" data-aos-duration="900">
                <img src="assets/imgs/inner/service-detils/kp-inner-2.png" alt="img">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-12">
                <div class="service-details-sidebar" data-aos="fade-up" data-aos-duration="900">
                  <h4 class="title">Service Categories</h4>
                  <div class="service-details-sidebar-categories">
                    <ul>
                        <li><a href="{{ route('erp-system') }}">ERP System Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('crm-solutions') }}">CRM Solutions</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('custom-software-development') }}">Custom Software Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('web-application-development') }}">Web Application Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('mobile-app-development') }}">Mobile App Development</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('cloud-and-data-migration') }}">Cloud & Data Migration</a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        <li><a href="{{ route('enterprise-integration-services') }}">Enterprise Integration Services </a><span><i class="fa-solid fa-angles-right"></i></span></li>
                      </ul>
                  </div>
                </div>
                 <div class="media" data-aos="fade-up" data-aos-duration="900">
                    <img src="assets/imgs/inner/service-detils/service-erp-kp-02.jpg" alt="img">
                  </div>
              </div>
              <div class="col-lg-8 col-12">
                <div class="service-details__content">
                  <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Streamline Operations with Intelligent ERP Solutions</h2>
                  <p class="desc" data-aos="fade-up" data-aos-duration="900">Transform the way your business operates with a powerful Enterprise Resource Planning system. 
                    Our ERP solution integrates all your core processes—finance, inventory, HR, sales, and operations—into one unified platform. Gain real-time visibility, 
                    improve collaboration, and make smarter decisions with confidence.</p>

                     <p class="desc" data-aos="fade-up" data-aos-duration="900">Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. 
                        Vesti at bulum nec at odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the consectetur elit.</p>


                  <div class="sideber" data-aos="fade-up" data-aos-duration="900" style="display: none;">
                    <h3 data-aos="fade-up" data-aos-duration="900">
                      Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum
                      nec at odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the
                      consectetur elit
                    </h3>
                    <div class="client-info-item" data-aos="fade-up" data-aos-duration="900">
                      <div class="client-info">
                        <div class="image">
                          <img src="assets/imgs/inner/blog-details/author.jpg" alt="img">
                        </div>
                        <h4>Michel Clarck</h4>
                      </div>
                      <div class="icon">
                        <i class="fa-regular fa-quote-right"></i>
                      </div>
                    </div>
                  </div>

                  <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Detailed Description</h2>
                  <p data-aos="fade-up" data-aos-duration="900">Our Customer Management Service is designed to simplify
                   Our ERP Service is designed to centralize and automate your entire business ecosystem. Instead of managing multiple disconnected systems,
                    ERP connects every department into a single intelligent platform.</p>

                     <p data-aos="fade-up" data-aos-duration="900">Improve efficiency, reduce operational costs,
                         eliminate data silos, and empower your team with accurate, 
                        up-to-date insights—all in one system.</p>

                  <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Key Benefits :</h2>

                  <ul data-aos="fade-up" data-aos-duration="900">
                    <li><i class="fa-solid fa-angles-right"></i>Centralized system integrating all departments</li>
                    <li><i class="fa-solid fa-angles-right"></i>Real-time business visibility and reporting
                    </li>
                    <li><i class="fa-solid fa-angles-right"></i>Automation to reduce manual errors</li>
                    <li><i class="fa-solid fa-angles-right"></i>Improved productivity and operational efficiency</li>
                    <li><i class="fa-solid fa-angles-right"></i>Better forecasting and data-driven decisions</li>
                    <li><i class="fa-solid fa-angles-right"></i>Scalable solution that grows with your business</li>
                  </ul>

                  <h2 class="title rr-title-anim-1">Core Features:</h2>

                  <div class="features" data-aos="fade-up" data-aos-duration="900">
                    <ul>
                      <li><i class="fa-solid fa-angles-right"></i><span>Unified Business Dashboard</span></li>
                      <li><i class="fa-solid fa-angles-right"></i><span>Financial Management</span></li>
                      <li><i class="fa-solid fa-angles-right"></i><span>Inventory & Supply Chain Management</span></li>
                      <li><i class="fa-solid fa-angles-right"></i><span>Automated Workflows </span></li>
                      <li><i class="fa-solid fa-angles-right"></i><span>HR & Payroll Automation </span></li>
                      <li><i class="fa-solid fa-angles-right"></i><span>Workflow Automation </span></li>
                      <li><i class="fa-solid fa-angles-right"></i><span>Advanced Reporting & Analytics </span></li>
                    </ul>

                  </div>

                  <div class="faq-2-area " style="display: none;">
                    <div class="faq-2-area-inner ">
                      <div class="accordion-wrapper fade-anim">
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              <span class="title"><span></span>What is an ERP system and why does my business need it? </span>
                            </button>

                            <div id="collapseOne" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p> An ERP (Enterprise Resource Planning) system integrates all core business functions—such as finance, HR, inventory, 
                                    sales, and operations—into one centralized platform. It eliminates data silos,
                                     improves efficiency, and provides real-time insights to help you make smarter business decisions. </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                              <span class="title"><span></span> Can the ERP system be customized for my industry? </span>
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>Yes. Our ERP solutions are fully customizable based on your industry requirements and business processes.
                                     Whether you operate in manufacturing, retail, healthcare, 
                                    or services, we tailor modules and workflows to match your operational needs.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <span class="title"><span></span> How long does ERP implementation take? </span>
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>The implementation timeline depends on the size and complexity of your organization. Typically, small to mid-sized businesses can go live within a few weeks, 
                                    while larger enterprises may require a phased rollout. 
                                    Our team ensures smooth deployment with minimal disruption.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="cta-section__area">
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
