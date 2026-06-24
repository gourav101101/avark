@extends('layouts.app')

@section('title', 'Blogs')
@section('meta_description', 'Blogs')
@section('meta_keywords', 'home, Blogs')

@section('content')

<style>

</style>

<!-- breadcrumb-section -->
<section class="breadcrumb-section__area ">
    <div class=" container rr-container-1900">
        <div class="breadcrumb-section__wrapper" data-background="assets/imgs/home-1/hero/breadcrumb-bg-thumb.png">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Blogs</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="index.html">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Blogs</li>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<section class="blog-3 rr-bg-gray section-spacing">
          <div class="container rr-container-1350">
            <div class="row mb-minus-30">
              <div class="col-lg-4 col-md-6">
                <div class="blog-3__item mb-30">
                  <div class="blog-3__content">
                    <ul class="blog-3__meta">
                      <li><span><i class="fa-light fa-circle-user"></i></span>By kuldeep Meena</li>
                      <li><span><i class="fa-solid fa-envelope"></i></span>Comments (04)</li>
                    </ul>

                    <h3 class="title"><a href="{{ route('blog-details') }}">The Future of ERP Systems: Trends to Watch in <br> 2026</a></h3>
                    <div class="blog-3__media">
                      <a href="{{ route('blog-details') }}"><img src="assets/imgs/home-1/blog/kpm-blog02.png" alt="image"></a>
                      <ul class="blog-3__meta-list">
                        <li class="tag">Agency</li>
                        <li class="date">Oct 04,2026</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="blog-3__item mb-30">
                  <div class="blog-3__content">
                    <ul class="blog-3__meta">
                      <li><span><i class="fa-light fa-circle-user"></i></span>By TusHar</li>
                      <li><span><i class="fa-solid fa-envelope"></i></span>Comments (04)</li>
                    </ul>

                    <h3 class="title"><a href="blog-details.html">How to Choose the Right ERP or Inventory System for Your Business</a></h3>
                    <div class="blog-3__media">
                      <a href="blog-details.html"><img src="assets/imgs/home-1/blog/kpm-blog02.png" alt="image"></a>
                      <ul class="blog-3__meta-list">
                        <li class="tag">Avark</li>
                        <li class="date">Oct 04,2026</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="blog-3__item mb-30">
                  <div class="blog-3__content">
                    <ul class="blog-3__meta">
                      <li><span><i class="fa-light fa-circle-user"></i></span>By Kuldeep</li>
                      <li><span><i class="fa-solid fa-envelope"></i></span>Comments (04)</li>
                    </ul>

                    <h3 class="title"><a href="blog-details.html">How CRM Helps <br> Startups Scale<br> Faster</a></h3>
                    <div class="blog-3__media">
                      <a href="blog-details.html"><img src="assets/imgs/home-1/blog/kpm-blog02.png" alt="image"></a>
                      <ul class="blog-3__meta-list">
                        <li class="tag">Avark</li>
                        <li class="date">Oct 04,6</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

                <div class="col-lg-4 col-md-6">
                <div class="blog-3__item mb-30">
                  <div class="blog-3__content">
                    <ul class="blog-3__meta">
                      <li><span><i class="fa-light fa-circle-user"></i></span>By kuldeep Meena</li>
                      <li><span><i class="fa-solid fa-envelope"></i></span>Comments (04)</li>
                    </ul>

                    <h3 class="title"><a href="blog-details.html">The Future of ERP Systems: Trends to Watch in <br> 2026</a></h3>
                    <div class="blog-3__media">
                      <a href="blog-details.html"><img src="assets/imgs/home-1/blog/kpm-blog02.png" alt="image"></a>
                      <ul class="blog-3__meta-list">
                        <li class="tag">Agency</li>
                        <li class="date">Oct 04,2026</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="blog-3__item mb-30">
                  <div class="blog-3__content">
                    <ul class="blog-3__meta">
                      <li><span><i class="fa-light fa-circle-user"></i></span>By TusHar</li>
                      <li><span><i class="fa-solid fa-envelope"></i></span>Comments (04)</li>
                    </ul>

                    <h3 class="title"><a href="{{ route('blog-details') }}">How to Choose the Right ERP or Inventory System for Your Business</a></h3>
                    <div class="blog-3__media">
                      <a href="blog-details.html"><img src="assets/imgs/home-1/blog/kpm-blog02.png" alt="image"></a>
                      <ul class="blog-3__meta-list">
                        <li class="tag">Avark</li>
                        <li class="date">Oct 04,2026</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="blog-3__item mb-30">
                  <div class="blog-3__content">
                    <ul class="blog-3__meta">
                      <li><span><i class="fa-light fa-circle-user"></i></span>By Kuldeep</li>
                      <li><span><i class="fa-solid fa-envelope"></i></span>Comments (04)</li>
                    </ul>

                    <h3 class="title"><a href="blog-details.html">How CRM Helps <br> Startups Scale<br> Faster</a></h3>
                    <div class="blog-3__media">
                      <a href="blog-details.html"><img src="assets/imgs/home-1/blog/kpm-blog02.png" alt="image"></a>
                      <ul class="blog-3__meta-list">
                        <li class="tag">Avark</li>
                        <li class="date">Oct 04,6</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="page-nav-wrap d-flex justify-content-center">
              <ul>
                <li><a class="page-numbers style-2" href="#">PREV <i class="fa-solid fa-arrow-left"></i></a></li>
                <li class="active"><a class="page-numbers" href="#">01</a></li>
                <li><a class="page-numbers" href="#">02</a></li>
                <li><a class="page-numbers" href="#">03</a></li>
                <li><a class="page-numbers style-2" href="#">NEXT <i class="fa-solid fa-arrow-left"></i></a></li>
              </ul>
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
                <h2 class="title rr-title-anim-1 white">Freedom Without Commitments.</h2>
                <p class="cta-section__dec">Start your 30-day free trial. Cancel anytime.</p>
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