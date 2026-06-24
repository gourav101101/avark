<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="description" content="Stackly - App Landing, Ai & Software Business Html Template" />

  <title>@yield('title', 'Avark Pvt. Ltd.')</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/fevi-icon.png') }}">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/bootstrap/bootstrap.min.css') }}" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/fontawesome/fontawesome-pro.min.css') }}" />

  <!-- Swiper -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/swiper/swiper-bundle.min.css') }}" />

  <!-- Meanmenu -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/menu/meanmenu.min.css') }}" />

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/popup/magnific-popup.css') }}" />

  <!-- Nice Select -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/nice-select/nice-select.css') }}" />

  <!-- Odometer -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/odometer/odometer-theme-default.css') }}" />

  <!-- AOS Animation -->
  <link rel="stylesheet" href="{{ asset('assets/vandor/animation/aos.css') }}" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

<!-- JS Files -->

<!-- jQuery -->
<script src="{{ asset('assets/vandor/jquery/jquery.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/vandor/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('assets/vandor/popup/jquery.magnific-popup.min.js') }}"></script>

<!-- Swiper -->
<script src="{{ asset('assets/vandor/swiper/swiper-bundle.min.js') }}"></script>

<!-- GSAP -->
<script src="{{ asset('assets/vandor/gsap/gsap.min.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/ScrollSmoother.min.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/SplitType.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/customEase.js') }}"></script>

<!-- Odometer -->
<script src="{{ asset('assets/vandor/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('assets/vandor/odometer/waypoints.min.js') }}"></script>

<!-- Menu -->
<script src="{{ asset('assets/vandor/menu/jquery.meanmenu.min.js') }}"></script>

<!-- Back To Top -->
<script src="{{ asset('assets/vandor/backtop/backToTop.js') }}"></script>

<!-- Nice Select -->
<script src="{{ asset('assets/vandor/nice-select/nice-select.js') }}"></script>

<!-- AOS Animation -->
<script src="{{ asset('assets/vandor/animation/aos.js') }}"></script>

<!-- GSAP Extra -->
<script src="{{ asset('assets/vandor/gsap/throwable.js') }}"></script>
<script src="{{ asset('assets/vandor/gsap/matter.js') }}"></script>

<!-- Common JS -->
<script src="{{ asset('assets/vandor/common-js/common.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
