@extends('layouts.app')

@section('title', 'Business Marketing Tool')
@section('meta_description', 'Business Marketing Tool')
@section('meta_keywords', 'home, Business Marketing Tool')

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
          <li> Business Marketing Tool </li>
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
        <img src="assets/imgs/inner/service-detils/p1.jpg" alt="img" class="img-fluid" style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="service-details-sidebar" data-aos="fade-up" data-aos-duration="900">
          <h4 class="title">Product Categories</h4>
          <div class="service-details-sidebar-categories">
            <ul>
              <li><a href="{{route('hms')}}">Advance Hospital Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('inventory-stock management')}}">Inventory or Stock Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('pathology-diagnostic-management')}}">Pathology & Diagnostic Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('white-label-practice-management')}}">White Label Practice Management Application</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('dialysis-management')}}">Dialysis Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('enterprise-support-management')}}">Enterprise Support Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('ark-cloud-cast')}}">Business Marketing Tool</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('opd-management-system')}}">OPD Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
              <li><a href="{{route('industrial-asset-management')}}">Industrial Asset Management Software</a><span><i class="fa-solid fa-angles-right"></i></span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-12">
        <div class="service-details__content">
            <h2 class="title rr-title-anim-1 " data-aos="fade-up" data-aos-duration="900">Business Marketing Tool</h2>
            
            <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Why Choose Our Business Marketing Tool?</h2>
            
            <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                <h4 class="title mb-2"><i class="fa-solid fa-bolt text-warning me-2"></i> Fast Services</h4>
                <p class="desc">Automate and simplify your marketing activities with a centralized and intelligent marketing platform.</p>

                <h4 class="title mt-4 mb-2"><i class="fa-solid fa-magnifying-glass text-info me-2"></i> Transparency</h4>
                <p class="desc">Gain complete visibility into your marketing campaigns, customer engagement, and business performance from a single dashboard.</p>

                <h4 class="title mt-4 mb-2"><i class="fa-solid fa-handshake text-success me-2"></i> Trustable</h4>
                <p class="desc">Trusted by businesses across industries, our platform helps organizations streamline marketing operations and improve customer engagement.</p>
            </div>

            <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Business Marketing Tool</h2>
            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Our Business Marketing Tool is a cloud-based marketing solution designed to simplify, automate, and optimize your marketing activities with minimal effort.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">The platform connects seamlessly with digital screens installed across your premises, social media platforms, and customer engagement channels, enabling businesses to manage all marketing activities from a centralized system.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">Whether you want to promote products, engage customers, manage digital displays, or collect real-time feedback, our Business Marketing Tool provides everything you need to strengthen your brand presence and improve customer experiences.</p>

            <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Key Features</h2>
            
            <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                <h4 class="title mb-2">Centralized Content & Feedback Management</h4>
                <p class="desc">Manage all your marketing activities from a single platform.</p>
                <p class="desc mt-2">Features include:</p>
                <ul class="mt-2">
                    <li><i class="fa-solid fa-angles-right"></i><span>Manage Social Media Content</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Handle Customer Feedback</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Monitor Engagement Activities</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Centralized Campaign Management</span></li>
                </ul>
                <p class="desc mt-2">This eliminates the need to use multiple systems and improves operational efficiency.</p>

                <h4 class="title mt-4 mb-2">Social Media Integration</h4>
                <p class="desc">Integrate and manage popular social media platforms directly from the platform.</p>
                <p class="desc mt-2">Supported channels include:</p>
                <ul class="mt-2">
                    <li><i class="fa-solid fa-angles-right"></i><span>Facebook</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Instagram</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Digital Display Screens</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Other Connected Marketing Channels</span></li>
                </ul>
                <p class="desc mt-2">Manage and monitor your digital presence effortlessly.</p>

                <h4 class="title mt-4 mb-2">Video Upload & Content Management</h4>
                <p class="desc">Upload and manage promotional videos, advertisements, and branded content through a centralized dashboard.</p>
                <p class="desc mt-2">Capabilities include:</p>
                <ul class="mt-2">
                    <li><i class="fa-solid fa-angles-right"></i><span>Video Upload & Scheduling</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Multimedia Content Management</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Promotional Campaign Management</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Digital Signage Content Control</span></li>
                </ul>
                <p class="desc mt-2">Deliver engaging visual experiences to your customers.</p>

                <h4 class="title mt-4 mb-2">Live Streaming Management</h4>
                <p class="desc">Broadcast live events, announcements, promotions, or other business-related content across connected displays and digital channels.</p>
                <p class="desc mt-2">Features include:</p>
                <ul class="mt-2">
                    <li><i class="fa-solid fa-angles-right"></i><span>Live Streaming Support</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Real-Time Content Broadcasting</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Event Promotion</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Multi-Screen Display Management</span></li>
                </ul>
                <p class="desc mt-2">Enhance customer engagement through dynamic content experiences.</p>

                <h4 class="title mt-4 mb-2">Real-Time Customer Feedback</h4>
                <p class="desc">Collect valuable customer feedback instantly through digital channels.</p>
                <p class="desc mt-2">Benefits include:</p>
                <ul class="mt-2">
                    <li><i class="fa-solid fa-angles-right"></i><span>Live Customer Feedback Collection</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Satisfaction Monitoring</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Experience Evaluation</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Service Improvement Insights</span></li>
                </ul>
                <p class="desc mt-2">Real-time feedback helps businesses continuously improve customer experiences.</p>

                <h4 class="title mt-4 mb-2">Multi-Screen Management</h4>
                <p class="desc">Manage and control content displayed across multiple screens installed at various business locations from a single centralized platform.</p>
                <p class="desc mt-2">Features include:</p>
                <ul class="mt-2">
                    <li><i class="fa-solid fa-angles-right"></i><span>Centralized Screen Management</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Content Scheduling</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Remote Content Updates</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Multi-Location Display Control</span></li>
                </ul>
                <p class="desc mt-2">Perfect for retail stores, hospitals, restaurants, clinics, and corporate environments.</p>
            </div>

            <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Benefits</h2>
            
            <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                <h4 class="title mb-2">Reduced Marketing Costs</h4>
                <p class="desc">Automating marketing activities and centralizing content management can reduce overall marketing costs by up to 50%.</p>

                <h4 class="title mt-4 mb-2">Increased Customer Engagement</h4>
                <p class="desc">Deliver targeted, interactive, and engaging content that enhances customer experiences and strengthens brand loyalty.</p>

                <h4 class="title mt-4 mb-2">Improved Brand Visibility</h4>
                <p class="desc">Maintain a consistent and professional brand presence across all digital touchpoints.</p>

                <h4 class="title mt-4 mb-2">Simplified Marketing Operations</h4>
                <p class="desc">Manage campaigns, digital displays, social media, and customer interactions through a single platform.</p>

                <h4 class="title mt-4 mb-2">Real-Time Communication</h4>
                <p class="desc">Instantly share announcements, promotions, offers, and important information with your audience.</p>

                <h4 class="title mt-4 mb-2">Better Decision-Making</h4>
                <p class="desc">Leverage customer feedback and marketing analytics to optimize campaigns and improve business performance.</p>
            </div>

            <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Additional Features</h2>
            <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                <ul>
                    <li><i class="fa-solid fa-angles-right"></i><span>Campaign Scheduling</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Social Media Publishing</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Digital Signage Management</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Customer Feedback Analytics</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Content Approval Workflow</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Notification Management</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Dashboard & MIS Reports</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Cloud-Based Access</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Role-Based User Management</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Multi-Branch Support</span></li>
                </ul>
            </div>

            <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Industries We Serve</h2>
            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Our Business Marketing Tool is ideal for:</p>
            <div class="features mt-3" data-aos="fade-up" data-aos-duration="900">
                <ul>
                    <li><i class="fa-solid fa-angles-right"></i><span>Hospitals & Healthcare Organizations</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Retail Stores</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Restaurants & Cafes</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Hotels</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Shopping Malls</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Educational Institutions</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Corporate Offices</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Clinics & Diagnostic Centers</span></li>
                    <li><i class="fa-solid fa-angles-right"></i><span>Multi-Branch Businesses</span></li>
                </ul>
            </div>

            <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Why Choose Our Business Marketing Tool?</h2>
            <p class="desc mt-4" data-aos="fade-up" data-aos-duration="900">Our intelligent cloud-based marketing platform empowers organizations to automate marketing operations, improve customer engagement, reduce costs, and strengthen their digital presence.</p>
            <p class="desc mt-3" data-aos="fade-up" data-aos-duration="900">By connecting social media, digital displays, and customer feedback channels into a single ecosystem, businesses can deliver impactful marketing experiences with minimal effort.</p>

            <h2 class="title rr-title-anim-1 mt-5" data-aos="fade-up" data-aos-duration="900">Let's Talk</h2>
            
            <div class="features mt-4" data-aos="fade-up" data-aos-duration="900">
                <h4 class="title mb-2">Connect With Us</h4>
                <ul class="mt-2">
                    <li><i class="fa-brands fa-facebook text-primary me-2"></i><span>Facebook</span></li>
                    <li><i class="fa-brands fa-instagram text-danger me-2"></i><span>Instagram</span></li>
                    <li><i class="fa-brands fa-linkedin text-info me-2"></i><span>LinkedIn</span></li>
                    <li><i class="fa-brands fa-whatsapp text-success me-2"></i><span>WhatsApp</span></li>
                </ul>

                <h4 class="title mt-4 mb-2">Contact Information</h4>
                <p class="desc"><strong>Mobile:</strong> <a href="tel:+917400920717">+91-7400920717</a>, <a href="tel:+919977699982">+91-9977699982</a></p>
                <p class="desc mt-2"><strong>Sales Enquiry:</strong> <a href="mailto:sales@avark.in">sales@avark.in</a></p>
                <p class="desc mt-2"><strong>Support:</strong> <a href="mailto:support@avark.in">support@avark.in</a></p>

                <h4 class="title mt-4 mb-2">Office Addresses</h4>
                <p class="desc mt-2"><strong>Indore Office:</strong> A-81, Vistara City, Indore - 452001, Madhya Pradesh, India</p>
                <p class="desc mt-2"><strong>Bangalore Office:</strong> No. 124, 2nd Cross, Nethravathi Street, Uday Nagar, Bengaluru - 560016, Karnataka, India</p>

                <h4 class="title mt-4 mb-2">Book a Demo</h4>
                <p class="desc">Transform your marketing activities with our intelligent Business Marketing Tool. Schedule a personalized demo today.</p>
                <p class="desc mt-4"><strong>Copyright &copy; 2026 Avark Healthcare Technology Pvt. Ltd.</strong></p>
                <p class="desc mt-2"><strong>Powered by Avark Healthcare Technology Pvt. Ltd.</strong></p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
