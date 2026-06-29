@extends('layouts.app')

@section('title', 'White Label Practice Management Application')
@section('meta_description', 'White Label Practice Management Application')
@section('meta_keywords', 'home, White Label Practice Management Application')

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

          <li> White Label Practice Management Application </li>
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
          <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Launch Your Own Branded Healthcare Platform</h2>
          <p class="desc" data-aos="fade-up" data-aos-duration="900">Build and scale your own branded healthcare solution with our White Label Practice Management Application. Designed for clinics, hospitals, and healthcare startups, this platform allows you to offer a fully customized practice management system under your own brand name.</p>

          <p class="desc" data-aos="fade-up" data-aos-duration="900">Deliver powerful features, seamless workflows, and modern digital tools — all with your logo, domain, and identity.</p>

          <div class="service-details__top">
            <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
              <img src="assets/imgs/inner/service-detils/p2.png" alt="img">
            </div>
          </div>

          <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Product Overview</h2>
          <p data-aos="fade-up" data-aos-duration="900">The White Label Practice Management Application enables healthcare organizations and service providers to deploy a complete practice management platform without building from scratch.</p>

          <p data-aos="fade-up" data-aos-duration="900">From appointment scheduling and patient records to billing, prescriptions, and reporting — everything can be customized and branded as your own product.</p>
          <p data-aos="fade-up" data-aos-duration="900">It is ideal for healthcare IT providers, medical consultants, hospital groups, and entrepreneurs who want to enter the healthcare SaaS market quickly and efficiently.

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
              <li><i class="fa-solid fa-angles-right"></i>Custom Branding (Logo, Domain, Theme)</li>
              <li><i class="fa-solid fa-angles-right"></i>Appointment & Scheduling Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Electronic Medical Records (EMR)</li>
              <li><i class="fa-solid fa-angles-right"></i>Billing & Invoicing</li>
              <li><i class="fa-solid fa-angles-right"></i>Prescription Management</li>
              <li><i class="fa-solid fa-angles-right"></i>Role-Based Access Control</li>
              <li><i class="fa-solid fa-angles-right"></i>Multi-Clinic / Multi-Doctor Support</li>
              <li><i class="fa-solid fa-angles-right"></i>Secure Cloud Deployment</li>
              <li><i class="fa-solid fa-angles-right"></i>Multi-Branch Support</li>
              <li><i class="fa-solid fa-angles-right"></i>Reports & Analytics Dashboard</li>
            </ul>
          </div>
          <div class="col-md-6">
            <div>
              <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">How It Helps Your Organization</h2>
              <ul>
                <li> <i class="fa-regular fa-angle-right"></i> Faster Market Launch </li>
                <li> <i class="fa-regular fa-angle-right"></i> Complete Brand Ownership </li>
                <li> <i class="fa-regular fa-angle-right"></i> New Revenue Opportunities </li>
                <li> <i class="fa-regular fa-angle-right"></i> Scalable Cloud Infrastructure </li>
                <li> <i class="fa-regular fa-angle-right"></i> Secure & Reliable </li>
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
        <h2 class="title rr-title-anim-1 white">Ready to Launch Your Own Healthcare Platform?</h2>
        <p class="cta-section__dec">Start your journey with a ready-to-deploy, branded practice management solution.</p>
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
                What is a White Label Practice Management Application?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                A White Label Practice Management Application is a ready-to-deploy healthcare platform that can be fully rebranded with your own logo, domain, and business identity. It allows you to offer practice management services under your brand without developing the software from scratch.
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
                Can I customize the features according to my business requirements?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. The application is fully customizable. You can configure modules such as appointment scheduling, billing, EMR, user roles, reports, and workflows based on your target market and operational needs.
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
                Is the platform scalable for multiple clinics or clients?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Absolutely. The solution supports multi-clinic and multi-user environments. You can manage multiple doctors, branches, or client accounts from a centralized dashboard, making it ideal for growing healthcare businesses or SaaS providers.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>


@endsection
