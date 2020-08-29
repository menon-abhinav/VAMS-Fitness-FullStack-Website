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
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/contact">Contacts</a></li>
                        
                        @if(Auth::check())
                        <li class='active'><a href="/myaccount">My Account</a></li>
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
                        <h2>My Account</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>My Account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    
    
 


    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
        <div>
        <div class="alert alert-warning">
        @if(!empty($user_info->package['name']))
    <p> Your current plan is {{$user_info->package['name']}}</p>
    @else
    <p> No Package. Buy a package now. <a href='/class'>Click Here </a><p>
    @endif
    </div>


    <div class="alert alert-warning">
                                    @if(Session::has('login'))
                                    <div>{{ Session::get('login') }}</div>
                                    @endif
                                    <div>{{ $errors->first('login') }}</div>
                                </div>



        <br>
         </div>

            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="single-blog-item">
                    <h4>Latest Blog</h4>
                    <br>
                        @if(!empty($user_latest_blog))
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">{{$user_latest_blog->created_at}}</div>
                            <a class="tag">{{$user_latest_blog->user['first-name']}} {{$user_latest_blog->user['last-name']}}</a>

                        </div>
                        <h4><a href="/singleblog/{{$user_latest_blog->id}}">{{$user_latest_blog->subject}}</a></h4>
                        
                        
                        @else
                        <p> No Blog, yet. Want to make one</p>
                        <a href='/newblog'>Click Here Then </a>
                        
                        @endif
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="single-blog-item">
                    <h4>My Profile</h4>
                    <br>
                        <h6><a>First Name   : {{$user_info['first-name']}}</a></h6>
                        <br>
                        <h6><a>Last Name    : {{$user_info['last-name']}}</a></h6>
                        <br>
                        <h6><a>Email        : {{$user_info['email']}}</a></h6>
                        <br>
                        <h6><a>Mobil        : {{$user_info['mobile']}}</a></h6>

                        <br><br><br><br>
                        <a href = '/account/delete/{{encrypt($user_info->id)}}'> Delete Account </a>


                    </div>
                </div>




                <div class="col-lg-6 col-md-6">
                    <div class="single-blog-item">
                    <h4>My Comment</h4>
                    <br>
                        @if(!empty($user_comment))
                        <img src="img/blog/blog-1.jpg" alt="">
                        <div class="blog-widget">
                            <div class="bw-date">{{$user_comment->created_at}}</div>
                        </div>
                        <h4><a href="/singleblog/{{$user_comment->blog_id}}">{{$user_comment->subject}}</a></h4>
                        
                        
                        @else
                        <p> No comment, yet. Comment someone blog's now</p>
                        <a href='/blog'>Click Here Then </a>
                        
                        @endif
                    </div>
                </div>






                <div class="col-lg-6 col-md-6">
                    <div class="single-blog-item">
                    <h4>My Last Transaction</h4>
                    <br>
                        @if(!empty($last_transaction))
                        <div class="blog-widget">
                        </div>
                        <h6><a href="/mytransaction/{id}">Order Id: {{$last_transaction->order_id}}</a></h6><br>
                        <h6><a>Status: {{$last_transaction->status}}</a></h6><br>
                        <h6><a>Amount: {{$last_transaction->txnamount}}</a></h6><br>
                        <h6><a>Bank Name : {{$last_transaction->bankname}}</a></h6><br>


                        <h4> For other transaction <a href="/mytransaction/"}>Click Here</a></h4>
                        
                        @else
                        <p> No transaction till now, buy something today.</p>
                        <a href='/mytransaction/'>Click Here Then </a>
                        
                        @endif
                    </div>
                </div>









            </div>
        </div>
    </section>
    <!-- Blog Section End -->


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
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>