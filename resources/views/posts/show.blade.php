<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodia</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/aos/aos.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
        .search {

            position: relative;
            display: flex;
        }

        .searchTerm {
            width: 100%;
            border: 3px solid #fdad00;
            border-right: none;
            padding: 5px;
            height: 36px;
            border-radius: 5px 0 0 5px;
            outline: none;
            color: #fdad00;
        }

        .searchTerm:focus {
            color: black;
        }

        .searchButton {
            width: 40px;
            height: 36px;
            border: 1px solid #fdad00;
            background: #fdad00;
            text-align: center;
            color: #fff;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 20px;
        }

        /*Resize the wrap to see the search bar change!*/
        .wrap {
            width: 91%;
            top: 50%;
            left: 50%;
        }

        body {
            background: #fff;
            color: #666666;
            font-family: "Open Sans", sans-serif;
            overflow-x: hidden;
        }

        a {
            color: #1dc8cd;
            transition: 0.5s;
        }

        a:hover,
        a:active,
        a:focus {
            color: #1dc9ce;
            outline: none;
            text-decoration: none;
        }

        p {
            padding: 0;
            margin: 0 0 30px 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            margin: 0 0 20px 0;
            padding: 0;
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            display: none;
            background: linear-gradient(45deg, #c7c000, #fdad00);
            color: #fff;
            padding: 2px 20px 8px 20px;
            font-size: 16px;
            border-radius: 4px 4px 0 0;
            right: 15px;
            bottom: 0;
            transition: none;
        }

        .back-to-top:focus {
            background: linear-gradient(45deg, #c7c000, #fdad00);
            color: #fff;
            outline: none;
        }

        .back-to-top:hover {
            background: #fdad00;
            color: #fff;
        }

        /*--------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/
        #header {
            padding: 30px 0;
            height: 92px;
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            transition: all 0.5s;
            z-index: 997;
        }

        #header #logo {
            float: left;
        }

        #header #logo h1 {
            font-size: 36px;
            margin: -4px 0 0 0;
            padding: 0;
            line-height: 1;
            display: inline-block;
            font-family: "Montserrat", sans-serif;
            font-weight: 300;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        #header #logo h1 a,
        #header #logo h1 a:hover {
            color: #fff;
        }

        #header #logo img {
            padding: 0;
            margin: 0;
        }

        @media (max-width: 768px) {
            #header #logo h1 {
                font-size: 28px;
                margin-top: 0;
            }

            #header #logo img {
                max-height: 40px;
            }
        }

        #header.header-fixed {
            background: linear-gradient(45deg, #c7c000, #fdad00);
            padding: 20px 0;
            height: 72px;
            transition: all 0.5s;
            border-bottom: 2px solid rgba(193, 193, 193, 0.3);
        }

        /*--------------------------------------------------------------
  # Intro Section
  --------------------------------------------------------------*/
        #intro {
            width: 100%;
            height: 100vh;
            background-color: black;
            position: relative;
            min-height: 100vh;
            background: url('../../../storage/img/background1.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #intro .intro-text {
            padding-top: 200px;
            text-align: center;
            vertical-align: top;
        }

        @media (max-height: 768px) {
            #intro .intro-text {
                padding-top: 180px;
            }
        }

        @media (max-width: 768px) {
            #intro .intro-text {
                padding-top: 180px;
            }
        }

        @media (max-width: 767px) {
            #intro .intro-text {
                padding-top: 180px;
            }
        }

        #intro h2 {
            margin: 30px 0 10px 0;
            padding: 0 15px;
            font-size: 48px;
            font-weight: 400;
            line-height: 56px;
            color: #fff;
        }

        @media (max-width: 768px) {
            #intro h2 {
                font-size: 28px;
                line-height: 36px;
            }
        }

        #intro p {
            color: #fff;
            margin-bottom: 20px;
            padding: 0 15px;
            font-size: 24px;
        }

        @media (max-width: 768px) {
            #intro p {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 20px;
            }
        }

        #intro .btn-get-started {
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 8px 28px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px;
            border: 2px solid #fff;
            color: #fff;
        }

        #intro .btn-get-started:hover {
            color: #fdad00;
            background: #fff;
        }

        .btn-get-started {
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 8px 28px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px;
            border: 2px solid #fdad00;
            color: #fdad00;
        }

        .btn-get-started:hover {
            color: white;
            background: #fdad00;
        }


        /*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/
        /* Nav Menu Essentials */
        .nav-menu,
        .nav-menu * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .nav-menu ul {
            position: absolute;
            display: none;
            top: 100%;
            left: 0;
            z-index: 99;
        }

        .nav-menu li {
            position: relative;
            white-space: nowrap;
        }

        .nav-menu>li {
            float: left;
        }

        .nav-menu li:hover>ul,
        .nav-menu li.sfHover>ul {
            display: block;
        }

        .nav-menu ul ul {
            top: 0;
            left: 100%;
        }

        .nav-menu ul li {
            min-width: 180px;
        }

        /* Nav Menu Arrows */
        .sf-arrows .sf-with-ul {
            padding-right: 30px;
        }

        .sf-arrows .sf-with-ul:after {
            content: "\f107";
            position: absolute;
            right: 15px;
            font-family: FontAwesome;
            font-style: normal;
            font-weight: normal;
        }

        .sf-arrows ul .sf-with-ul:after {
            content: "\f105";
        }

        /* Nav Meu Container */
        #nav-menu-container {
            float: right;
            margin: 0;
        }

        @media (max-width: 768px) {
            #nav-menu-container {
                display: none;
            }
        }

        /* Nav Meu Styling */
        .nav-menu a {
            padding: 0 8px 10px 8px;
            text-decoration: none;
            display: inline-block;
            color: #fff;
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            font-size: 14px;
            outline: none;
        }

        .nav-menu>li {
            margin-left: 10px;
        }

        .nav-menu ul {
            margin: 4px 0 0 0;
            padding: 10px;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
            background: #fff;
        }

        .nav-menu ul li {
            transition: 0.3s;
        }

        .nav-menu ul li a {
            padding: 10px;
            color: #333;
            transition: 0.3s;
            display: block;
            font-size: 13px;
            text-transform: none;
        }

        .nav-menu ul li:hover>a {
            color: #1dc8cd;
        }

        .nav-menu ul ul {
            margin: 0;
        }

        /* Mobile Nav Toggle */
        #mobile-nav-toggle {
            position: fixed;
            right: 0;
            top: 0;
            z-index: 999;
            margin: 20px 20px 0 0;
            border: 0;
            background: none;
            font-size: 24px;
            display: none;
            transition: all 0.4s;
            outline: none;
            cursor: pointer;
        }

        #mobile-nav-toggle i {
            color: #fff;
        }

        @media (max-width: 768px) {
            #mobile-nav-toggle {
                display: inline;
            }
        }

        /* Mobile Nav Styling */
        #mobile-nav {
            position: fixed;
            top: 0;
            padding-top: 18px;
            bottom: 0;
            z-index: 998;
            background: rgba(52, 59, 64, 0.9);
            left: -260px;
            width: 260px;
            overflow-y: auto;
            transition: 0.4s;
        }

        #mobile-nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        #mobile-nav ul li {
            position: relative;
        }

        #mobile-nav ul li a {
            color: #fff;
            font-size: 16px;
            overflow: hidden;
            padding: 10px 22px 10px 15px;
            position: relative;
            text-decoration: none;
            width: 100%;
            display: block;
            outline: none;
        }

        #mobile-nav ul li a:hover {
            color: #fff;
        }

        #mobile-nav ul li li {
            padding-left: 30px;
        }

        #mobile-nav ul .menu-has-children i {
            position: absolute;
            right: 0;
            z-index: 99;
            padding: 15px;
            cursor: pointer;
            color: #fff;
        }

        #mobile-nav ul .menu-has-children i.fa-chevron-up {
            color: #1dc8cd;
        }

        #mobile-nav ul .menu-item-active {
            color: #1dc8cd;
        }

        #mobile-body-overly {
            width: 100%;
            height: 100%;
            z-index: 997;
            top: 0;
            left: 0;
            position: fixed;
            background: rgba(52, 59, 64, 0.9);
            display: none;
        }

        /* Mobile Nav body classes */
        body.mobile-nav-active {
            overflow: hidden;
        }

        body.mobile-nav-active #mobile-nav {
            left: 0;
        }

        body.mobile-nav-active #mobile-nav-toggle {
            color: #fff;
        }

        /*--------------------------------------------------------------
  # Sections
  --------------------------------------------------------------*/
        /* Sections Header
  --------------------------------*/
        .section-header .section-title {
            font-size: 32px;
            color: #111;
            font-weight: 400;
        }

        .section-header .section-description {
            text-align: center;
            padding-bottom: 40px;
            color: #777;
            font-style: italic;
        }

        .section-header .section-divider {
            display: block;
            width: 60px;
            height: 3px;
            background: #fdad00;
            background: linear-gradient(0deg, #fdad00 0%, #c7c000 100%);
            margin-bottom: 20px;
        }

        /* Section with background
  --------------------------------*/
        .section-bg {
            background: #eff5f5;
        }

        /* About Us Section
  --------------------------------*/
        #about {
            padding: 60px 0;
        }

        #about .about-img {
            height: 510px;
            overflow: hidden;
        }

        #about .about-img img {
            margin-left: -15px;
            max-width: 100%;
        }

        @media (max-width: 768px) {
            #about .about-img {
                height: auto;
            }

            #about .about-img img {
                margin-left: 0;
                padding-bottom: 30px;
            }
        }

        #about .content .h2 {
            color: #333;
            font-weight: 300;
            font-size: 24px;
        }

        #about .content h3 {
            color: #777;
            font-weight: 300;
            font-size: 18px;
            line-height: 26px;
            font-style: italic;
        }

        #about .content p {
            line-height: 26px;
        }

        #about .content p:last-child {
            margin-bottom: 0;
        }

        #about .content i {
            font-size: 20px;
            padding-right: 4px;
            color: #1dc8cd;
        }

        #about .content ul {
            list-style: none;
            padding: 0;
        }

        #about .content ul li {
            padding-bottom: 10px;
        }

        /* More Features Section
  --------------------------------*/
        #ulasan {
            padding: 60px 0 60px 0;
        }

        #ulasan .box {
            width: 350px;
            padding: 30px;
            margin-left: 65px;
            margin-right: 10px;
            margin-bottom: 40px;
            box-shadow: 0px 0px 30px rgba(73, 78, 92, 0.15);
            background: #fff;
        }

        #ulasan .gambar {
            width: 300px;
        }

        #ulasan h4 {
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 18px;
        }

        #ulasan h4 a {
            color: #111;
        }

        #ulasan p {
            font-size: 14px;
            margin-bottom: 0;
            line-height: 24px;
        }

        @media (max-width: 767px) {
            #ulasan .box {
                margin-bottom: 20px;
            }

            #ulasan .icon {
                float: none;
                text-align: center;
                padding-bottom: 15px;
            }

            #ulasan h4,
            #ulasan p {
                margin-left: 0;
                text-align: center;
            }
        }

        /* Contact Section
  --------------------------------*/
        #contact {
            box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
            padding: 30px 0;
        }

        #contact .contact-about h3 {
            font-size: 36px;
            margin: 0 0 10px 0;
            padding: 0;
            line-height: 1;
            font-family: "Montserrat", sans-serif;
            font-weight: 300;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #fdad00;
        }

        #contact .contact-about p {
            font-size: 14px;
            line-height: 24px;
            font-family: "Montserrat", sans-serif;
            color: #888;
        }

        #contact .social-links {
            padding-bottom: 20px;
        }

        #contact .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #fff;
            color: #fdad00;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            border: 1px solid #fdad00;
        }

        #contact .social-links a:hover {
            background: #fdad00;
            color: #fff;
        }

        #contact .info {
            color: #333333;
        }

        #contact .info i {
            font-size: 32px;
            color: #fdad00;
            float: left;
            line-height: 1;
        }

        #contact .info p {
            padding: 0 0 10px 42px;
            line-height: 28px;
            font-size: 14px;
        }

        /*--------------------------------------------------------------
  # Footer
  --------------------------------------------------------------*/
        #footer {
            background: #fff;
            padding: 30px 0;
            color: #333;
            font-size: 14px;
        }

        #footer .credits {
            font-size: 13px;
            color: #888;
        }

        #footer .footer-links a {
            color: #666;
            padding-left: 15px;
        }

        #footer .footer-links a:first-child {
            padding-left: 0;
        }

        #footer .footer-links a:hover {
            color: #1dc8cd;
        }
    </style>
</head>

<body>
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1><a style="font-weight: bold;">Foodia</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></img></a> -->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li class="menu-active"><a href="../home">Home</a></li>
                    <li><a href="../home">Ulasan</a></li>
                    <!-- <li><a href="/semua_ulasan">Semua Ulasan</a></li> -->
                    <li><a href="../home">Tentang Kami</a></li>
                    <!-- <form action="search" style="padding-left:20px;" class="d-flex" role="search">
            <input style="padding-left: 3px;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="" name="search" autofocus value="{{ old('search') }}">
              <button style="color: white;background-color:transparent;padding-left: 3px; padding-right: 3px;margin-right: 10px;" class="btn btn-outline-light" type="submit">Search</button>
          </form> -->
                    <!-- <li class="menu-has-children"><a href="">Kategori</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->
    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">

        <div class="intro-text">
        <h1 style="color: white;font-weight:bold;padding-top: 40px;">{{ $post->title }}</h1>
            <p>Berikut ini merupakan ulasan tentang <span style="color: white;"><strong>{{ $post->title }}</strong></span></p>
        </div>

    </section><!-- #intro -->

    <main id="main">
        <div class="container mt-4 mb-4">
            <div style="margin-top:80px;margin-bottom:80px;" class="card border-0 shadow-sm rounded">
                <div style="background-color: white;border-radius:5px;" class="card-body">
                    <img src="{{ asset('storage/posts/'.$post->image) }}" style="float: left;width:48%;" class="rounded">
                    <div style="float: right;width:50%;">
                        <h4><strong>{{ $post->title }}</strong></h4>
                        <p class="tmt-3">
                            {!! $post->content !!}
                        </p>
                        <a href="/home" class="btn btn-dark">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3><strong>Foodia</strong></h3>
              <p>Jika anda membutuhkan informasi lebih lanjut bisa menghubungi media sosial kami dibawah ini</p>
              <div class="social-links">
                <a href="#" class="facebook"><i class="uil uil-facebook"></i></a>
                <a href="#" class="instagram"><i class="uil uil-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="uil uil-map-marker"></i>
                <p>Kab.Trenggalek<br>Kec.Suruh Ds.Suruh</p>
              </div>

              <div>
                <i class="uil uil-envelope-alt"></i>
                <p>foodiaofficial@gmail.com</p>
              </div>

              <div>
                <i class="uil uil-phone"></i>
                <p>0853-3162-4625</p>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
        <!--==========================
    Footer
  ============================-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-lg-left text-center">
                        <div class="copyright">
                            Copyright by &copy; <strong> Foodia</strong>| 2023
                        </div>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                            <a href="../home" class="scrollto">Home</a>
                            <a href="../home" class="scrollto">Ulasan</a>
                            <!-- <a href="semua_ulasan" class="scrollto">Semua Ulasan</a> -->
                            <a href="../home" class="scrollto">Tentang Kami</a>
                        </nav>
                    </div>
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="uil uil-arrow-up"></i></a>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/aos/aos.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Template Main Javascript File -->
    <script>
        jQuery(document).ready(function($) {

// Header fixed and Back to top button
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $('.back-to-top').fadeIn('slow');
    $('#header').addClass('header-fixed');
  } else {
    $('.back-to-top').fadeOut('slow');
    $('#header').removeClass('header-fixed');
  }
});
$('.back-to-top').click(function() {
  $('html, body').animate({
    scrollTop: 0
  }, 1500, 'easeInOutExpo');
  return false;
});

// Initiate the AOS animation library
AOS.init();

// Initiate superfish on nav menu
$('.nav-menu').superfish({
  animation: {
    opacity: 'show'
  },
  speed: 400
});

// Mobile Navigation
if ($('#nav-menu-container').length) {
  var $mobile_nav = $('#nav-menu-container').clone().prop({
    id: 'mobile-nav'
  });
  $mobile_nav.find('> ul').attr({
    'class': '',
    'id': ''
  });
  $('body').append($mobile_nav);
  $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
  $('body').append('<div id="mobile-body-overly"></div>');
  $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

  $(document).on('click', '.menu-has-children i', function(e) {
    $(this).next().toggleClass('menu-item-active');
    $(this).nextAll('ul').eq(0).slideToggle();
    $(this).toggleClass("fa-chevron-up fa-chevron-down");
  });

  $(document).on('click', '#mobile-nav-toggle', function(e) {
    $('body').toggleClass('mobile-nav-active');
    $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
    $('#mobile-body-overly').toggle();
  });

  $(document).click(function(e) {
    var container = $("#mobile-nav, #mobile-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
        $('#mobile-body-overly').fadeOut();
      }
    }
  });
} else if ($("#mobile-nav, #mobile-nav-toggle").length) {
  $("#mobile-nav, #mobile-nav-toggle").hide();
}

// Smoth scroll on page hash links
$('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    if (target.length) {
      var top_space = 0;

      if ($('#header').length) {
        top_space = $('#header').outerHeight();

        if( ! $('#header').hasClass('header-fixed') ) {
          top_space = top_space - 20;
        }
      }

      $('html, body').animate({
        scrollTop: target.offset().top - top_space
      }, 1500, 'easeInOutExpo');

      if ($(this).parents('.nav-menu').length) {
        $('.nav-menu .menu-active').removeClass('menu-active');
        $(this).closest('li').addClass('menu-active');
      }

      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
        $('#mobile-body-overly').fadeOut();
      }
      return false;
    }
  }
});

// Gallery - uses the magnific popup jQuery plugin
$('.gallery-popup').magnificPopup({
  type: 'image',
  removalDelay: 300,
  mainClass: 'mfp-fade',
  gallery: {
    enabled: true
  },
  zoom: {
    enabled: true,
    duration: 300,
    easing: 'ease-in-out',
    opener: function(openerElement) {
      return openerElement.is('img') ? openerElement : openerElement.find('img');
    }
  }
});

// custom code

});

    </script>
    
</body>

</html>