    @extends('layouts.app')

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
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
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
                        <img src="{{ asset('assets/imgs/inner/service-detils/Solution-PNG.png') }}" alt="CRM Solutions">
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="service-details__content">
                    <h2 class="title rr-title-anim-1" data-aos="fade-up" data-aos-duration="900">CRM System</h2>
                    <p class="desc" data-aos="fade-up" data-aos-duration="900">A Customer Relationship Management (CRM) system is a software solution designed to manage and improve interactions with customers, prospects, and business partners.</p>
                    <p class="desc" data-aos="fade-up" data-aos-duration="900">CRM acts as a centralized platform to store, track, and analyze customer information, enabling organizations to build stronger relationships, improve customer satisfaction, and drive sustainable business growth.</p>
                    <p class="desc" data-aos="fade-up" data-aos-duration="900">By providing a complete view of customer interactions, CRM systems help businesses deliver personalized experiences, improve communication, and increase operational efficiency.</p>

                    <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Why Choose Our CRM Solutions?</h2>
                    <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                        <ul>
                            <li><i class="fa-solid fa-angles-right"></i><span><strong>Fast Services:</strong> We provide quick implementation, seamless deployment, and dedicated support to help businesses streamline customer management and accelerate growth.</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span><strong>Transparency:</strong> Our CRM solutions offer complete visibility into customer interactions, sales pipelines, and business performance, ensuring informed decision-making.</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span><strong>Trustable:</strong> Trusted by businesses across industries, our CRM platform is built to strengthen customer relationships while ensuring data security and reliability.</span></li>
                        </ul>
                    </div>

                    <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Key Aspects of CRM Systems</h2>
                    
                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Customer Data Management</h4>
                    <p data-aos="fade-up" data-aos-duration="900">Efficiently store, organize, and manage customer information, including:</p>
                    <ul data-aos="fade-up" data-aos-duration="900">
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Contact details</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Purchase history</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Communication records</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Customer preferences</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Interaction history</li>
                    </ul>
                    <p data-aos="fade-up" data-aos-duration="900">A centralized customer database enables quick access to information and improves collaboration across teams.</p>

                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Sales Automation</h4>
                    <p data-aos="fade-up" data-aos-duration="900">Streamline sales processes by managing:</p>
                    <ul data-aos="fade-up" data-aos-duration="900">
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Leads and prospects</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Opportunities and deals</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Sales pipelines</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Follow-ups and reminders</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Quotation and proposal management</li>
                    </ul>
                    <p data-aos="fade-up" data-aos-duration="900">Sales automation helps improve productivity and increases conversion rates.</p>

                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Marketing Automation</h4>
                    <p data-aos="fade-up" data-aos-duration="900">Create, manage, and execute targeted marketing campaigns with features such as:</p>
                    <ul data-aos="fade-up" data-aos-duration="900">
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Email marketing</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Campaign management</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Audience segmentation</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Lead nurturing</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Marketing analytics</li>
                    </ul>
                    <p data-aos="fade-up" data-aos-duration="900">Marketing automation enables businesses to engage customers more effectively and improve campaign performance.</p>

                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Customer Service & Support</h4>
                    <p data-aos="fade-up" data-aos-duration="900">Deliver exceptional customer experiences by efficiently handling:</p>
                    <ul data-aos="fade-up" data-aos-duration="900">
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Customer inquiries</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Complaint management</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Ticketing and issue resolution</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Service requests</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Customer feedback</li>
                    </ul>
                    <p data-aos="fade-up" data-aos-duration="900">A robust CRM system ensures timely support and improved customer satisfaction.</p>

                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Reporting & Analytics</h4>
                    <p data-aos="fade-up" data-aos-duration="900">Generate meaningful insights from customer data through:</p>
                    <ul data-aos="fade-up" data-aos-duration="900">
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Sales reports</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Customer behavior analysis</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Performance dashboards</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Revenue forecasting</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Business intelligence reports</li>
                    </ul>
                    <p data-aos="fade-up" data-aos-duration="900">Advanced analytics support better decision-making and strategic planning.</p>

                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Improved Customer Relationships</h4>
                    <p data-aos="fade-up" data-aos-duration="900">CRM systems help organizations better understand customer needs, preferences, and behaviors, enabling personalized interactions and stronger long-term relationships.</p>

                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Increased Sales</h4>
                    <p data-aos="fade-up" data-aos-duration="900">By improving sales efficiency, managing opportunities effectively, and identifying cross-selling and upselling opportunities, CRM systems contribute significantly to revenue growth.</p>

                    <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Features</h2>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Introduction to CRM</h4>
                            <ul data-aos="fade-up" data-aos-duration="900">
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Definition and importance of CRM systems.</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Understanding the role of CRM in modern businesses.</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> How CRM enhances customer engagement and business relationships.</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Key Features of CRM</h4>
                            <ul data-aos="fade-up" data-aos-duration="900">
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Customer Database Management</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Lead & Opportunity Management</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Sales Pipeline Tracking</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Marketing Automation</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Task & Activity Management</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Customer Support Management</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Reporting & Dashboards</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">Benefits of CRM</h4>
                            <ul data-aos="fade-up" data-aos-duration="900">
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Improved Customer Relationships</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Increased Customer Retention</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Enhanced Sales Performance</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Better Team Collaboration</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Increased Productivity</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Data-Driven Decision Making</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">CRM Implementation</h4>
                            <ul data-aos="fade-up" data-aos-duration="900">
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Business Requirement Analysis</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> CRM Configuration & Customization</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Data Migration</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> User Training</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Deployment & Go-Live</li>
                                <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Ongoing Support & Maintenance</li>
                            </ul>
                        </div>
                    </div>

                    <h4 class="mt-5" data-aos="fade-up" data-aos-duration="900">Types of CRM Systems</h4>
                    <ul data-aos="fade-up" data-aos-duration="900">
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Operational CRM</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Analytical CRM</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Collaborative CRM</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Strategic CRM</li>
                    </ul>

                    <h4 class="mt-5" data-aos="fade-up" data-aos-duration="900">CRM and Marketing</h4>
                    <p data-aos="fade-up" data-aos-duration="900">CRM enables organizations to create personalized marketing campaigns, track customer engagement, and measure campaign effectiveness for better marketing ROI.</p>

                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">CRM and Sales</h4>
                    <p data-aos="fade-up" data-aos-duration="900">CRM improves sales performance through lead management, pipeline visibility, sales forecasting, and automated follow-up processes.</p>

                    <h4 class="mt-4" data-aos="fade-up" data-aos-duration="900">CRM and Customer Service</h4>
                    <p data-aos="fade-up" data-aos-duration="900">Provide exceptional customer support through case management, ticket tracking, service automation, and customer interaction history.</p>

                    <h4 class="mt-5" data-aos="fade-up" data-aos-duration="900">Integration & Data Security</h4>
                    <p data-aos="fade-up" data-aos-duration="900">CRM systems integrate seamlessly with existing business applications while ensuring data protection through:</p>
                    <ul data-aos="fade-up" data-aos-duration="900">
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Role-Based Access Control</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Secure Data Encryption</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Regular Data Backup</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> Compliance & Audit Trails</li>
                        <li><i class="fa-solid fa-circle-check" style="color: #0b5edd; margin-right: 8px;"></i> API Integrations</li>
                    </ul>
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
                        alt="image">Call to Action <img class="right-shape"
                        src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
                    <h2 class="title rr-title-anim-1 white">Ready to Transform Your Business?</h2>
                    <p class="cta-section__dec">Experience how our CRM solution can transform your customer relationships and accelerate business growth. Schedule a personalized demo today.</p>
                </div>
                <div class="cta-section__btn d-flex justify-content-center">
                    <a href="{{ route('contact-us') }}" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Book a Demo</span>
                        <span class="text-two">Book a Demo</span>
                    </span>
                    </a>
                </div>
            </div>
            </div>
            </section>
    @endsection
