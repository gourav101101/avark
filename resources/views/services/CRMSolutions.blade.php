    @extends('layout.app')

    @section('title', 'CRM Solutions')
    @section('meta_description', 'CRM Solutions')
    @section('meta_keywords', 'home, CRM Solutions')

    @section('content')

    <!-- breadcrumb-section -->
            <section class="breadcrumb-section__area ">
            <div class=" container rr-container-1900">
                <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
                <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                    <h3 class="breadcrumb-section__title">Service</h3>
                    <ul class="breadcrumb-section__page">
                    <li><a href="index.html">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li> Service <i class="fa-regular fa-angle-right"></i></li>
                    <li> CRM Solutions</li>
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
                    <img src="assets/imgs/inner/service-detils/crm-services-kp.png" alt="img">
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
                        <img src="assets/imgs/inner/service-detils/crmkp02.webp" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="service-details__content">
                    <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Drive Growth with Intelligent CRM Solutions</h2>
                    <p class="desc" data-aos="fade-up" data-aos-duration="900">Our CRM platform helps businesses streamline communication, automate sales processes, and enhance customer engagement. By organizing every customer touchpoint in one place, you can ensure faster response times, improved conversions, and long-term customer loyalty.</p>

                        <p class="desc" data-aos="fade-up" data-aos-duration="900">Our CRM Service is designed to centralize and optimize your entire customer lifecycle—from lead generation to deal closure and post-sales support. Instead of relying on spreadsheets or disconnected systems, CRM connects your marketing, sales, and support teams into a single intelligent ecosystem.</p>

                    <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Detailed Description</h2>
                    <p data-aos="fade-up" data-aos-duration="900">Our CRM Service is designed to centralize and optimize your entire customer lifecycle—from lead generation to deal closure and post-sales support. Instead of relying on spreadsheets or disconnected systems, CRM connects your marketing, sales, and support teams into a single intelligent ecosystem.</p>

                        <p data-aos="fade-up" data-aos-duration="900">Our CRM Service is designed to centralize and optimize your entire customer lifecycle—from lead generation to deal closure and post-sales support. Instead of relying on spreadsheets or disconnected systems, CRM connects your marketing, sales, and support teams into a single intelligent ecosystem.</p>

                    <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">Key Benefits :</h2>

                    <ul data-aos="fade-up" data-aos-duration="900">
                        <li><i class="fa-solid fa-angles-right"></i>Centralized customer data and interaction history</li>
                        <li><i class="fa-solid fa-angles-right"></i>Real-time sales pipeline tracking
                        </li>
                        <li><i class="fa-solid fa-angles-right"></i>Automated follow-ups and task reminders</li>
                        <li><i class="fa-solid fa-angles-right"></i>Improved customer engagement and retention</li>
                        <li><i class="fa-solid fa-angles-right"></i>Better sales forecasting and performance analysis</li>
                        <li><i class="fa-solid fa-angles-right"></i>Scalable CRM solution that grows with your business</li>
                    </ul>

                    <h2 class="title rr-title-anim-1">Core Features:</h2>

                    <div class="features" data-aos="fade-up" data-aos-duration="900">
                        <ul>
                        <li><i class="fa-solid fa-angles-right"></i><span>Lead & Contact Management</span></li>
                        <li><i class="fa-solid fa-angles-right"></i><span>Sales Pipeline & Opportunity Tracking</span></li>
                        <li><i class="fa-solid fa-angles-right"></i><span>Marketing Automation Tools</span></li>
                        <li><i class="fa-solid fa-angles-right"></i><span>Email & Communication Integration</span></li>
                        <li><i class="fa-solid fa-angles-right"></i><span>Task & Activity Management </span></li>
                        <li><i class="fa-solid fa-angles-right"></i><span>Customer Support & Ticket Management </span></li>
                        <li><i class="fa-solid fa-angles-right"></i><span>Advanced Reporting & Analytics Dashboard </span></li>
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
                    <h2 class="title rr-title-anim-1 white">Connect With Avark CRM Experts</h2>
                    <p class="cta-section__dec">Transform Your Customer Relationships Today</p>
                </div>
                <div class="cta-section__btn">
                    <a href="#" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Request a Free Consultation</span>
                        <span class="text-two">Request a Free Consultation</span>
                    </span>
                    </a>
                </div>
                <div class="cta-section__list">
                    <ul>
                    <li><i class="fa-regular fa-angles-right"></i> Industry-Specific Customization </li>
                    <li><i class="fa-regular fa-angles-right"></i> Secure & Scalable Cloud Deployment </li>
                    </ul>
                </div>
                </div>
            </div>
            </section>
    @endsection