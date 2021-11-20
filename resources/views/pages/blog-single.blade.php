<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kingkor Ahsan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Folio - v4.3.0
    * Template URL: https://bootstrapmade.com/folio-bootstrap-portfolio-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="/" class="logo"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/">Home</a></li>
                <li><a class="nav-link scrollto" href="/">About</a></li>
                <li><a class="nav-link  scrollto" href="/">Published Works</a></li>
                <li><a class="nav-link scrollto" href="/">Awards</a></li>
                <li><a class="nav-link  scrollto" href="/">Media</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Blog Single ======= -->
    <div class="main-content paddsection">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="container-main single-main">
                            <div class="col-md-12">
                                <div class="block-main mb-30">
                                    <div class="media-img">
                                        @if(is_null($mediaLists))
                                            No image Found
                                        @else
                                        <img src="{{url($mediaLists->mediaImage)}}" class="img-fluid"
                                             alt="reviews2">
                                        @endif
                                    </div>
                                    <div class="content-main single-post padDiv">
                                        <div class="journal-txt">
                                            @if(is_null($mediaLists))
                                                No Title Found
                                            @else
                                            <h7>{{$mediaLists->mediaTitle}}</h7>
                                            @endif
                                        </div>
                                        <div class="post-meta">
                                            <ul class="list-unstyled mb-0">
                                                @if(is_null($mediaLists))
                                                    No Media Info Found
                                                @else
                                                <li class="author">by:<a href="#">{{$mediaLists->mediaBy}}</a></li>
                                                <li class="date">date:<a
                                                        href="#">{{isset($mediaLists->created_at) ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $mediaLists->created_at)->format('d F Y') :''}}</a>
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                        @if(is_null($mediaLists))
                                            No Media Body Found
                                        @else
                                        <h3 class="mb-30">{!! $mediaLists->mediaBody !!}</h3>
                                        <p class="mb-30"></p>
                                        {{--                                        <blockquote>If you are still looking for that one person who will change your life, take a look in the mirror.</blockquote>--}}
                                        <p class="mb-30"></p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Blog Single -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<div id="footer" class="text-center">
    <div class="container">
        <div class="socials-media text-center">

            <ul class="list-unstyled">
                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
            </ul>

        </div>

        <p>&copy; Copyrights BugfixIT. All rights reserved.</p>

        <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
          -->
            Powered by <a href="https://bugfixitbd.com/">BugfixIT</a>
        </div>

    </div>
</div><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/typed.js/typed.min.js')}}"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<!-- Template Main JS File -->
<script src="{{asset('js/main.js')}}"></script>


</body>

</html>
