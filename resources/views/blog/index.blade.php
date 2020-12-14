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
                        <li><a href="/">Home</a></li>
                        <li><a href="/aboutus">About</a></li>
                        <li><a href="/class">Classes</a></li>
                        <li class ="active"><a href="/blog">Blog</a></li>
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

    
    
    



    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
        <div>


            <div class="alert alert-warning">
                <div>{{ Session::get('message') }}</div>
            </div>
        


        <p> Want to add a new blog, <a href = '/newblog'> click here </a> </p>
        <br>
         </div>

            <div class="row">
                @foreach($blog as $bl)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="blog-widget">
                            <div class="bw-date">{{$bl->created_at}}</div>
                            <a class="tag">{{$bl->user['first-name']}} {{$bl->user['last-name']}}</a>

                        </div>
                        <h4><a href="/singleblog/{{$bl->id}}">{{$bl->subject}}</a></h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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