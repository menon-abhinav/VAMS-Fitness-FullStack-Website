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
                        <li><a href="/">Home</a></li>
                        <li><a href="/aboutus">About</a></li>
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
                <a href="/register" class="primary-btn signup-btn">Sign Up Today</a>
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
                        <h2>Register</h2>
                        <div class="breadcrumb-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Register Section Begin -->
    <section class="register-section classes-page spad">
        <div class="container">
            <div class="classes-page-text">
                <div class="row">
                    <p>Have a account, <a href = '/login'>Login</a> now </p>
                    <div class="col-lg-8">
                        <div class="register-text">
                            <div class="section-title">
                                <h2>Register Now</h2>
                                <p>The First 7 Day Trial Is Completely Free With The Teacher</p>
                            </div>


                            <div class="alert alert-warning">
                            @if(Session::has('success'))
                            <p>{{ Session::get('success') }}</p>
                            @endif
                            </div>





                            <form method="POST" class="register-form">
                                @csrf

                                <a href = "/googlelogin"><i class="fa fa-google" style="font-size:24px"></i></a>
                                <a href = "/githublogin"><i class="fa fa-github" style="font-size:24px"></i></a>
                                <a href = "/twitterlogin"><i class="fa fa-twitter" style="font-size:24px"></i></a>

                                
                                <div class="row">
                                    <div class="col-lg-6">

                                        <label for="name">First Name</label>
                                        
                                        
                                        
                                        <br>
                                        @if($errors->has('first-name'))
                                        <label>{{$errors->first('first-name')}}</label>
                                        @endif


                                        <input type="text" id="name" name="first-name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="email">Your email address</label>



                                        <br>
                                        @if($errors->has('email'))
                                    <label>{{$errors->first('email')}}</label>
                                        @endif


                                        <input type="email" id="email" name="email">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="last-name">Last Name</label>
                                       
                                       
                                       <br>
                                        @if($errors->has('last-name'))
                                    <label>{{$errors->first('last-name')}}</label>
                                    @endif



                                        <input type="text" id="last-name" name="last-name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="mobile">Mobile No*</label>
                                       
                                       
                                       
                                       <br>
                                        @if($errors->has('mobile'))
                                    <label>{{$errors->first('mobile')}}</label>
                                        @endif



                                        <input type="number" id="mobile" name="mobile">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="password">Password</label>



                                        <br>
                                        @if($errors->has('password'))
                                    <label>{{$errors->first('password')}}</label>
                                        @endif

                                        <input type="password" id="password" name="password">
                                    </div>
                                </div>
                                <button type="submit" class="register-btn">Get Started</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Section End -->

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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>