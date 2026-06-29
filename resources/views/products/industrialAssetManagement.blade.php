@extends('layouts.app')

@section('title', 'Industrial Asset Management')
@section('meta_description', 'Industrial Asset Management')
@section('meta_keywords', 'home, Industrial Asset Management')

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
                    <li> Industrial Asset Management </li>
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
                            <li><a href="{{route('opd-management-system')}}">OPD Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
                            <li><a href="{{route('digital-signage-solutions')}}">Digital Signages </a><span><i class="fa-solid fa-angles-right"></i></span></li>
                            <li><a href="{{route('industrial-asset-management')}}">Industrial Asset Management System </a><span><i class="fa-solid fa-angles-right"></i></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="service-details__content">
                    <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Optimize Asset Performance. Maximize Operational Efficiency.</h2>
                    <p class="desc" data-aos="fade-up" data-aos-duration="900">Take full control of your industrial assets with our advanced Industrial Asset Management System. Monitor, maintain, and manage equipment, machinery, and infrastructure from a centralized digital platform.</p>

                    <p class="desc" data-aos="fade-up" data-aos-duration="900">Reduce downtime, improve asset lifecycle management, and enhance productivity with data-driven insights.</p>

                    <div class="service-details__top">
                        <div class="media aos-init aos-animate" data-aos="zoom-in" data-aos-duration="900">
                            <img src="assets/imgs/inner/service-detils/p2.png" alt="img">
                        </div>
                    </div>

                    <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Product Overview</h2>
                    <p data-aos="fade-up" data-aos-duration="900">The Industrial Asset Management System is designed to help organizations track and manage physical assets throughout their lifecycle — from procurement to maintenance and retirement.</p>

                    <p data-aos="fade-up" data-aos-duration="900">It enables preventive maintenance scheduling, real-time asset tracking, performance monitoring, and detailed reporting to ensure maximum operational uptime.</p>
                    <p data-aos="fade-up" data-aos-duration="900">Whether managing factory equipment, plant machinery, tools, or infrastructure — the system provides complete visibility and control. </p>

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
                            <li><i class="fa-solid fa-angles-right"></i>Asset Registration & Tracking</li>
                            <li><i class="fa-solid fa-angles-right"></i>Preventive & Corrective Maintenance Scheduling</li>
                            <li><i class="fa-solid fa-angles-right"></i>Work Order Management</li>
                            <li><i class="fa-solid fa-angles-right"></i>Asset Lifecycle Management</li>
                            <li><i class="fa-solid fa-angles-right"></i>Spare Parts & Inventory Integration</li>
                            <li><i class="fa-solid fa-angles-right"></i>QR Code / Barcode Asset Tagging</li>
                            <li><i class="fa-solid fa-angles-right"></i>Downtime & Performance Monitoring</li>
                            <li><i class="fa-solid fa-angles-right"></i>Multi-Location & Multi-Plant Support</li>
                            <li><i class="fa-solid fa-angles-right"></i>Reports & Analytics Dashboard</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">How It Helps Your Organization</h2>
                            <ul>
                                <li> <i class="fa-regular fa-angle-right"></i> Reduce Equipment Downtime </li>
                                <li> <i class="fa-regular fa-angle-right"></i> Real-Time Asset Visibility </li>
                                <li> <i class="fa-regular fa-angle-right"></i> Lower Maintenance Costs </li>
                                <li> <i class="fa-regular fa-angle-right"></i> Extend Asset Lifespan </li>
                                <li> <i class="fa-regular fa-angle-right"></i> Centralized Control </li>
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
                <h2 class="title rr-title-anim-1 white">Ready to Improve Asset Performance?</h2>
                <p class="cta-section__dec">Increase uptime, reduce operational risks, and manage assets smarter with a centralized digital solution.</p>
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
                                What is an Industrial Asset Management System?
                            </button>
                        </h2>

                        <div id="collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-muted text-justify">
                                An Industrial Asset Management System is a digital solution that helps organizations track, monitor, and manage physical assets such as machinery, equipment, tools, and infrastructure throughout their lifecycle. It ensures better maintenance planning, performance monitoring, and asset utilization.
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
                                Can the system manage preventive and corrective maintenance?
                            </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-muted text-justify">
                                Yes. The system supports both preventive and corrective maintenance scheduling. You can create automated maintenance plans, generate work orders, assign tasks to technicians, and track service history to reduce unexpected equipment breakdowns.
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
                                Is the system suitable for multi-location industrial operations?
                            </button>
                        </h2>

                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-muted text-justify">
                                Absolutely. The solution is designed to support multi-plant and multi-location environments. It provides centralized control, real-time asset visibility, and consolidated reporting across different facilities.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection
