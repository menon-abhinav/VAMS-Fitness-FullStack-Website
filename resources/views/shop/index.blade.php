<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOXICONS -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


    <!-- CSS -->
    <link rel="stylesheet" href="assests/css/style.css">

    <title>VAMS-Shopping</title>

</head>
<body>
    <!-- Header -->

    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">VAMS-Fitness</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="/shop" class="nav__link active">Shop</a></li>
                    <li class="nav__item"><a href="/logout" class="nav__link">Logout</a></li>
                </ul>
            </div>

            <div>
                <a href = '/cart'><i class='bx bx-cart nav__cart'></i></a>
                <i class='bx bx-menu nav__toggle' id="nav-toggle"></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!-- /* HOME */ -->
            <section class="home" id='home'>
                <div class="home__container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">NEW <br><span>ARRIVALS</span></h1>
                    </div>

                    <img src="assests/imgs/home.png" alt="" class="home__img">
                </div>
            </section>

        <!-- /* Collection */ -->
            <section class="collection section">
                <div class="collection__container bd-grid">
                    <div class="collection__box">
                        <img src="assests/imgs/backpackMan.png" alt="" class="collection__img">

                        <div class="collection__data">
                            <h2 class="collection__title"><span class="collection__subtitle">Men</span><br>BackpackMan</h2>
                            <a href="#" class="collection__view">View Collecion</a>
                        </div>
                    </div>

                    <div class="collection__box">
                        <div class="collection__data">
                            <h2 class="collection__title"><span class="collection__subtitle">Woman</span><br>BackpackWoman</h2>
                            <a href="#" class="collection__view">View Collecion</a>
                        </div>
                        <img src="assests/imgs/backpackWoman.png" alt="" class="collection__img">
                    </div>
                </div>
            </section>


        <!-- /* Featured Products */ -->
            <section class="featured section" id="featured">
                <h2 class="section-title">FEATURED PRODUCTS</h2>

                <div class="featured__container bd-grid">

                    @foreach($shops as $shop)
                    <div class="featured__product">
                        <div class="featured__box">
                            <div class="featured__new">NEW</div>
                        <img src="{{$shop->image}}" alt="" class="featured__img">
                        </div>             


                        <div class="featured__data">
                        <h3 class="featured__name">{{$shop->name}}</h3>
                        <span class="featured__preci">Rs. {{$shop->price}}</span>
                            <br>
                        <a href="/addtocart/{{$shop->id}}}" class="button">Add to Cart</a>

                        </div>
                    </div>
                    @endforeach
                </div>
            </section>


        <!-- /* Offer */ -->
            <section class="offer section">
                <div class="offer__bg">
                    <div class="offer__data">
                        <h2 class="offer__title">Special Offer</h2>
                        <p class="offer__description">Special offers discounts for women this week only</p>

                        <a href="/shop" class="button">SHOP NOW</a>
                    </div>
                </div>
            </section>


        <!-- /* New Arrivals */ -->
            <section class="new section" id="new">
                <h2 class="section-title">NEW PRODUCTS TO ARRIVE</h2>

                <div class="new__container bd-grid">
                    <div class="new__box">
                        <img src="assests/imgs/new1.png" alt="" class="new__img">
                    </div>

                    <div class="new__box">
                        <img src="assests/imgs/new2.png" alt="" class="new__img">

                    </div>

                    <div class="new__box">
                        <img src="assests/imgs/new3.png" alt="" class="new__img">

                    </div>

                    <div class="new__box">
                        <img src="assests/imgs/new4.png" alt="" class="new__img">

                    </div>

                    <div class="new__box">
                        <img src="assests/imgs/new5.png" alt="" class="new__img">
                    </div>

                    <div class="new__box">
                        <img src="assests/imgs/new6.png" alt="" class="new__img">

                    </div>
                </div>
            </section>

        <!-- Sponsers -->
            <section class="sponsors section">
                <div class="sponsors__container bd-grid">
                    <div class="sponsors__logo">
                        <img src="assests/imgs/logo1.png" alt="">
                    </div>

                    <div class="sponsors__logo">
                        <img src="assests/imgs/logo2.png" alt="">
                    </div>

                    <div class="sponsors__logo">
                        <img src="assests/imgs/logo3.png" alt="">
                    </div>

                    <div class="sponsors__logo">
                        <img src="assests/imgs/logo4.png" alt="">
                    </div>
                </div>
            </section>
    
    
    </main>

    <!-- Footer -->
    <footer class="footer section">
        <div class="footer__container bd-grid">
            <div class="footer__box">
                <h3 class="footer__title">VAMS-Shopping</h3>
                <p class="footer__title">Products Store</p>
                <a href="#"><img src="assests/imgs/footerstore1.png" alt="" class="footer__store"></a>
                <a href="#"><img src="assests/imgs/footerstore2.png" alt="" class="footer__store"></a>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">EXPLORE</h3>
                <ul>
                    <li><a href="/" class="footer__link">Home</a></li>
                    <li><a href="/aboutus" class="footer__link">About Us</a></li>
                    <li><a href="/class" class="footer__link">Class</a></li>
                    <li><a href="/logout" class="footer__link">Logout</a></li>
                </ul>
            </div>

            <div class="footer__box">
                <h3 class="footer__title">OUR SERVICES</h3>
                <ul>
                    <li><a href="/blog" class="footer__link">Blogs</a></li>
                    <li><a href="/contact" class="footer__link">Query</a></li>
                    <li><a href="/shop" class="footer__link">Shop</a></li>
                </ul>
            </div>

        </div>

        <p class="footer__copy">&#169; 2020 VAMS-Fitness copyright all rights reserved</p>
    </footer>


    <!-- Main JS -->
    <script src="assests/js/main.js"></script>
</body>
</html>