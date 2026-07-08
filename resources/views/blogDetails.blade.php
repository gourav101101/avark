@extends('layouts.app')

@section('title', 'Blogs Blog Details')
@section('meta_description', 'Blogs Blog Details')
@section('meta_keywords', 'home, Blogs Blog Details')

@section('content')

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
    <div class=" container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Blog Details</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li><i class="fa-regular fa-angle-right"></i>Blogs</li>
                    <li><i class="fa-regular fa-angle-right"></i>Blog Details</li>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>


<!-- News Section-3 Start -->
<section class="news-section section-spacing">
    <div class="container rr-container-1350">
        <div class="news-details-wrapper">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="details-image">
                        <img src="{{ asset($blog['image']) }}" alt="img" style="width: 100%; border-radius: 12px; margin-bottom: 20px;">
                    </div>
                    <div class="news-details-content">
                        <h3>{{ $blog['title'] }}</h3>
                        {!! $blog['content'] !!}

                        <!-- <div class="sideber">
                      <h3>
                        Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum
                        nec at odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the
                        consectetur elit
                      </h3>
                      <div class="client-info-item">
                        <div class="client-info">
                          <div class="image">
                            <img src="{{ asset('assets/imgs/inner/blog-details/author.jpg') }}" alt="img">
                          </div>
                          <h4>Michel Clarck</h4>
                        </div>
                        <div class="icon">
                          <i class="fa-regular fa-quote-right"></i>
                        </div>
                      </div>
                    </div> -->


                        <div class="row tag-share-wrap mt-4 mb-5">
                            <div class="col-lg-8 col-12">
                                <div class="tagcloud">
                                    <span>Tags:</span>
                                    <a href="#">ERP Development</a>
                                    <a href="#">Cloud ERP</a>
                                    <a href="#">Business Automation</a>
                                    <a href="#">Digital Transformation</a>
                                </div>

                            </div>
                            <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                <div class="social-share">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <div class="comments-heading">
                                <h3>02 Comments</h3>
                            </div>
                            <div class="blog-single-comment d-flex gap-4 pt-4 pb-4">
                                <div class="image">
                                    <img src="{{ asset('assets/imgs/home-1/testimonial/author-2.jpg') }}" alt="img">
                                </div>
                                <div class="content">
                                    <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                        <div class="con">
                                            <h2>
                                                <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">
                                                    Adam Jhon
                                                </a>
                                            </h2>
                                            <span>February 10, 2024 at 2:37 pm</span>
                                        </div>
                                        <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}" class="reply">Reply</a>
                                    </div>
                                    <p class="mt-2 mb-4">
                                        Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis
                                        purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.
                                    </p>
                                </div>
                            </div>
                            <div class="blog-single-comment d-flex gap-4 pt-4 pb-4">
                                <div class="image">
                                    <img src="{{ asset('assets/imgs/home-1/testimonial/author-3.jpg') }}" alt="img">
                                </div>
                                <div class="content">
                                    <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                        <div class="con">
                                            <h2><a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Kristin Watsons</a></h2>
                                            <span>February 10, 2024 at 2:37 pm</span>
                                        </div>
                                        <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}" class="reply">Reply</a>
                                    </div>
                                    <p class="mt-2 mb-4">
                                        Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis
                                        purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form-wrap mt-5">
                            <h3>Leave a comments</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <span>Your Name</span>
                                            <input type="text" name="name" id="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <span>Your Email</span>
                                            <input type="text" name="email" id="email6" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <span>write message</span>
                                            <textarea name="message" id="message" placeholder="Type your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="rr-btn-green">
                                            <span class="btn-wrap">
                                                <span class="text-one">SENDMESSAGES</span>
                                                <span class="text-two">SENDMESSAGES</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sideber">
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Search</h3>
                            </div>
                            <div class="search-widget">
                                <form action="#">
                                    <input type="text" placeholder="Search here">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href="#">ERP Development</a><span>06</span></li>
                                    <li><a href="#">Cloud Solutions</a><span>04</span></li>
                                    <li><a href="#">CRM Integration</a><span>05</span></li>
                                    <li><a href="#">Business Automation</a><span>03</span></li>
                                    <li><a href="#">Enterprise Software</a><span>07</span></li>
                                    <li><a href="#">Digital Transformation</a><span>08</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-area">
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/imgs/inner/blog/blog-3.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <h3>
                                            <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">
                                                Why Your Business Needs a Custom ERP Solution
                                            </a>
                                        </h3>
                                        <ul>
                                            <li>
                                                March 26, 2026
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/imgs/inner/blog/blog-1.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <h3>
                                            <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">
                                                Cloud Migration: A Complete Guide for Enterprises
                                            </a>
                                        </h3>
                                        <ul>
                                            <li>
                                                March 26, 2026
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="{{ asset('assets/imgs/inner/blog/blog-2.jpg') }}" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <h3>
                                            <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">
                                                ERP vs CRM: Understanding the Key Differences
                                            </a>
                                        </h3>
                                        <ul>
                                            <li>
                                                March 26, 2026
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget mb-0">
                            <div class="wid-title">
                                <h3>Tag Cloud</h3>
                            </div>
                            <div class="news-widget-categories">
                                <div class="tagcloud">
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Litigation</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Legal Risk</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Lawsuits</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Contracts</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Compliance</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Disputes</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Management</a>
                                    <a href="{{ route('blog-details', ['slug' => 'future-of-erp-systems']) }}">Resolution</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
