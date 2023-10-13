<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php 
    require("../connect.php");
    $email=$_GET['email'];
    $sql="SELECT * FROM turf  WHERE email='$email'";
    $res=select_data($sql);
    $row=mysqli_fetch_assoc($res);
    

    ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turf Booking</title>
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!--a class="navbar-brand" href="index.html"-->
                    <h5><span> <?php echo $row['name']; ?> </span></h5>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <!--li class="nav-item">
                            <a class="nav-link" aria-current="page" href="inde.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li-->
                        <!--li class="nav-item">
                            <a class="nav-link active" >Home</a>
                        </li-->
                        <!--li class="nav-item">
                            <a class="nav-link" href="contac.html">Contact</a>
                        </li-->
                    </ul>
                    <form action="#error" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4"><?php echo $row['email']; ?></h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a>Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- home services block -->
    <div class="w3l-servicesblock2 py-5" id="services">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4">Services we're <span>offering</span></h3>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="grids5-info">
                        <a href="services.tml" class="blog-image d-block zoom"><img src=<?php echo $row['image'];?> alt=""
                                class="img-fluid radius-image" />
                            <!--div class="image-overlay">
                                <h4>Measurements</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, consectetur.</p>
                            </div>
                            <div class="iconic-plus">
                                <i class="fas fa-plus"></i>
                            </div-->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="grids5-info">
                        <a href="services.html" class="blog-image d-block zoom"><img src=<?php echo $row['image'];?> alt=""
                                class="img-fluid radius-image" />
                            <!--div class="image-overlay">
                                <h4>Repair</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, consectetur.</p>
                            </div>
                            <div class="iconic-plus">
                                <i class="fas fa-plus"></i>
                            </div-->
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                    <div class="grids5-info">
                        <a href="services.html" class="blog-image d-block zoom"><img src=<?php echo $row['image'];?> alt=""
                                class="img-fluid radius-image" />
                            <!--div class="image-overlay">
                                <h4>Cutting-out</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, consectetur.</p>
                            </div>
                            <div class="iconic-plus">
                                <i class="fas fa-plus"></i>
                            </div-->
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <section class="w3l-about py-5" id="about">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row align-items-center">
                <div class="col-lg-6 section-width pe-xl-5">
                    <h3 class="title-style"><span>More About</span> <?php echo $row['name']; ?></h3>
                    <p class="mt-4"> <?php echo $row['about']; ?></p>
                    <p class="mt-4 pb-dm-3"></p>
                    <!--a  class="btn btn-style mt-4"></a-->
                </div>
                <!--div class="col-lg-6 history-info mt-lg-0 mt-5 pt-md-4 pt-2">
                    <div class="position-relative img-border">
                        <img src="assets/images/blog4.jpg" class="img-fluid video-popup-image" alt="video-popup">

                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>

                        <-- dialog itself, mfp-hide class is required to make dialog hidden ->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="https://player.vimeo.com/video/333569091?h=9836ac4d97"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div-->
            </div>
        </div>
    </section>
   

    <!-- pricing section -->
    <section class="w3l-pricing py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-sm-5 mb-6"><span>Book Your </span>Turf<span> Now</span></h3>
            <div class="row t-in justify-content-center">
                <!--div class="col-lg-4 col-md-6 price-main-info">
                    <div class="price-inner card box-shadow">

                        <div class="card-body">
                            <h4 class="text-uppercase text-center mb-3">Lite Plan</h4>
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>19

                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Suit Sizes</li>
                                <li> <span class="fa fa-check"></span> Shorten suit jacket sleeves</li>
                                <li class="disable"> <span class="fa fa-check"></span> Taper pants</li>
                                <li class="disable"> <span class="fa fa-check"></span> Tops short sleeve design</li>
                                <li class="disable"> <span class="fa fa-check"></span> Pants - shorten/lengthen</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="contact.html" class="btn btn-style"> Order Now</a>
                            </div>
                        </div>
                    </div>
                </div-->
                <div class="col-lg-4 col-md-6 price-main-info mt-md-0 mt-4">
                    <div class="price-inner card box-shadow active">

                        <div class="card-body">
                            <h4 class="text-uppercase text-center mb-3">Price/Hour</h4>
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">₹</span><?php echo $row['price']; ?>

                            </h5>
                            <!--ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Suit Sizes</li>
                                <li> <span class="fa fa-check"></span> Shorten suit jacket sleeves</li>
                                <li> <span class="fa fa-check"></span> Taper pants</li>
                                <li class="disable"> <span class="fa fa-check"></span> Tops short sleeve design</li>
                                <li class="disable"> <span class="fa fa-check"></span> Pants - shorten/lengthen</li>
                            </ul-->
                            <div class="read-more mt-4 pt-lg-2 text-center">
                            <a href="booking.php?email=<?php echo $row['email']; ?>" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--div class="col-lg-4 col-md-6 price-main-info mt-lg-0 mt-4">
                    <div class="price-inner card box-shadow">

                        <div class="card-body">
                            <h4 class="text-uppercase text-center mb-3">Enterprise Plan</h4>
                            <h5 class="card-title pricing-card-title">
                                <span class="align-top">$</span>99
                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li> <span class="fa fa-check"></span> Suit Sizes</li>
                                <li> <span class="fa fa-check"></span> Shorten suit jacket sleeves</li>
                                <li> <span class="fa fa-check"></span> Taper pants</li>
                                <li> <span class="fa fa-check"></span> Tops short sleeve design</li>
                                <li> <span class="fa fa-check"></span> Pants - shorten/lengthen</li>
                            </ul>
                            <div class="read-more mt-4 pt-lg-2 text-center">
                                <a href="contact.html" class="btn btn-style"> Order Now</a>
                            </div>
                        </div>
                    </div>
                </div-->
            </div>
        </div>
    </section>
    <!-- //pricing section -->

    <!-- footer -->
    <!--footer class="w3l-footer-16 py-5">
        <div class="container pt-md-5 pt-sm-4 pb-sm-2">
            <div class="row">
                <div class="col-lg-4">
                    <a class="footer-logo d-flex align-items-center" href="index.html">
                        Dress<span>-Up</span></a>
                    <p class="mt-3">Nam libero tempore, cum soluta nobis est elige endi optio cumque nihil impedit quo
                        minus id quod maxime placeat facere. Istee natuser iumedolo
                        ladase.</p>
                    <div class="columns-2 mt-4">
                        <ul class="social">
                            <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li><a href="#github"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-xl-5 col-6 column">
                            <h3 class="">Quick Link</h3>
                            <ul class="footer-gd-16">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="#blog">Blog Posts</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-6 column px-xxl-0">
                            <h3 class="">Contact Info</h3>
                            <ul class="footer-contact-list">
                                <li class="">10001, 5th Avenue,
                                    #32841 block, USA</li>
                                <li class="mt-2"><a href="tel:+12 23456790">+1223 456 790</a></li>
                                <li class="mt-2"><a href="mailto:info@example.com">info@example.com</a></li>
                                <li class="mt-2"><a href="mailto:info@example.com">www.example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 col-8 column mt-lg-0 mt-4">
                    <h3 class="">Opening Hours</h3>
                    <ul class="list-footer-block">
                        <li>
                            Monday
                            <span>9:00 - 18:00</span>
                        </li>
                        <li>
                            tuesday
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            Wednesday
                            <span>8:00 - 17:00</span>
                        </li>
                        <li>
                            Thursday
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            Friday
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            Saturday
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            Sunday
                            <span>closed</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="below-section text-center pt-4 mt-5">
                <p class="copy-text">&copy; 2021 Dress-Up. All rights reserved. Design by <a
                        href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                </p>
            </div>
        </div>
    </footer-->
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
   </body>

</html>
