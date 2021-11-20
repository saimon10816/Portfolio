<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kingkor Ahsan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,900,900i" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Khand:wght@500&family=Lobster+Two&family=Rajdhani&family=Stick+No+Bills:wght@800&display=swap" rel="stylesheet">



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
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="/" class="logo"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1 class="logo"><a href="index.html">Folio</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link  scrollto" href="#portfolio">Published Works</a></li>
                <li><a class="nav-link scrollto" href="#services">Awards</a></li>
                <li><a class="nav-link  scrollto" href="#journal">Media</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<div id="hero" class="home">
    {{--    <img src="{{$main->background_img}}" class="bg-img">--}}

    <div class="container">
        <div class="hero-content">
            <h1>I'm <span class="typed" data-typed-items="{{$main->typography}}"></span>
            </h1>
            <p>{{$main->sub_title}}</p>

            <ul class="list-unstyled list-social">
                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</div><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="paddsection">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-4 ">
                    <div class="div-img-bg">
                        <div class="about-img">
                            <img src="{{url($about->display_img)}}" class="img-responsive" alt="me">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="about-descr">

                        <h3 class="p-heading">{!! $about->body !!}</h3>
                        <h3 class="separator">{!! $about->sub_body !!}</h3>

                        <div class="iframe-container">
                            <iframe width="720" height="480" src="https://www.youtube.com/embed/SaHiLdLAGhU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div><!-- End About Section -->


    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="paddsection">

        <div class="container">
            <div class="section-title text-center">
                <h2>Published Works</h2>
            </div>
        </div>

        <div class="container">

            <!-- Slider main container -->
            <div class="services-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">


                    @if(count($lists) > 0)
                        @foreach($lists as $list)
                            <div class="swiper-slide">
                                <div class="portfolio-info">
                                    <div class="row justify-content-between">

                                        <a href="{{route('admin.book.show', ['id' => $list->id])}}">
                                            <img src="{{url($list->book)}}" class="img-fluid" alt=""></a>

                                    </div>
                                    {{--                                                                <a href="portfolio-details.html" class="details-link" title="More Details"><i--}}
                                    {{--                                                                        class="bx bx-link"></i></a>--}}
                                </div>
                            </div>

                        @endforeach
                    @endif

                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>


    </div><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <div id="services" class="paddsection">
        <div class="container">
            <div class="section-title text-center">
                <h2>Awards</h2>
            </div>

            <div class="container">

                <div class="services-slider-for-award swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @if(count($listAwards) > 0)
                            @foreach($listAwards as $listAward)
                                <div class="swiper-slide">
                                    <div class="services-block">
                                        <img src="{{url($listAward->award)}}" class="img-fluid servicesimg" alt="">
                                        <span>{{$listAward->awardTitle}}</span>
                                        <h1 class="separator">{{$listAward->awardDescription}}</h1>
                                    </div>
                                </div>

                            @endforeach
                        @endif


                    </div>
                    {{--                    <div class="swiper-pagination"></div>--}}
                </div>

            </div>

        </div>

    </div><!-- End Services Section -->

    <!-- ======= Journal Section ======= -->
    <div id="journal" class="text-left paddsection">

        <div class="container">
            <div class="section-title text-center">
                <h2>Media</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="journal-block">


                    <div class="services-slider-for-media swiper-container" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">


                            @if(count($mediaLists) > 0)
                                @foreach($mediaLists as $mediaList)
                                    <div class="swiper-slide">

                                        {{--                                <div class="col-lg-4 col-md-6">--}}
                                        <div class="journal-info">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-4">


                                                    <a href="{{route('admin.media.show', ['id' => $mediaList->id])}}"><img
                                                            src="{{$mediaList->mediaImage}}" class="img-responsive mediaimg"
                                                            alt="img" height="" width=""></a>
                                                    <div class="journal-txt">
                                                    <span>
                                                        <a href="{{route('admin.media.show', ['id' => $mediaList->id])}}">{{$mediaList->mediaTitle}}</a>
                                                    </span>
                                                        <h1 class="separator">{{$mediaList->mediaBy}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--                                        </div>--}}

                                    </div>
                                @endforeach
                            @endif

                        </div>

                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>


                </div>


            </div>
        </div>

    </div>
    <!-- End Journal Section -->

    <!-- ======= Contact Section ======= -->
    {{--    <div id="contact" class="paddsection">--}}
    {{--        <div class="container">--}}
    {{--            <div class="contact-block1">--}}
    {{--                <div class="row">--}}

    {{--                    <div class="col-lg-6">--}}
    {{--                        <div class="contact-contact">--}}

    {{--                            <h2 class="mb-30">GET IN TOUCH</h2>--}}

    {{--                            <ul class="contact-details">--}}
    {{--                                <li><span>23 Main, Street</span></li>--}}
    {{--                                <li><span>Dhaka, Bangladesh</span></li>--}}
    {{--                                <li><span>+88 0123456789</span></li>--}}
    {{--                                <li><span>email@gmail.com</span></li>--}}
    {{--                            </ul>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="col-lg-6">--}}
    {{--                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">--}}
    {{--                            <div class="row gy-3">--}}

    {{--                                <div class="col-lg-6">--}}
    {{--                                    <div class="form-group contact-block1">--}}
    {{--                                        <input type="text" name="name" class="form-control" id="name"--}}
    {{--                                               placeholder="Your Name" required>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-lg-6">--}}
    {{--                                    <div class="form-group">--}}
    {{--                                        <input type="email" class="form-control" name="email" id="email"--}}
    {{--                                               placeholder="Your Email" required>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-lg-12">--}}
    {{--                                    <div class="form-group">--}}
    {{--                                        <input type="text" class="form-control" name="subject" id="subject"--}}
    {{--                                               placeholder="Subject" required>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-lg-12">--}}
    {{--                                    <div class="form-group">--}}
    {{--                                                <textarea class="form-control" name="message" placeholder="Message"--}}
    {{--                                                          required></textarea>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="col-lg-12">--}}
    {{--                                    <div class="loading">Loading</div>--}}
    {{--                                    <div class="error-message"></div>--}}
    {{--                                    <div class="sent-message">Your message has been sent. Thank you!</div>--}}
    {{--                                </div>--}}

    {{--                                <div class="mt-0">--}}
    {{--                                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">--}}
    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div><!-- End Contact Section -->--}}

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

        <p>&copy;Copyrights BugfixIT. All rights reserved.</p>

        <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Folio
          -->
            Powered by <h5><a href="https://bugfixitbd.com/">Bugfix IT BD Limited</a></h5>
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
