@extends('layouts.app')

@section('title', 'Pathology Diagnostic Management')
@section('meta_description', 'Pathology Diagnostic Management')
@section('meta_keywords', 'home, Pathology Diagnostic Management')

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
          <li> Pathology Diagnostic Management </li>
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
          <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Streamline Laboratory Operations with Accuracy & Efficiency</h2>
          <p class="desc" data-aos="fade-up" data-aos-duration="900">Digitize and simplify your laboratory workflow with our advanced Pathology & Diagnostic Management System. From test booking and sample collection to report generation and billing — manage every process efficiently from one centralized platform.</p>

          <p class="desc" data-aos="fade-up" data-aos-duration="900">Improve turnaround time, reduce manual errors, and deliver accurate reports with confidence.</p>

          <div class="service-details__top">
            <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
              <img src="assets/imgs/inner/service-detils/p2.png" alt="img">
            </div>
          </div>

          <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Product Overview</h2>
          <p data-aos="fade-up" data-aos-duration="900">Our Pathology & Diagnostic Management System is designed to automate and manage complete laboratory operations.</p>

          <p data-aos="fade-up" data-aos-duration="900">It enables seamless coordination between front desk, lab technicians, pathologists, and billing departments. The system ensures accurate test records, automated report generation, and real-time status tracking.</p>
          <p data-aos="fade-up" data-aos-duration="900">Whether you operate a standalone diagnostic center or a multi-location laboratory chain, the solution is scalable and easy to use.</p>

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
              <li><i class="fa-solid fa-angles-right"></i>Test Booking & Registration</li>
              <li><i class="fa-solid fa-angles-right"></i>Sample Collection & Tracking</li>
              <li><i class="fa-solid fa-angles-right"></i>Barcode Integration</li>
              <li><i class="fa-solid fa-angles-right"></i>Test Package Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Automated Report Generation</li>
              <li><i class="fa-solid fa-angles-right"></i>Doctor & Patient Portal Access</li>
              <li><i class="fa-solid fa-angles-right"></i>Billing & Payment Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Real-Time Status Tracking</li>
              <li><i class="fa-solid fa-angles-right"></i>Multi-Branch Support</li>
              <li><i class="fa-solid fa-angles-right"></i>Detailed Reports & Analytics</li>
            </ul>
          </div>
          <div class="col-md-6">
            <div>
              <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">How It Helps Your Organization</h2>
              <ul>
                <li> <i class="fa-regular fa-angle-right"></i> Faster Report Processing </li>
                <li> <i class="fa-regular fa-angle-right"></i> Real-Time Tracking </li>
                <li> <i class="fa-regular fa-angle-right"></i> Improved Revenue Management </li>
                <li> <i class="fa-regular fa-angle-right"></i> Minimize Errors </li>
                <li> <i class="fa-regular fa-angle-right"></i> Easy Multi-Location Management </li>
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
        <h2 class="title rr-title-anim-1 white">Ready to Modernize Your Laboratory Operations?</h2>
        <p class="cta-section__dec">Enhance efficiency, accuracy, and patient satisfaction with a smarter diagnostic management solution.</p>
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
                What is a Pathology & Diagnostic Management System?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                A Pathology & Diagnostic Management System is a digital solution designed to manage laboratory operations efficiently. It helps handle test bookings, sample tracking, report generation, billing, and data management from a centralized platform, reducing manual work and improving accuracy.
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
                Can the system handle multiple tests and lab branches?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. The system supports multiple test types, customized test packages, and multi-branch operations. You can manage different laboratory locations from a single dashboard with centralized control and real-time data access.
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
                How does the system reduce errors in lab operations?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                The system minimizes errors through barcode-based sample tracking, automated data entry, and structured workflows. This ensures accurate test processing, secure report generation, and reliable patient records.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>






@endsection