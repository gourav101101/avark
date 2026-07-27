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
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Blogs</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Blogs</li>
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
        <div class="breadcrumb-section__wrapper" data-background="{{ asset('assets/imgs/home-1/hero/breadcrumb-bg-thumb.png') }}">
            <div class="breadcrumb-section__content text_center breadcrumb-section__space">
                <h3 class="breadcrumb-section__title">Blogs</h3>
                <ul class="breadcrumb-section__page">
                    <li><a href="{{ route('home') }}">Home <i class="fa-regular fa-angle-right"></i></a></li>
                    <li>Blogs</li>
            </div>
        </div>
        <div class="breadcrumb-section__border"></div>
    </div>
</section>

<section class="blog-3 rr-bg-gray section-spacing">
          <div class="container rr-container-1350">
            <div class="row mb-minus-30">
              
              @forelse($blogs as $blog)
              <div class="col-lg-4 col-md-6">
                <div class="blog-3__item mb-30">
                  <div class="blog-3__content">
                    <ul class="blog-3__meta">
                      <li><span><i class="fa-light fa-circle-user"></i></span>By {{ $blog->author }}</li>
                      <li><span><i class="fa-solid fa-envelope"></i></span>Comments (0)</li>
                    </ul>

                    <h3 class="title"><a href="{{ route('blog-details', $blog->slug) }}">{{ $blog->title }}</a></h3>
                    <div class="blog-3__media">
                      <a href="{{ route('blog-details', $blog->slug) }}">
                        @if($blog->image)
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                        @else
                            <img src="{{ asset('assets/imgs/inner/features/analytics_dashboard_1783400138562.png') }}" alt="{{ $blog->title }}">
                        @endif
                      </a>
                      <ul class="blog-3__meta-list">
                        @if($blog->tag)
                            <li class="tag">{{ $blog->tag }}</li>
                        @endif
                        <li class="date">{{ $blog->published_at ? $blog->published_at->format('M d, Y') : $blog->created_at->format('M d, Y') }}</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <div class="col-12 text-center py-5">
                  <h4>No blogs found.</h4>
                  <p>Check back later for exciting updates!</p>
              </div>
              @endforelse

            </div>
          </div>
        </section>

        <section class="cta-section__area">
          <div class="container rr-container-1350">
            <div class="cta-section__wrapper" data-background="{{ asset('assets/imgs/home-3/shape/cta-3-bg.png') }}">
              <div class="section-title-3__wrapper tx-center">
                <h2 class="sub-title white"><img class="left-shape" src="{{ asset('assets/imgs/home-3/shape/shape-left-white.png') }}"
                    alt="image">Connect With Us <img class="right-shape"
                    src="{{ asset('assets/imgs/home-3/shape/shape-right-white.png') }}" alt="image"></h2>
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
                <a href="{{ route('contact-us') }}" class="rr-btn rr-btn-3">
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
