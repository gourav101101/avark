@extends('layouts.app')

@section('title', 'Contact Us')
@section('meta_description', 'Contact Us Avark')
@section('meta_keywords', 'home, Avark Pvt. Ltd.')

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
        background: #F6F6F6;
        padding: 22px 20px;
        font-weight: 400;
        font-size: 16px;
        color: var(--black);

    }
</style>

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
    <div class=" container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Contact Us</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="index.html">Home <i class="fa-regular fa-angle-right"></i></a></li>
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

                                <!-- Service / Product -->
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <select name="service" id="service" class="kp-select-field" required>
                                            <option value="" selected disabled>Select Service / Product</option>
                                            <option value="ERP Solutions">ERP Solutions</option>
                                            <option value="CRM Software">CRM Software</option>
                                            <option value="Custom Software Development">Custom Software Development</option>
                                            <option value="Website Development">Website Development</option>
                                            <option value="Mobile App Development">Mobile App Development</option>
                                            <option value="Cloud Solutions">Cloud Solutions</option>
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
                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="contact-us__info">
                        <div class="text">
                            <h2 class="title">Get in touch with us</h2>
                            <p>Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit
                            </p>
                        </div>
                        <div class="contact-us-box">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3>
                                    <a href="tel:9399489997">+91-93994 89997</a>
                                </h3>
                                <p>Call us any kind suppor,we will wait for it.</p>
                            </div>
                        </div>
                        <div class="contact-us-box ">
                            <div class="icon">
                                <i class="fa-solid fa-square-chevron-down"></i>
                            </div>
                            <div class="contact-us-content">
                                <h3>
                                    <a href="mailto:support@avark.in">support@avark.in</a>
                                </h3>
                                <p>Email us anytime for anykind ofquety.</p>
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
                                <p>A-81, Vistara City, Indore,452001</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="map">
    <div class="map-box">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.5796739631414!2d75.92894427587633!3d22.78097502529988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631dec5b794003%3A0x61c3f111e90a752d!2sAvark%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1771241199009!5m2!1sen!2sin"
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<section class="cta-section__area">
    <div class="container rr-container-1350">
        <div class="cta-section__wrapper" data-background="assets/imgs/home-3/shape/cta-3-bg.png">
            <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title white"><img class="left-shape" src="assets/imgs/home-3/shape/shape-left-white.png"
                        alt="image">Connect With Us <img class="right-shape"
                        src="assets/imgs/home-3/shape/shape-right-white.png" alt="image"></h2>
                <h2 class="title rr-title-anim-1 white">Let’s Discuss Your Business Needs</h2>
                <p class="cta-section__dec">Have questions about our products or services? Our team is here to provide the right guidance and solutions tailored to your business.</p>
            </div>
            <div class="cta-section__btn">
                <a href="#" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">view our demo</span>
                        <span class="text-two">view our demo</span>
                    </span>
                </a>
                <a href="contact.html" class="rr-btn rr-btn-3">
                    <span class="btn-wrap">
                        <span class="text-one">start free trial now</span>
                        <span class="text-two">start free trial now</span>
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