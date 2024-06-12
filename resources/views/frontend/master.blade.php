<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
        <title>@yield('meta_title', 'Default Title')</title>
          <meta name="description" content="@yield('meta_description', 'Default Description')">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.0/tagify.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/templatemo-villa-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/fontawesome.css') }}">



    <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>

<body>
    @include('frontend.nav')

    @yield('content')

    @include('frontend.footer');



    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('app-assets/css-rtl/bootstrap.min.css') }}"></script>
    <script src="{{ asset('frontend-assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/counter.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/custom.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/loan.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.0/jQuery.tagify.min.js"></script>
 @yield('scripts')
    
</body>

</html>
