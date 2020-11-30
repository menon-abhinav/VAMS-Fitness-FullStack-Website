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
                        <li class = "active"><a href="/class">Classes</a></li>
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
                        <h2>Classes</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>Class</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    @if (Auth::user()->plan == null)
   <!-- Membership Section Begin -->
   <section class="membership-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>MEMBERSHIP PLANS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($packages as $package)
            <div class="col-lg-4">
                <div class="membership-item">
                    <div class="mi-title">
                    <h4>{{$package->name}}</h4>
                        <div class="triangle"></div>
                    </div>
                <h2 class="mi-price">₹ {{$package->price}}<span>/01 mo</span></h2>
                    <ul>
                        <li>
                            <p>Duration</p>
                        <span>{{$package->days}} days</span>
                        </li>
                        <li>
                            <p>Personal trainer</p>
                            <span>00 person</span>
                        </li>
                        <li>
                            <p>Amount of people</p>
                            <span>01 person</span>
                        </li>
                        <li>
                            <p>Number of visits</p>
                            <span>Unlimited</span>
                        </li>
                    </ul>
                    <a href="/confirmpackage/{$product->id}" class="primary-btn membership-btn">Start Now</a>
                </div>
            </div>
            @endforeach
            
            </div>
        </div>
    </div>
</section>
<!-- Membership Section End -->

    
    @else
    <!-- Video Section Begin -->
    <section class="register-section classes-page spad">
        <div class="container">
        <iframe src="https://drive.google.com/file/d/{{$video->video}}/preview" width="640" height="480" allowfullscreen></iframe>
        </div>
    </section>
    <!-- Video Section End -->
    @endif
    <br>
    <br>
    <!-- Classes Timetable Section Begin -->
    <section class="classes-timetable spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Class Timetable</h2>
                    </div>
                    <div class="nav-controls">
                        <ul>
                            <li class="active" data-tsfilter="all">All Class</li>
                            <li data-tsfilter="gym">Gym</li>
                            <li data-tsfilter="crossfit">Crossfit</li>
                            <li data-tsfilter="cardio">Cardio</li>
                            <li data-tsfilter="body">Body</li>
                            <li data-tsfilter="yoga">Yoga</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-table">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                    <th>Saturday</th>
                                    <th>Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="workout-time">10.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>10.00 - 11.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="yoga">
                                        <h6>Yoga</h6>
                                        <span>10.00 - 12.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Body</h6>
                                        <span>10.00 - 12.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>10.00 - 11.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">14.00</td>
                                    <td></td>
                                    <td class="hover-bg ts-item">
                                        <h6>Running</h6>
                                        <span>14.00 - 16.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item">
                                        <h6>Box</h6>
                                        <span>14.00 - 15.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>14.00 - 16.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time">16.00</td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>16.00 - 18.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>16.00 - 19.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="yoga">
                                        <h6>Yoga</h6>
                                        <span>16.00 - 18.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>16.00 - 20.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="workout-time">18.00</td>
                                    <td class="hover-bg ts-item">
                                        <h6>Box</h6>
                                        <span>18.00 - 22.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Body</h6>
                                        <span>18.00 - 20.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                        <h6>Crossfit</h6>
                                        <span>18.00 - 21.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>18.00 - 22.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="workout-time">20.00</td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="gym">
                                        <h6>Gym</h6>
                                        <span>20.00 - 12.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td class="hover-bg ts-item" data-tsmeta="body">
                                        <h6>Body</h6>
                                        <span>20.00 - 21.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="cardio">
                                        <h6>Cardio</h6>
                                        <span>20.00 - 22.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                    <td></td>
                                    <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                        <h6>Crossfit</h6>
                                        <span>20.00 - 21.00</span>
                                        <div class="trainer-name">
                                            Manish Pillai
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainer Table Schedule Section End -->

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