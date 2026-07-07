@extends('layouts.app')

@section('title', 'Our Valued Partners')
@section('meta_description', 'Building Strong Partnerships for Better Digital Solutions')
@section('meta_keywords', 'partners, avark, healthcare technology, digital solutions')

@section('content')

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
    <div class="breadcrumb-section__content text_center breadcrumb-section__space">
        <h3 class="breadcrumb-section__title">Our Valued Partners</h3>
        <ul class="breadcrumb-section__page">
            <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
            <li>Partners</li>
        </ul>
    </div>
</section>

<!-- About Partners Section -->
<section class="about-section section-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="section-title">Building Strong Partnerships for Better Digital Solutions</h2>
                    <p class="mt-4">
                        At <strong>Avark Healthcare Technology Pvt. Ltd.</strong>, we believe that strong partnerships are the foundation of innovation and long-term success.
                    </p>
                    <p>
                        Our trusted partners play a vital role in helping us deliver world-class healthcare technology solutions, enterprise software, and digital transformation services. Through collaboration with hospitals, healthcare organizations, technology providers, and industry experts, we continue to create innovative solutions that improve operational efficiency and patient care.
                    </p>
                    <p>
                        Together, we are building a smarter, more connected, and technology-driven future.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 mt-3 mt-lg-0">
                    <div class="col-md-12">
                        <div class="service-card p-4 rounded shadow-sm bg-white" style="border-left: 4px solid #198754;">
                            <h4>⚡ Fast Services</h4>
                            <p class="mb-0">We collaborate with trusted partners to deliver innovative, reliable, and efficient technology solutions across healthcare and enterprise industries.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-card p-4 rounded shadow-sm bg-white" style="border-left: 4px solid #198754;">
                            <h4>🔍 Transparency</h4>
                            <p class="mb-0">Our partnerships are built on transparency, integrity, and long-term collaboration, ensuring consistent value for our clients.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="service-card p-4 rounded shadow-sm bg-white" style="border-left: 4px solid #198754;">
                            <h4>🤝 Trustable</h4>
                            <p class="mb-0">We proudly work with leading organizations, technology providers, healthcare institutions, and business partners who share our commitment to quality and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Network Section -->
<section class="services-section bg-light section-spacing py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Partner Network</h2>
            <p>We proudly collaborate with organizations across various industries.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <ul class="list-group list-group-flush shadow-sm rounded">
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Hospitals & Multi-Specialty Centers</li>
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Diagnostic & Pathology Labs</li>
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Clinics & Medical Practices</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <ul class="list-group list-group-flush shadow-sm rounded">
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Technology & Cloud Providers</li>
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Healthcare Equipment Suppliers</li>
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Government Health Organizations</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <ul class="list-group list-group-flush shadow-sm rounded">
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Educational Institutions</li>
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Corporate Enterprises</li>
                    <li class="list-group-item py-3"><i class="fa-solid fa-check text-success me-2"></i> Digital Transformation Partners</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Partnerships Matter Section -->
<section class="benefits-section section-spacing py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Why Our Partnerships Matter</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="p-4 border rounded h-100 bg-white shadow-sm">
                    <h4 class="mb-3 text-success">Innovation Through Collaboration</h4>
                    <p>Working together with industry leaders enables us to continuously improve our products and introduce innovative technologies.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 border rounded h-100 bg-white shadow-sm">
                    <h4 class="mb-3 text-success">Better Customer Experience</h4>
                    <p>Our partner ecosystem allows us to deliver comprehensive, integrated, and customer-focused solutions that meet evolving business needs.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 border rounded h-100 bg-white shadow-sm">
                    <h4 class="mb-3 text-success">Trusted Technology</h4>
                    <p>We collaborate with reliable technology providers to ensure our software solutions remain secure, scalable, and future-ready.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="p-4 border rounded h-100 bg-white shadow-sm">
                    <h4 class="mb-3 text-success">Nationwide Support</h4>
                    <p>Our growing network of partners enables us to provide timely implementation, training, and support services across India and beyond.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Logos Section -->
<section class="brand-section pt-5 pb-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="section-title">Partner Logos</h3>
            <p class="text-muted"><em>(Partner logos will be displayed here.)</em></p>
        </div>
        <div class="row justify-content-center align-items-center opacity-50">
            <!-- Placeholders for logos -->
            <div class="col-lg-2 col-md-4 col-6 text-center mb-4"><i class="fa-brands fa-aws fa-3x text-muted"></i></div>
            <div class="col-lg-2 col-md-4 col-6 text-center mb-4"><i class="fa-brands fa-microsoft fa-3x text-muted"></i></div>
            <div class="col-lg-2 col-md-4 col-6 text-center mb-4"><i class="fa-brands fa-google fa-3x text-muted"></i></div>
            <div class="col-lg-2 col-md-4 col-6 text-center mb-4"><i class="fa-brands fa-docker fa-3x text-muted"></i></div>
            <div class="col-lg-2 col-md-4 col-6 text-center mb-4"><i class="fa-brands fa-digital-ocean fa-3x text-muted"></i></div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section__area">
    <div class="container rr-container-1350">
        <div class="cta-section__wrapper" data-background="{{ asset('assets/imgs/home-3/shape/cta-3-bg.png') }}">
            <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title white"><img class="left-shape" src="{{ asset('assets/imgs/home-3/shape/shape-left-white.png') }}"
                        alt="image">Connect With Us <img class="right-shape"
                        src="{{ asset('assets/imgs/home-3/shape/shape-right-white.png') }}" alt="image"></h2>
                <h2 class="title rr-title-anim-1 white">Request for a Quote</h2>
                <p class="cta-section__dec">Interested in our solutions or partnership opportunities?<br>Contact us today and our team will get in touch with you.</p>
            </div>
            <div class="cta-section__btn">
                <a href="{{ route('contact-us') }}" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Fill Contact Form</span>
                        <span class="text-two">Fill Contact Form</span>
                    </span>
                </a>
                <a href="{{ route('contact-us') }}" class="rr-btn rr-btn-3">
                    <span class="btn-wrap">
                        <span class="text-one">Let's Talk</span>
                        <span class="text-two">Let's Talk</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
