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
                <a href="./index.html">
                    <h3>VAMS Fitness</h3>
                    <!-- <img src="img/logo.png" alt=""> -->
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/aboutus">About</a></li>
                        <li><a href="/class">Classes</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li class="active"><a href="/contact">Contacts</a></li>
                        
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
                        <h2>Contact</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Map Section Begin -->
    <div class="map">
        <h3> MAPS <i class="fa fa-map"></i></h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.672747762047!2d73.12599071440437!3d18.990054759604313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866e69da1a1%3A0xad9c60a96c52647d!2sPCE%20Rd%2C%20Triveni%20Society%2C%20Sector%2016%2C%20New%20Panvel%20East%2C%20Panvel%2C%20Navi%20Mumbai%2C%20Maharashtra%20410206!5e0!3m2!1sen!2sin!4v1595066746181!5m2!1sen!2sin"
            height="612" style="border:0;" allowfullscreen=""></iframe>
        <!-- <img src="img/icon/location.png" alt=""> -->
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h4>Contacts Us</h4>
                        <div class="contact-address">
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="img/icon/icon-1.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Our Location</h5>
                                    <p>PCE, New Panvel</p>
                                </div>
                            </div>
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="img/icon/icon-2.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Phone:</h5>
                                    <p>+91 7350650458</p>
                                </div>
                            </div>
                            <div class="ca-widget">
                                <div class="cw-icon">
                                    <img src="img/icon/icon-3.png" alt="">
                                </div>
                                <div class="cw-text">
                                    <h5>Mail</h5>
                                    <p>vamsfitness@ gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h4>Leave A Query</h4>
                        <form method = "POST">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                  
                                @if($errors->has('name'))
                                    <label>{{$errors->first('name')}}</label>
                                @endif


                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                                <div class="col-lg-6">

                                @if($errors->has('email'))
                                    <label>{{$errors->first('email')}}</label>
                                @endif


                                    <input type="text" placeholder="Your email" name="email">
                                </div>
                                <div class="col-lg-12">


                                @if($errors->has('message'))
                                    <label>{{$errors->first('message')}}</label>
                                @endif



                                    <textarea placeholder="Your messages" name="message"></textarea>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Phone</span>
                        <p>+917350650458 - (0251) 2734608</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Address</span>
                        <p>PCE ,Triveni Society, Sector 16, New Panvel East, Panvel, Navi Mumbai, Maharashtra 410206
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Email</span>
                        <p>vamsfitness@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="subscribe-option set-bg" data-setbg="img/footer-signup.jpg">
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
                <<ul>
                    <li><a href="#">Term&Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy;<p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> </p></p>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{URL :: asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL :: asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL :: asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL :: asset('js/mixitup.min.js')}}"></script>
    <script src="j{{URL :: asset('s/jquery.slicknav.js')}}"></script>
    <script src="{{URL :: asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL :: asset('js/main.js')}}"></script>
</body>

</html>

<!-- https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.672747762047!2d73.12599071440437!3d18.990054759604313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866e69da1a1%3A0xad9c60a96c52647d!2sPCE%20Rd%2C%20Triveni%20Society%2C%20Sector%2016%2C%20New%20Panvel%20East%2C%20Panvel%2C%20Navi%20Mumbai%2C%20Maharashtra%20410206!5e0!3m2!1sen!2sin!4v1595066746181!5m2!1sen!2sin" -->
<!-- https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24112.92132811736!2d-74.20651812810036!3d40.93514309648714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fda38587e887%3A0xf03207815e338a0d!2sHaledon%2C%20NJ%2007508%2C%20USA!5e0!3m2!1sen!2sbd!4v1578120776078!5m2!1sen!2sbd -->