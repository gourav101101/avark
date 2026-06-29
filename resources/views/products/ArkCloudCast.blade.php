@extends('layouts.app')

@section('title', 'ARK Cloud Cast')
@section('meta_description', 'ARK Cloud Cast')
@section('meta_keywords', 'home, ARK Cloud Cast')

@section('content')

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
  <div class=" container rr-container-1900">
    <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
      <div class="breadcrumb-section__content text_center breadcrumb-section__space">
        <h3 class="breadcrumb-section__title">Products</h3>
        <ul class="breadcrumb-section__page">
          <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
          <li> Products <i class="fa-regular fa-angle-right"></i> </li>
          <li> ARK Cloud Cast</li>
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
        <img src="assets/imgs/inner/service-detils/p1.jpg" alt="img">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="service-details-sidebar" data-aos="fade-up" data-aos-duration="900">
          <h4 class="title">Product Categories</h4>
          <div class="service-details-sidebar-categories">
            <ul>
              <li><a href="{{route('hms')}}">Advance Hospital Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('kiosk-management-system')}}">KIOSK Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('feedback-management')}}">Feedback Management</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('inventory-stock management')}}">Inventory or Stock Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('dialysis-management')}}">Dialysis Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('enterprise-support-management')}}">Business Marketing Tool </a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('opd-management-system')}}">OPD Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('digital-signage-solutions')}}">Digital Signages </a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('industrial-asset-management')}}">Industrial Asset Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-12">
        <div class="service-details__content">
          <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Secure, Scalable & Smart Cloud Broadcasting Solution</h2>
          <p class="desc" data-aos="fade-up" data-aos-duration="900">Empower your organization with ARK Cloud Cast, a powerful cloud-based platform designed for seamless content delivery, secure data streaming, and centralized cloud management.</p>

          <p class="desc" data-aos="fade-up" data-aos-duration="900">Stream, manage, and distribute your digital assets effortlessly — anytime, anywhere.</p>

          <div class="service-details__top">
            <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
              <img src="assets/imgs/inner/service-detils/p2.png" alt="img">
            </div>
          </div>

          <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Product Overview</h2>
          <p data-aos="fade-up" data-aos-duration="900">ARK Cloud Cast is a modern cloud-powered solution that enables businesses to host, manage, and broadcast content securely across multiple devices and locations.</p>

          <p data-aos="fade-up" data-aos-duration="900">Whether it’s internal communication, digital displays, announcements, training sessions, or multimedia broadcasting — ARK Cloud Cast ensures smooth, reliable, and real-time content delivery.</p>
          <p data-aos="fade-up" data-aos-duration="900">With centralized control and scalable infrastructure, you can manage everything from a single dashboard.</p>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="service-details">
  <div class="container rr-container-1350">
    <div class="row">

      <div class="col-lg-4 col-12">
        <div class="service-details__top">
          <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/inner/service-detils/p3.png" alt="img">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="service-details__top">
          <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/inner/service-detils/p3.png" alt="img">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="service-details__top">
          <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
            <img src="assets/imgs/inner/service-detils/p3.png" alt="img">
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-12">
      <div class="service-details__content">
        <div class="row">
          <div class="col-md-6">
            <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Key Features </h2>

            <ul data-aos="fade-up" data-aos-duration="900">
              <li><i class="fa-solid fa-angles-right"></i>Cloud-Based Content Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Real-Time Streaming & Broadcasting</li>
              <li><i class="fa-solid fa-angles-right"></i>Multi-Device & Multi-Location Support</li>
              <li><i class="fa-solid fa-angles-right"></i>Secure Data Encryption</li>
              <li><i class="fa-solid fa-angles-right"></i>Centralized Admin Dashboard</li>
              <li><i class="fa-solid fa-angles-right"></i>Role-Based Access Control</li>
              <li><i class="fa-solid fa-angles-right"></i>Automated Scheduling & Content Updates</li>
              <li><i class="fa-solid fa-angles-right"></i>Scalable Infrastructure</li>
              <li><i class="fa-solid fa-angles-right"></i>Performance & Usage Analytics</li>
            </ul>
          </div>
          <div class="col-md-6">
            <div>
              <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">How It Helps Your Organization</h2>
              <ul>
                <li> <i class="fa-regular fa-angle-right"></i> Centralized Cloud Control</li>
                <li> <i class="fa-regular fa-angle-right"></i> Real-Time Delivery</li>
                <li> <i class="fa-regular fa-angle-right"></i> Secure & Reliable</li>
                <li> <i class="fa-regular fa-angle-right"></i> Smart Analytics</li>
                <li> <i class="fa-regular fa-angle-right"></i> Access Anywhere</li>
              </ul>
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
        <h2 class="title rr-title-anim-1 white">Ready to Transform Your Cloud Broadcasting?</h2>
        <p class="cta-section__dec">Take control of your digital content with ARK Cloud Cast.</p>
      </div>
      <div class="cta-section__btn">
        <a href="{{ route ('contact-us') }}" class="rr-btn">
          <span class="btn-wrap">
            <span class="text-one">Request a Demo</span>
            <span class="text-two">Request a Demo</span>
          </span>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="cta-section__area py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">

        <div class="accordion" id="accordionExample">

          <!-- Item 1 -->
          <div class="accordion-item mb-3 border-0 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="false"
                aria-controls="collapseOne">
                What is ARK Cloud Cast and how does it work?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                ARK Cloud Cast is a cloud-based content broadcasting and management platform that allows organizations to securely stream, manage, and distribute digital content across multiple devices and locations. It operates through a centralized dashboard, enabling real-time content updates and scheduling from anywhere.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item mb-3 border-0 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo">
                Is ARK Cloud Cast secure for enterprise use?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. ARK Cloud Cast is built with secure cloud architecture, encrypted data transmission, and role-based access control. This ensures that only authorized users can manage or broadcast content, making it suitable for enterprise-level deployments.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item border-0 shadow-sm">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree">
                Can ARK Cloud Cast support multiple locations and devices?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Absolutely. The platform is designed to support multi-location and multi-device environments. Whether you operate across branches, offices, or digital display networks, ARK Cloud Cast allows centralized control and seamless content synchronization.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>






@endsection
