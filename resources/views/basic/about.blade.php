<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VAMS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <h3>VAMS Fitness</h3>
                    <!-- <img src="img/logo.png" alt=""> -->
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class = "active"><a href="/aboutus">About</a></li>
                        <li><a href="/class">Classes</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/contact">Contacts</a></li>
                        
                        @if(Auth::check())
                        <li><a href="/myaccount">My Account</a></li>
                        @endif

                    </ul>
                </nav>
                @if(Auth::check())
                <a href="/logout" class="primary-btn signup-btn">Logout</a>
                @else
                <a href="#" class="primary-btn signup-btn">Sign Up Today</a>
                @endif
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>   
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/her.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about-section about-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="img/about-pic.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=SlPhMPnQ58k" class="play-btn video-popup">
                            <img src="img/play.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Story About Us</h2>
                        <p class="first-para">Created by personal trainers, VAMS — a group of friends 
                            team passionate about helping you achieve your 
                            health and fitness goals.</p>
                        <p class="second-para">With hundreds of professional workouts, healthy
                            recipes and informative articles, you’ll have everything you need to reach your personal fitness goals !!!</p>
                        <img src="img/about-signature.png" alt="">
                        <div class="at-author">
                            <h4>Srivenkatesh Nair</h4>
                            <span>CEO - Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- About Counter Section Begin -->
    <div class="about-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-counter-text">
                        <div class="single-counter">
                            <h1 class="counter-num count">98</h1>
                            <p>Programs</p>
                        </div>
                        <div class="single-counter">
                            <h1 class="counter-num count">14</h1>
                            <p>Locations</p>
                        </div>
                        <div class="single-counter">
                            <h1 class="counter-num count">50</h1>
                            <span>k+</span>
                            <p>Members</p>
                        </div>
                        <div class="single-counter">
                            <h1 class="counter-num count">34</h1>
                            <p>Coaches</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Counter Section End -->

    <!-- Gym Award Section Begin -->
    <section class="gym-award spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="award-text">
                        <h2>Best gym award</h2>
                        <p>With hundreds of professional workouts, healthy
                            recipes and informative articles, you’ll have everything you need to reach your personal fitness goals !!!</p>
                        <p>We are happy to share this news with our subs that we are awarded as the best fitness online portal. 
                            This has become possible with the love and support shown by you people. We pledge towards providing more content
                            and better services.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="img/award.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Gym Award Section End -->

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2>Get training today</h2>
                        <p>What are you waiting for join the VAMS Fitness Family Today itself
                            and lead your way towards the transformation.</p>
                        <a href="#" class="primary-btn banner-btn">Contact Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/banner-person.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Trainer Section Begin -->
    <section class="trainer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>EXPERT TRAINERS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="img/trainer/trainer-1.jpg" alt="">
                        <div class="trainer-text">
                            <h5>Venkatesh Nair</h5>
                            <span>Leader</span>
                            <p>Venkatesh Nair has worked in the fitness industry since his early 
                                college days and is a social activist.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="img/trainer/trainer-2.jpg" alt="">
                        <div class="trainer-text">
                            <h5>Manish Pillai</h5>
                            <span>Gym coach</span>
                            <p>Manish Pillai is not only a Gym Coach but also a Yoga Expert with work 
                                experience.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-trainer-item">
                        <img src="img/trainer/trainer-3.jpg" alt="">
                        <div class="trainer-text">
                            <h5>Abhinav Menon</h5>
                            <span>Fitness trainer</span>
                            <p>Abhinav Menon is a well known Running and Flexibilty 
                                Expert.</p>
                            <div class="trainer-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Section End -->

<!-- Footer Banner Section Begin -->
<section class="footer-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-0.jpg">
                    <span>New member</span>
                    <h2>7 days for free</h2>
                    <p>Complete the training sessions with us, surely you will be happy</p>
                    <a href="#" class="primary-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner.jpg">
                    <span>contact us</span>
                    <h2>7350650458</h2>
                    <p>If you trust us on your journey then we assure you we wont't disappoint you!</p>
                    <a href="#" class="primary-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Banner Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Phone</span>
                        <p>7350650458 - (0251) 2734608</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Address</span>
                        <p>PCE, New Panvel(E)</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Email</span>
                        <p>vamsfitness@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="subscribe-option set-bg" data-setbg="img/signup.jpg">
                <div class="so-text">
                    <h4>Subscribe To Our Mailing List</h4>
                    <p>Sign up to receive the latest information </p>
                </div>
                <form action="#" class="subscribe-form">
                    <input type="text" placeholder="Enter Your Mail">
                    <button type="submit"><i class="fa fa-send"></i></button>
                </form>
            </div>
            <div class="copyright-text">
                <ul>
                    <li><a href="#">Term&Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy;<p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a></p></p>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>