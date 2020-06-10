<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="author" content="codepixer">
    <meta charset="UTF-8">
    <title>{{ trans('panel.site_title') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="{{ asset('css/argon/argon-design-system.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom_theme.css') }}" rel="stylesheet"/>
</head>
<body>
@include('partials.header')

@include('partials.banner')

@yield('home')

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            @yield('content')
            @include('partials.sidebar')
        </div>
    </div>
</section>
<div class="section" style="background-image: url('{{asset('img/bg/bg-1.svg')}}');">
    <div class="container py-md">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 mb-lg-auto">
                <div class="rounded overflow-hidden transform-perspective-left shadow">
                    <div id="carousel_example" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_example" data-slide-to="1"></li>
                            <li data-target="#carousel_example" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="{{asset('img/bg/bg-2.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('img/bg/bg-3.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{{asset('img/bg/bg-4.png')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-5 mb-lg-0">
                <h1 class="font-weight-light">Steve Jobs</h1>
                <p class="lead mt-4">
                    Your work is going to fill a large part of your life, and the only way to be truly satisfied is to
                    do what you believe is great work. And the only way to do great work is to love what you do. If you
                    haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when
                    you find it.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End post Area -->

@include('partials.footer')

<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{ asset('js/easing.min.js') }}"></script>
<script src="{{ asset('js/hoverIntent.js') }}"></script>
<script src="{{ asset('js/superfish.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('js/argon-design-system.min.js')}}"></script>
<script src="{{asset('js/nouislider.min.js')}}"></script>
</body>
</html>
