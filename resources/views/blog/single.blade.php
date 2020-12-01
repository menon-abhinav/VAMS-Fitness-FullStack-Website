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
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
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
                    {{-- <!-- <img src="img/logo.png" alt=""> --> --}}
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/aboutus">About</a></li>
                        <li><a href="/class">Classes</a></li>
                        <li class="active"><a href="/blog">Blog</a></li>
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

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="{{URL::asset('img/her.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bd-hero-text">
                    <h2>Blog</h2>
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
                        <h2>{{$blog->subject}}</h2>

                        <hr>
                        <h6>By {{$blog->user['first-name']}} {{$blog->user['last-name']}} @ {{$blog->created_at}}</h6>
                        @if($blog->user == auth()->user())
                        <a href="/blog/delete/{{encrypt($blog->id)}}">Delete</a>
                        @endif
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <p>{{gzinflate($blog->content)}}</p>
                            </div>
                            <div class="bm-item">
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="row">
                                @foreach($comment as $c)
                                <div class="col-lg-9">
                                    <div class="ba-text">
                                        <h5>{{$c->user['first-name']}} {{$c->user['created_at']}}</h5>
                                        <p>{{gzinflate($c->content)}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @if(Auth::check())
                        <div class="leave-comment">
                            <h3>Leave A Comment</h3>
                            <form method="POST">
                            @csrf
                                <div class="row">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Comments" name="comment"></textarea>
                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    {{-- <!-- Latest Blog Section Begin -->
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
    <!-- Latest Blog Section End --> --}}

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
    <script src="{{ URL :: asset ('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ URL :: asset ('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL :: asset ('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ URL :: asset ('js/mixitup.min.js')}}"></script>
    <script src="{{ URL :: asset ('js/jquery.slicknav.js')}}"></script>
    <script src="{{ URL :: asset ('js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL :: asset ('js/main.js')}}"></script>
</body>

</html>