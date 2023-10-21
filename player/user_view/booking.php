<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
// Start the session
session_start();

require("../connect.php");

$username = $_SESSION['email'];
$email=$_GET['email'];
$sql = "select * from registration where email='$username'";
$res = select_data($sql);
$arr = mysqli_fetch_assoc($res);
?>

<!-- rest of your code -->
<main id="main" class="main">

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Booking</title>
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <!--div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="indx.html">
                    Dress<span>-Up</span>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <!-div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <form action="#error" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div-->
                <!-- toggle switch for light and dark theme -->
                <!--div class="cont-ser-position">
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
                </div-->
                <!-- //toggle switch for light and dark theme ->
            </nav>
        </div-->
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <!--section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Contact</li>
                </ul>
            </div>
        </div>
    </section-->
    <!-- //inner banner -->

    <!-- contact section -->
    
    <section class="w3l-contact-11 py-5" id="contact">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-style text-center mb-lg-5 mb-4">Book <span>Now</span></h3>
            <!--div class="row text-center mb-5 pb-lg-5 pb-sm-4">
                <div class="col-lg-3 col-sm-6 contact-info">
                    <i class="fas fa-map-marked-alt"></i>
                    <h4>Location</h4>
                    <p>London, 235 Terry, 10001</p>
                </div>
                <div class="col-lg-3 col-sm-6 contact-info mt-md-0 mt-4">
                    <i class="fas fa-headset"></i>
                    <h4>Phone</h4>
                    <p><a href="tel:+44 987 654 321">+44 123 984 439</a></p>
                </div>
                <div class="col-lg-3 col-sm-6 contact-info mt-lg-0 mt-4">
                    <i class="fas fa-envelope-open-text"></i>
                    <h4>Email</h4>
                    <p><a href="mailto:mail@example.com" class="email">mail@example.com</a></p>
                </div>
                <div class="col-lg-3 col-sm-6 contact-info mt-lg-0 mt-4">
                    <i class="fas fa-user-clock"></i>
                    <h4>Working Hours</h4>
                    <p>Mon-Sat: 9hrs & Sun: Closed</p>
                </div>
            </div-->
            <div class="form-inner-cont mx-auto" style="max-width:800px">
            <form action="../../php/booking.php"  method="POST" class="signin-form">
                    <div class="row align-form-map">
                    <div class="col-sm-6 form-input">
    <input type="text" name="name" id="w3lName" placeholder="Your Name" value="<?php echo isset($arr['name']) ? $arr['name'] : ''; ?>" />
</div>
<div class="col-sm-6 form-input">
    <input type="email" name="email" id="w3lSender" placeholder="Your Email" value="<?php echo isset($arr['email']) ? $arr['email'] : ''; ?>" />
</div>
<div class="col-sm-6 form-input">
    <input type="number" name="contact" placeholder="Phone Number" class="contact-input" value="<?php echo isset($arr['phone_no']) ? $arr['phone_no'] : ''; ?>">
</div>
<div class="col-sm-6 form-input">
    <input type="date" name="date" placeholder="Booking Date" class="contact-input" required>
</div>
<div class="col-sm-6 form-input">
    <input type="time" name="stime" placeholder="Starting Time" class="contact-input" required>
</div>
<div class="col-sm-6 form-input">
    <input type="time" name="etime" placeholder="Ending Time" class="contact-input" required>
</div>
<div class="col-sm-6 form-input">
    <input type="number" name="amount" placeholder="Amount" class="contact-input" require>
</div>
</div>
<div class="read-more mt-4 pt-lg-2 text-center">
<input type="hidden" name="email" value="<?php echo $email; ?>">

<div class="read-more mt-4 pt-lg-2 text-center">
                            <a type="button" name="pay"  href="../payment/index.html?email=<?php echo $arr['email']; ?>" class="btn btn-primary">Pay Now</a>
                            </div>
                        
                        

                    
                            </div>
                        </form>
            </div>
        </div>
    </section>
    <!-- map -->
    <!--div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div-->
    <!-- //contact section -->

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
    </main><!-- End #main -->


</body>

</html>


<?php
   include '../footer.html';
   require('../keys.php');
?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
    function pay(amt,id) {
        <?php
            $sql = "select * from registration where email='$username'";
            $res = select_data($sql);
            $row = mysqli_fetch_assoc($res);

            ?>
        var options = {
            "key": "<?php echo $apikey ?>", // Enter the Key ID generated from the Dashboard
            "amount": amt *
                100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "TurfBooking",
            "description": "Payment",
            
            //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the id obtained in the response of Step 1
            "callback_url": "../../php/success.php?amt=" + amt + "&id=" + id,



            "prefill": {
                "name": "<?php echo $row['name'] ?>",
                "email": "<?php echo $row['email'] ?>",
                "contact": "<?php echo $row['phone_no'] ?>"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
    </script>