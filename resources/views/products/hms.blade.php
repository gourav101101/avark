@extends('layouts.app')

@section('title', 'Advance Hospital Management System')
@section('meta_description', 'Advance Hospital Management')
@section('meta_keywords', 'home, Advance Hospital Management System')

@section('content')

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
  <div class=" container rr-container-1900">
    <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
      <div class="breadcrumb-section__content text_center breadcrumb-section__space">
        <h3 class="breadcrumb-section__title">Products</h3>
        <ul class="breadcrumb-section__page">
          <li><a href="index.html">Home <i class="fa-regular fa-angle-right"></i></a></li>
          <li> Products <i class="fa-regular fa-angle-right"></i> </li>
          <li> Advance HMS </li>
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
              <li><a href="{{route('kiosk-management-system')}}">KIOSK Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('feedback-management')}}">Feedback Management</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('ark-cloud-cast')}}">ARK Cloud Cast</a><span><i class="fa-solid fa-angles-right"></i></span></li>
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
          <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Streamline Hospital Operations with Intelligent HMS Solutions</h2>
          <p class="desc" data-aos="fade-up" data-aos-duration="900">Transform the way your hospital or clinic operates with a powerful Hospital Management System (HMS). Our solution integrates all critical hospital processes—patient registration, OPD/IPD management, billing, pharmacy, laboratory, HR, and administration—into one unified platform.</p>

          <p class="desc" data-aos="fade-up" data-aos-duration="900">Gain real-time visibility, improve coordination between departments, reduce paperwork, and deliver better patient care with confidence.</p>

          <div class="service-details__top">
            <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
              <img src="assets/imgs/inner/service-detils/p2.png" alt="img">
            </div>
          </div>

          <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Detailed Description</h2>
          <p data-aos="fade-up" data-aos-duration="900">Our Hospital Management System is designed to centralize and automate your entire healthcare ecosystem. Instead of managing multiple disconnected systems and manual records, HMS connects every department into a single intelligent digital platform.</p>

          <p data-aos="fade-up" data-aos-duration="900">From patient admission to discharge, billing to inventory management, laboratory reports to pharmacy tracking—everything is managed efficiently within one system.</p>

          <p data-aos="fade-up" data-aos-duration="900">Improve operational efficiency, reduce errors, eliminate data silos, and empower your medical and administrative teams with accurate, real-time insights—all in one secure platform.</p>
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
        <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Streamline Healthcare with Intelligent HMS</h2>
        <p class="desc" data-aos="fade-up" data-aos-duration="900">Transform your healthcare facility with a system that simplifies operations and enhances patient experience.</p>

        <p class="desc" data-aos="fade-up" data-aos-duration="900">Our Hospital Management System ensures smooth coordination between reception, doctors, nurses, pharmacy, laboratory, and accounts—creating a seamless workflow across departments.</p>

      </div>
    </div>

    <div class="col-lg-12 col-12">
      <div class="service-details__content">
        <div class="row">
          <div class="col-md-6">
            <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Key Features of Our Hospital Management System </h2>

            <ul data-aos="fade-up" data-aos-duration="900">
              <li><i class="fa-solid fa-angles-right"></i>Patient Registration & Appointment Scheduling</li>
              <li><i class="fa-solid fa-angles-right"></i>OPD & IPD Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Pharmacy & Inventory Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Laboratory Management System (LMS)</li>
              <li><i class="fa-solid fa-angles-right"></i>Billing & Insurance Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Doctor & Staff Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Reports & Analytics Dashboard</li>
              <li><i class="fa-solid fa-angles-right"></i>Secure Patient Data & Compliance Support</li>
            </ul>
          </div>
          <div class="col-md-6">
            <div>
              <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Why Choose Our HMS?</h2>
              <ul>
                <li> <i class="fa-regular fa-angle-right"></i> Faster Patient Processing</li>
                <li> <i class="fa-regular fa-angle-right"></i> Reduced Administrative Burden</li>
                <li> <i class="fa-regular fa-angle-right"></i> Real-Time Data Access</li>
                <li> <i class="fa-regular fa-angle-right"></i> Improved Financial Transparency</li>
                <li> <i class="fa-regular fa-angle-right"></i> Enhanced Patient Satisfaction</li>
                <li> <i class="fa-regular fa-angle-right"></i> Scalable for Clinics, Multi-Specialty Hospitals & Healthcare Chains </li>
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
        <h2 class="title rr-title-anim-1 white">Experience Smart Hospital Management<br> — Risk Free</h2>
        <p class="cta-section__dec">Digitize your hospital operations, streamline patient management, and improve efficiency — all from one powerful platform.</p>
      </div>
      <div class="cta-section__btn">
        <a href="{{ route ('contact-us') }}" class="rr-btn">
          <span class="btn-wrap">
            <span class="text-one">view our demo</span>
            <span class="text-two">view our demo</span>
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
                What is a Hospital Management System and why does my hospital need it?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                A Hospital Management System (HMS) integrates all core hospital functions such as patient registration,
                billing, pharmacy, laboratory, HR, and administration into one centralized platform.
                It improves efficiency, reduces paperwork, eliminates errors, and enhances patient care
                with real-time data access.
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
                Can the HMS be customized for my hospital?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. Our HMS solution is fully customizable according to your hospital size, specialties,
                and operational requirements. Whether you run a clinic, diagnostic center,
                or multi-specialty hospital, we tailor modules and workflows to match your exact needs.
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
                How long does HMS implementation take?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Implementation time depends on the size and complexity of your hospital.
                Small clinics can go live within a few days, while larger hospitals may require
                a few weeks for full setup, integration, and staff training.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>






@endsection