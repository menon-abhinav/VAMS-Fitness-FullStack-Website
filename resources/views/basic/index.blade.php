<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VAMS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{URL :: asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/style.css')}}" type="text/css">
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
                <a href="/">
                    <h3>VAMS Fitness</h3>
                    <!-- <img src="img/logo.png" alt=""> -->
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/aboutus">About</a></li>
                        <li><a href="/class">Classes</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/contact">Contacts</a></li>
                        
                        @if(Auth::check())
                        <li><a href="/myaccount">My Account</a></li>
                        @endif

                        @if(Auth::check())
                        <a href="/logout" class="primary-btn signup-btn">Logout</a>
                        @else
                        <a href="/register" class="primary-btn signup-btn">Sign Up Today</a>
                        @endif

                    </ul>

                </nav>

            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="{{URL :: asset('img/her.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-text">
                        <span>WORKOUT & FITNESS</span>
                        <h1>Find Your Fitness.</h1>
                        <h1>Something For Everyone</h1>
                        <p>A huge selection of workout videos and programs to help you look and feel your best.<br /> A plan towards your Fit Future !!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="{{URL :: asset ('img/about-pic.jpg')}}" alt="">
                            <!-- <img src="img/play.png" alt=""> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Story About Us</h2>
                        <p class="first-para">Created by personal trainers, VAMS — a group of friends 
                            team passionate about helping you achieve your 
                            health and fitness goals.</p>
                        <p class="second-para">We believe fitness should be accessible to everyone, everywhere, 
                            regardless of income or access to a gym. With hundreds of professional workouts, healthy
                            recipes and informative articles, you’ll have everything you need to reach your personal fitness goals !!!</p>
                        <a href="/aboutus" class="primary-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Begin -->
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-pic">
                        <img src="img/services/service-pic.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-items">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-item bg-gray">
                                    <img src="img/services/service-icon-1.png" alt="">
                                    <h4>Strategies</h4>
                                    <p>Programs planned to offer day-to-day guidance on an interactive calendar to keep 
                                        you on track.</p>
                                </div>
                                <div class="services-item bg-gray pd-b">
                                    <img src="img/services/service-icon-3.png" alt="">
                                    <h4>Workout</h4>
                                    <p>With Workout Videos for all sorts of people it will help you to be 
                                      Fit without any problem.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-item">
                                    <img src="img/services/service-icon-2.png" alt="">
                                    <h4>Yoga</h4>
                                    <p>Yoga a spiritual discipline based on bringing harmony between mind and body.
                                        </p>
                                </div>
                                <div class="services-item pd-b">
                                    <img src="img/services/service-icon-4.png" alt="">
                                    <h4>Weight Loss</h4>
                                    <p>With our Diet Plans and Workout Plans we make your sure Weight Loss problem 
                                        is not a problem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Classes Section Begin -->
    <section class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>UNLIMITED CLASSES</h2>
                    </div>
                </div>
            </div>
            <div class="row classes-slider owl-carousel">
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-1.jpg">
                        <div class="si-text">
                            <h4>Yoga</h4>
                            <span><i class="fa fa-user"></i> Manish Pillai</span>
                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-4.jpg">
                        <div class="si-text">
                            <h4>Karate</h4>
                            <span><i class="fa fa-user"></i> Venkatesh Nair</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-2.jpg">
                        <div class="si-text">
                            <h4>Running</h4>
                            <span><i class="fa fa-user"></i> Abhinav Menon</span>
                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-5.jpg">
                        <div class="si-text">
                            <h4>Zumba</h4>
                            <span><i class="fa fa-user"></i> Siddharth Shah</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-3.jpg">
                        <div class="si-text">
                            <h4>Personal Training</h4>
                            <span><i class="fa fa-user"></i> Manish Pillai</span>
                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-6.jpg">
                        <div class="si-text">
                            <h4>Weight Loss</h4>
                            <span><i class="fa fa-user"></i> Venkatesh Nair</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-7.jpg">
                        <div class="si-text">
                            <h4>Aerobic</h4>
                            <span><i class="fa fa-user"></i> Siddharth Shah</span>
                        </div>
                    </div>
                    <div class="single-class-item set-bg" data-setbg="img/classes/classes-8.jpg">
                        <div class="si-text">
                            <h4>Flexibilty</h4>
                            <span><i class="fa fa-user"></i> Abhinav Menon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Classes Section End -->

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>success stories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-slider owl-carousel">
                        <div class="testimonial-item">
                            <p>I Love the ease of working out at home with one of the best 
                                instructors out there. </p>
                            <div class="ti-pic">
                                <img src="img/testimonial/testimonial-1.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Ritu Menon</h4>
                                <span>Trusted Customer</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>VAMS Fitness has helped me get my self confidence back. I look
                                great, and I feel even better! </p>
                            <div class="ti-pic">
                                <img src="img/testimonial/testimonial.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Sujith Kurup</h4>
                                <span>Co-Owner</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

{{-- copy it --}}

    <!-- Banner Section Begin -->
    <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h2>Get training today</h2>
                        <p>What are you waiting for join the VAMS Fitness Family Today itself
                            and lead your way towards the transformation.</p>
                        <a href="/contact" class="primary-btn banner-btn">Contact Now</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/banner-person.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">July 17, 2020</div>
                            <a href="#" class="tag">#Gym</a>
                        </div>
                        <h4><a href="#">10 States At Risk of Rural Hospital Closures</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-2.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">July 17, 2020</div>
                            <a href="#" class="tag">#Sport</a>
                        </div>
                        <h4><a href="#">Diver who helped save Thai soccer team</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-3.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">July 17, 2020</div>
                            <a href="#" class="tag">#Body</a>
                        </div>
                        <h4><a href="#">Man gets life in prison for stabbing</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Banner Section Begin -->
    <section class="footer-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-0.jpg">
                        <span>New member</span>
                        <h2>7 days for free</h2>
                        <p>Complete the training sessions with us, surely you will be happy</p>
                        <a href="/class" class="primary-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner.jpg">
                        <span>contact us</span>
                        <h2>7350650458</h2>
                        <p>If you trust us on your journey then we assure you we wont't disappoint you!</p>
                        <a href="/class" class="primary-btn">Get Started</a>
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
                        <p>teams.vams@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <ul>
                    <li><a href="#">Term&Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy;<p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a></p></p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{URL :: asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL :: asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL :: asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL :: asset('js/mixitup.min.js')}}"></script>
    <script src="{{URL :: asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{URL :: asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL :: asset('js/main.js')}}"></script>
</body>

</html>