@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Get in touch with Avark Healthcare Technology Pvt. Ltd. for enterprise software solutions, hospital management systems, or general inquiries.')
@section('meta_keywords', 'Contact Avark, Healthcare Technology, ARK HIMS, IT Support, Software Sales')
@section('og_title', 'Contact Avark Healthcare Technology')

@section('content')

<style>
    .crm-benefits__wrapper {
        overflow: hidden;
        position: relative;
        border-radius: 32px;
        background: linear-gradient(90deg, #0E0E0C 0%, #198754 100%);
    }

    .counter__item.item-2 {
        background: #9dd3ce;
    }

    .service-details .analytics {
        padding: 40px 32px;
        position: relative;
        border-radius: 16px;
        background: linear-gradient(90deg, #198754 0%, var(--Text-Primary, #c9c939) 100%), var(--BG-Sedentary, #F6F6F6);
    }

    .kp-select-field {
        width: 100% !important;
        outline: none;
        border: none;
        border-radius: 12px;
        background: #F6F6F6 url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23333' d='M10.293 3.293L6 7.586 1.707 3.293A1 1 0 00.293 4.707l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z'/%3E%3C/svg%3E") no-repeat calc(100% - 20px) center;
        background-size: 12px;
        padding: 0 20px;
        font-weight: 400;
        font-size: 16px;
        color: var(--black);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        height: 68px;

    }
</style>

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
    <div class=" container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Contact Us</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Contact Us</li>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>


<!-- Contact Section-3 Start -->
<section class="contact-section section-spacing ">
    <div class="container">
        <div class="contact-us-wrapper">
            <div class="row">

                <div class="col-lg-7">
                    <div class="comment-form-wrap">
                        <h3>Fill the Contact Form</h3>

                        <form action="contact.php" id="contact-form" method="POST">

                            <div class="row">

                                <!-- Name -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text"
                                            name="name"
                                            id="name"
                                            placeholder="Your Full Name"
                                            required>
                                    </div>
                                </div>

                                <!-- Mobile -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="tel"
                                            name="mobile"
                                            id="mobile"
                                            placeholder="Your Mobile Number"
                                            pattern="[0-9]{10}"
                                            required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="email"
                                            name="email"
                                            id="email"
                                            placeholder="Your Email Address"
                                            required>
                                    </div>
                                </div>

                                <!-- Hospital Name -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text"
                                            name="hospital"
                                            id="hospital"
                                            placeholder="Hospital Name (Optional)">
                                    </div>
                                </div>

                                <!-- Service / Product -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <select name="service" id="service" class="kp-select-field" required>
                                            <option value="" selected disabled>Select Service / Product</option>
                                            <optgroup label="Products">
                                                <option value="ArkCloudCast">ArkCloudCast</option>
                                                <option value="Dialysis Management System">Dialysis Management System</option>
                                                <option value="Digital Signage Solutions">Digital Signage Solutions</option>
                                                <option value="Enterprise Support Management">Enterprise Support Management</option>
                                                <option value="Feedback Management">Feedback Management</option>
                                                <option value="HMS">HMS (Hospital Management System)</option>
                                                <option value="Industrial Asset Management">Industrial Asset Management</option>
                                                <option value="Inventory Stock Management">Inventory Stock Management</option>
                                                <option value="KIOSK Management System">KIOSK Management System</option>
                                                <option value="OPD Management System">OPD Management System</option>
                                                <option value="Pathology Diagnostic Management">Pathology Diagnostic Management</option>
                                                <option value="White Label Practice Management Application">White Label Practice Management Application</option>
                                            </optgroup>
                                            <optgroup label="Services">
                                                <option value="Cloud and Data Migration">Cloud and Data Migration</option>
                                                <option value="CMS">CMS</option>
                                                <option value="CRM Solutions">CRM Solutions</option>
                                                <option value="Custom Software Development">Custom Software Development</option>
                                                <option value="Digital Healthcare Solution">Digital Healthcare Solution</option>
                                                <option value="Enterprise Integration Services">Enterprise Integration Services</option>
                                                <option value="ERP System">ERP System</option>
                                                <option value="Mobile App Development">Mobile App Development</option>
                                                <option value="Tele Consultation">Tele Consultation</option>
                                                <option value="Web Application Development">Web Application Development</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>


                                <!-- Message -->
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <textarea name="message"
                                            id="message"
                                            rows="5"
                                            placeholder="Type your message here..."
                                            required></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-lg-12">
                                    <button type="submit" class="rr-btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Send Message</span>
                                            <span class="text-two">Send Message</span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </form>

                        <!-- WhatsApp Redirection Script -->
                        <script>
                            document.getElementById('contact-form').addEventListener('submit', function(e) {
                                e.preventDefault(); // Prevent default form submission to contact.php
                                
                                // Gather form data
                                var name = document.getElementById('name').value;
                                var mobile = document.getElementById('mobile').value;
                                var email = document.getElementById('email').value;
                                var hospital = document.getElementById('hospital').value;
                                var service = document.getElementById('service').value;
                                var message = document.getElementById('message').value;
                                
                                // Format the message for WhatsApp
                                var text = "Hello Avark IT Services,\n\nI have a new inquiry:\n\n" +
                                           "*Name:* " + name + "\n" +
                                           "*Mobile:* " + mobile + "\n" +
                                           "*Email:* " + email + "\n" +
                                           (hospital ? "*Hospital:* " + hospital + "\n" : "") +
                                           "*Service/Product:* " + service + "\n" +
                                           "*Message:* " + message;
                                           
                                // Target WhatsApp number
                                var whatsappNumber = "917400920717";
                                
                                // URL encode the message text
                                var encodedText = encodeURIComponent(text);
                                
                                // Construct the WhatsApp API URL
                                var whatsappUrl = "https://wa.me/" + whatsappNumber + "?text=" + encodedText;
                                
                                // Open the WhatsApp chat in a new tab
                                window.open(whatsappUrl, '_blank');
                            });
                        </script>
                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="contact-us__info">
                        <div class="text">
                            <h2 class="title">Get in touch with us</h2>
                            <p>Connect with us for healthcare technology solutions, demos, and support.
                            </p>
                        </div>
                        <div class="contact-us-box">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3>
                                    <a href="tel:917400920717">+91-7400920717</a>
                                </h3>
                                <h3>
                                    <a href="tel:919977699982">+91-9977699982</a>
                                </h3>
                                <p>Call us for any support, we are happy to help.</p>
                            </div>
                        </div>
                        <div class="contact-us-box ">
                            <div class="icon">
                                <i class="fa-solid fa-square-chevron-down"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3>
                                    <a href="mailto:sales@avark.in">sales@avark.in</a>
                                </h3>
                                <h3>
                                    <a href="mailto:support@avark.in">support@avark.in</a>
                                </h3>
                                <p>Email us anytime for any query.</p>
                            </div>
                        </div>
                        <div class="contact-us-box mb-0">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3>
                                    Our Address
                                </h3>
                                <p class="mb-3"><strong>Indore Office:</strong> A-81, Vistara City, <strong>Indore</strong> – 452001, Madhya Pradesh, India</p>
                                <p><strong>Bangalore Office:</strong> No. 124, 2nd Cross, Nethravathi Street, Uday Nagar, <strong>Bengaluru</strong> – 560016, Karnataka, India</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="map mb-5 pb-5">
    <div class="container-fluid px-0">
        <div class="row g-0">
            <!-- Indore Office Map -->
            <div class="col-lg-6">
                <div class="map-box">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.5796739631414!2d75.92894427587633!3d22.78097502529988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631dec5b794003%3A0x61c3f111e90a752d!2sAvark%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1771241199009!5m2!1sen!2sin"
                        style="border:0; width: 100%; height: 450px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <!-- Bangalore Office Map -->
            <div class="col-lg-6">
                <div class="map-box">
                    <iframe
                        src="https://maps.google.com/maps?q=No.%20124,%202nd%20Cross,%20Nethravathi%20Street,%20Uday%20Nagar,%20Bengaluru%20%E2%80%93%20560016,%20Karnataka,%20India&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        style="border:0; width: 100%; height: 450px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="cta-section__area">
    <div class="container rr-container-1350">
        <div class="cta-section__wrapper" data-background="assets/imgs/home-3/shape/cta-3-bg.png">
            <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title white"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left-white.png"
                        alt="image">Connect With Us <img class="right-shape"
                        src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
                <h2 class="title rr-title-anim-1 white">Let’s Talk — Experience the Future of Healthcare Management</h2>
                <p class="cta-section__dec">Have questions about ARK HIMS or our healthcare solutions? Our team is here to provide the right guidance and solutions tailored to your hospital.</p>
            </div>
            <div class="cta-section__btn">
                <a href="{{ route('contact-us') }}" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Book a Demo</span>
                        <span class="text-two">Book a Demo</span>
                    </span>
                </a>
                <a href="{{ route('contact-us') }}" class="rr-btn rr-btn-3">
                    <span class="btn-wrap">
                        <span class="text-one">Request a Quote</span>
                        <span class="text-two">Request a Quote</span>
                    </span>
                </a>
            </div>
            <div class="cta-section__list">
                <ul>
                    <li><i class="fa-regular fa-angles-right"></i> 14-day free trial</li>
                    <li><i class="fa-regular fa-angles-right"></i> No credit card required</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection