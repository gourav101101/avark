@extends('layouts.app')

@section('title', 'Enterprise Support Management')
@section('meta_description', 'Enterprise Support Management')
@section('meta_keywords', 'home, Enterprise Support Management')

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

          <li> Enterprise Support Management </li>
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
              <li><a href="{{route('dialysis-management')}}">Dialysis Management System</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('enterprise-support-management')}}">Business Marketing Tool </a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('opd-management-system')}}">OPD Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('industrial-asset-management')}}">Industrial Asset Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-12">
        <div class="service-details__content">
          <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Centralized Support. Faster Resolution. Smarter Operations.</h2>
          <p class="desc" data-aos="fade-up" data-aos-duration="900">Empower your organization with Enterprise Support Management, a comprehensive solution designed to streamline support operations, manage service requests, and improve response times across departments.</p>

          <p class="desc" data-aos="fade-up" data-aos-duration="900">Deliver structured support workflows, real-time tracking, and measurable performance insights — all from one unified platform.</p>

          <div class="service-details__top">
            <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
              <img src="assets/imgs/inner/service-detils/p2.png" alt="img">
            </div>
          </div>

          <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Product Overview</h2>
          <p data-aos="fade-up" data-aos-duration="900">Enterprise Support Management enables businesses to manage internal and external support requests efficiently.</p>

          <p data-aos="fade-up" data-aos-duration="900">From ticket creation and issue tracking to escalation management and reporting — every support process is automated and centrally monitored.</p>
          <p data-aos="fade-up" data-aos-duration="900">Whether handling IT support, customer service, technical assistance, or enterprise-level service requests, the platform ensures smooth coordination and faster issue resolution.

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
              <li><i class="fa-solid fa-angles-right"></i>Corporate Enterprises</li>
              <li><i class="fa-solid fa-angles-right"></i>IT Support Teams</li>
              <li><i class="fa-solid fa-angles-right"></i>SaaS Companies</li>
              <li><i class="fa-solid fa-angles-right"></i>Multi-Branch Organizations</li>
              <li><i class="fa-solid fa-angles-right"></i>Service-Based Businesses</li>
            </ul>
          </div>
          <div class="col-md-6">
            <div>
              <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Why Choose Enterprise Support Management?</h2>
              <ul>
                <li> <i class="fa-regular fa-angle-right"></i> Easy-to-Use Dashboard </li>
                <li> <i class="fa-regular fa-angle-right"></i> Customizable Workflows </li>
                <li> <i class="fa-regular fa-angle-right"></i> Secure & Scalable Architecture </li>
                <li> <i class="fa-regular fa-angle-right"></i> Automated Notifications & Alerts </li>
                <li> <i class="fa-regular fa-angle-right"></i> Dedicated Technical Support </li>
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
        <h2 class="title rr-title-anim-1 white">Ready to Optimize Your Support Operations? </h2>
        <p class="cta-section__dec">Improve service efficiency, increase accountability, and deliver better support experiences. </p>
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
                What is Enterprise Support Management?
              </button>
            </h2>

            <div id="collapseOne" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Enterprise Support Management is a centralized platform that helps organizations manage service requests, support tickets, escalations, and issue resolution across multiple departments. It ensures structured workflows, faster response times, and improved service efficiency.
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
                Can the system handle multiple departments and teams?
              </button>
            </h2>

            <div id="collapseTwo" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Yes. The solution supports multi-department and multi-team environments. Tickets can be automatically assigned based on category, priority, or SLA rules, ensuring smooth collaboration and efficient workload distribution.
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
                Does it provide SLA tracking and performance reports?
              </button>
            </h2>

            <div id="collapseThree" class="accordion-collapse collapse"
              data-bs-parent="#accordionExample">
              <div class="accordion-body text-muted text-justify">
                Absolutely. The platform includes SLA management, escalation rules, and detailed analytics dashboards. Organizations can monitor response times, resolution rates, team performance, and overall service quality in real time.
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>


@endsection