@extends('layouts.app')

@section('title', 'Dialysis Management System')
@section('meta_description', 'Dialysis Management System')
@section('meta_keywords', 'home, Dialysis Management System')

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

          <li> Dialysis Management System </li>
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
              <li><a href="{{route('ark-cloud-cast')}}">ARK Cloud Cast</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('inventory-stock management')}}">Inventory or Stock Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a><span><i class="fa-solid fa-angles-right"></i></span></li>
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
          <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Simplify and Streamline Dialysis Center Operations</h2>
          <p class="desc" data-aos="fade-up" data-aos-duration="900">Enhance operational efficiency and patient care with our advanced Dialysis Management System. Designed specifically for dialysis centers and hospitals, this solution helps manage patient records, treatment schedules, machine allocation, billing, and reporting from one centralized platform.</p>

          <p class="desc" data-aos="fade-up" data-aos-duration="900">Deliver consistent, accurate, and well-organized dialysis care with confidence.</p>

          <div class="service-details__top">
            <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
              <img src="assets/imgs/inner/service-detils/p2.png" alt="img">
            </div>
          </div>

          <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Product Overview</h2>
          <p data-aos="fade-up" data-aos-duration="900">The Dialysis Management System is built to automate and optimize day-to-day dialysis operations.</p>

          <p data-aos="fade-up" data-aos-duration="900">From patient registration and session scheduling to treatment monitoring and billing — every step is digitally managed to reduce paperwork, prevent errors, and improve workflow coordination.</p>
          <p data-aos="fade-up" data-aos-duration="900">The system ensures seamless communication between doctors, nurses, technicians, and administrative staff.

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
              <li><i class="fa-solid fa-angles-right"></i>Patient Registration & Medical History Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Dialysis Session Scheduling</li>
              <li><i class="fa-solid fa-angles-right"></i>Machine Allocation & Tracking</li>
              <li><i class="fa-solid fa-angles-right"></i>Treatment Monitoring & Record Keeping</li>
              <li><i class="fa-solid fa-angles-right"></i>Doctor & Technician Notes</li>
              <li><i class="fa-solid fa-angles-right"></i>Billing & Payment Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Inventory Tracking for Consumables</li>
              <li><i class="fa-solid fa-angles-right"></i>Real-Time Reports & Analytics</li>
              <li><i class="fa-solid fa-angles-right"></i>Multi-Center Support</li>
            </ul>
          </div>
          <div class="col-md-6">
            <div>
              <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">How It Helps Your Organization</h2>
              <ul>
                <li> <i class="fa-regular fa-angle-right"></i> Organized Treatment Scheduling </li>
                <li> <i class="fa-regular fa-angle-right"></i> Accurate Patient Records </li>
                <li> <i class="fa-regular fa-angle-right"></i> Integrated Billing </li>
                <li> <i class="fa-regular fa-angle-right"></i> Machine & Resource Optimization </li>
                <li> <i class="fa-regular fa-angle-right"></i> Performance Monitoring </li>
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
        <h2 class="title rr-title-anim-1 white">Ready to Improve Dialysis Operations? </h2>
        <p class="cta-section__dec">Streamline patient care, optimize resources, and enhance efficiency with a smart dialysis management solution. </p>
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
                What is a Dialysis Management System?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                A Dialysis Management System is a specialized digital solution designed to manage dialysis center operations efficiently. It helps handle patient records, treatment scheduling, machine allocation, session monitoring, billing, and reporting through a centralized platform.
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
                Can the system track dialysis sessions and machine usage?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. The system allows you to schedule dialysis sessions, assign machines, and track usage in real time. It also maintains detailed treatment records, ensuring accurate monitoring and better resource utilization.
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
                Is the system suitable for multi-center dialysis networks?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Absolutely. The Dialysis Management System supports multi-center operations, allowing centralized monitoring and reporting across different branches. This makes it ideal for growing dialysis chains and hospital networks.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>


@endsection