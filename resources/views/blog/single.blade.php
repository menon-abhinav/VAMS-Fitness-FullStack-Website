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
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="./about-us.html">About</a></li>
                        <li><a href="./classes.html">Classes</a></li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./contact.html">Contacts</a></li>
                    </ul>
                </nav>
                <a href="#" class="primary-btn signup-btn">Sign Up Today</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/her.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bd-hero-text">
                        <span>CAMERA</span>
                        <h2>Feeling lazy in the morning? Begin your day with this yogasana<br/> Closures</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->


    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-text">
                        <div class="bd-title">
                            <p>Lots of people tell me that while they want to practise yoga,
                                they just can’t get off the sofa. Well, no worries. Yoga can be done by the laziest of the laziest. 
                                Just stay where you are and do this routine;
                                I guarantee that you will be abuzz with positive energy afterwards.</p>
                            <p>If you, too, are in that sloth-like slump, and you absolutely need to sprinkle a little productivity into your day,
                                but have no idea where to get started, try meandering your way over to your yoga mat and adding some of these low-key poses to your flow.
                                Honestly, you'll probably feel pretty productive already, 
                                just for performing the sheer act of setting up your mat for practice. Ah, the joys of being lazy.</p>
                        </div>
                        <div class="bd-pic">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="img/blog/bd-1.jpg" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <img src="img/blog/bd-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>1. Easy Pose (Sukhasana)</h4>
                                <p>{{gzinflate($blog->content)}}</p>
                            </div>
                            <div class="bm-item">
                            </div>
                        </div>
                        <div class="bd-quote">
                            <samp>"</samp>
                            <p>“The attitude towards the gratitude is the highest in Yoga.”</p>
                            <div class="quote-author">
                                <h5>Yogi Bhajan</h5>
                                <span>Yogi </span>
                            </div>
                        </div>
                        <div class="bd-last-para">
                            <p>As you're chilling in balasana, scan your body and release any unnecessary tension that you may be holding on to.
                                Inhale deeply into your belly, and exhale slowly and audibly out of your mouth.</p>
                        </div>
                        <div class="tag-share">
                            <div class="tags">
                                <a href="#">Camera</a>
                                <a href="#">Photography</a>
                                <a href="#">Tips</a>
                            </div>
                            <div class="social-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="ba-pic">
                                        <img src="img/blog/blog-posted.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="ba-text">
                                        <h5>Megha Mathew</h5>
                                        <p>Loved the blog. Will surely try to implement in my life.</p>
                                        <div class="bt-social">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leave-comment">
                            <h3>Leave A Comment</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog-section recommend spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Recommended</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">June 12, 2020</div>
                            <a href="#" class="tag">#Gym</a>
                        </div>
                        <h4><a href="#">10 Exercises to boost your morning routine.</a></h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-2.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">July 27, 2020</div>
                            <a href="#" class="tag">#Sport</a>
                        </div>
                        <h4><a href="#">Check out the most fittest sports personalities.</a></h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog-item">
                        <img src="img/blog/blog-3.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">August 17, 2020</div>
                            <a href="#" class="tag">#Body</a>
                        </div>
                        <h4><a href="#">Benefits of drinking water on a consistent basis. </a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Start -->
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
    <!-- Footer Section Ends -->

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