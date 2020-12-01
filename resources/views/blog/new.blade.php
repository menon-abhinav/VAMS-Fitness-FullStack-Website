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
    <link rel="stylesheet" href="{{URL :: asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{URL :: asset('css/style.css') }}" type="text/css">
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
                    <h3>VAMS FITNESS</h3>
                    <!-- <img src="img/logo.png" alt=""> -->
                </a>
            </div>
            <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/aboutus">About</a></li>
                        <li><a href="/class">Classes</a></li>
                        <li class = "active"><a href="/blog">Blog</a></li>
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
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/her.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Blog</h2>
                        <div class="breadcrumb-option">
                            <a href="/"><i class="fa fa-home"></i> Home</a>
                            <span>Blog</span>
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
                    <div class="col-lg-12">
                        <div class="register-text">
                            <div class="section-title">
                                <h2>New Blog</h2>
                                <p>Let the world hear you</p>
                            </div>


                            <div class="alert alert-warning">
                                    @if(Session::has('success'))
                                    <div>{{ Session::get('success') }}</div>
                                    @endif
                            </div>



                            <form method="POST" class="register-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="email">Subject</label>



                                        <br>
                                        @if($errors->has('subject'))
                                    <label>{{$errors->first('subject')}}</label>
                                        @endif


                                        <textarea id="subject" name="subject"></textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="password">Content</label>



                                        <br>
                                        @if($errors->has('content'))
                                    <label>{{$errors->first('content')}}</label>
                                        @endif

                                        <textarea id="content" name="content"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="register-btn">Add Blog</button>
                            </form>
                        </div>
                    <div class="col-lg-4">

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
    <script src="{{URL :: asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{URL :: asset('js/bootstrap.min.js') }}"></script>
    <script src="{{URL :: asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{URL :: asset('js/mixitup.min.js') }}"></script>
    <script src="{{URL :: asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{URL :: asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{URL :: asset('js/main.js') }}"></script>
</body>

</html>